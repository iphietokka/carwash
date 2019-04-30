<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Model\Appointment;
use App\User;
use App\Model\Vehicle_company;
use App\Model\Vehicle_modal;
use App\Model\Vehicle_type;
use App\Model\Washing_plan;
use App\Model\Status;
use Alert;
use App\Model\Washing_price;
use Mail;
class AppointmentController extends Controller
{
     function __construct()
    {
        $this->title = 'appointment';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = $this->title;
          $washing_prices  = Washing_price::all();
          $vehicle_companies  = Vehicle_company::pluck('vehicle_company', 'id')->all();
          // dd($washing_prices);
         $data = Appointment::all();
        // dd($data);
        return view('user.'.$title.'.index',compact('title','data','washing_prices','vehicle_companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $title = $this->title;

        $users              = User::pluck('name', 'id')->all();
        $vehicle_companies  = Vehicle_company::all();
        $vehicle_modals     = Vehicle_modal::all();
        $vehicle_types      = Vehicle_type::all();
        $washing_plans      = Washing_plan::all();
        $status             = Status::all();
        $appointments       = Appointment::all();
        $washing_prices     = Washing_price::all();

        return view('user.'.$title.'.create',compact('title','users', 'vehicle_companies', 'vehicle_modals', 'vehicle_types', 'washing_plans', 'status', 'appointments', 'washing_prices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = $request->all();

          $user_name = User::findOrFail($model['user_id'])->name;
          $user_email = User::findOrFail($model['user_id'])->email;
          $washing_plan = Washing_plan::findOrFail($model['washing_plan_id'])->name;
          $vehicle_company = Vehicle_company::findOrFail($model['vehicle_company_id'])->vehicle_company;
          $vehicle_modal = Vehicle_modal::findOrFail($model['vehicle_modal_id'])->vehicle_modal;
          $vehicle_type = Vehicle_type::findOrFail($model['vehicle_types_id'])->type;
          $appointment_date = $model['appointment_date'];
          $vehicle_no = $model['vehicle_no'];
          $time_frame = $model['time_frame'];

          $model['appointment_date'] = date("Y/m/d", strtotime($request->appointment_date));

          $new = Appointment::create($model);

          $user = User::findOrFail($request->user_id);

          $user->appointment()->save($new);

          if (config('mail.username') == '' && config('mail.password') == '') {
            Alert::success('Your Appointment Has Been Booked', 'Success');
             return Redirect::to('user/'.$this->title);
        }
    
          $data = array(
            'name' => $user_name,
            'email' => $user_email,
            'washing_plan' => $washing_plan,
            'vehicle_company' => $vehicle_company,
            'vehicle_modal' => $vehicle_modal,
            'vehicle_type' => $vehicle_type,
            'date' => $appointment_date,
            'vehicle_no' => $vehicle_no,
            'time_frame' => $time_frame,
          );

          Mail::send('emails.appointment_emails', compact('data'), function($message) use ($data){
            $message->from(config('mail.username'));
            $message->to($data['email']);
          });

          Mail::send('emails.appointment_emails', compact('data'), function($message) use ($data){
            $message->to(config('mail.username'));
          });

          Alert::success('Your Appointment Has Been Booked With Email', 'Success');
          return Redirect::to('user/'.$this->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = $this->title;
        $data               = Appointment::find($id);
        $users              = User::all();
        $vehicle_companies  = Vehicle_company::all();
        $vehicle_modals     = Vehicle_modal::all();
        $vehicle_types      = Vehicle_type::all();
        $washing_plans      = Washing_plan::all();
        $status             = Status::all();
       
        $washing_prices     = Washing_price::all();

        return view('user.'.$title.'.edit', compact('title','users', 'vehicle_companies', 'vehicle_modals', 'vehicle_types', 'washing_plans', 'status', 'data', 'washing_prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $model = $request->all();

        $data = Appointment::findOrFail($model['id']); 
        $model['appointment_date'] = date("Y/m/d", strtotime($request->appointment_date));

        if ($data->update($model)){                
             Alert::success('Successfully Updated', 'Success');
        }else{
             Alert::error('Something went wrong!', 'Oops...');
        }
        return Redirect::to('user/'.$this->title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Appointment::find($id);
        if($data->delete()){
            Alert::success('Appointment Has Been Deleted', 'Success');
        }else{
            Alert::error('Something went wrong!', 'Oops...');
        }
        return Redirect::to('user/'.$this->title);
    }
}
