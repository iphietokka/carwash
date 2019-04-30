<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Helper;
use Carbon;
use App\Model\Appointment;
use App\Model\Team;
use App\Model\Company_social;
use App\Model\Washing_plan;
use App\Model\Washing_plan_include;
use App\Model\Washing_price;
use App\Model\Vehicle_company;
use App\Model\Vehicle_modal;
use App\Model\Vehicle_type;
use App\Model\Contact;
use App\Model\Blog;
use App\Model\Clients;
use App\Model\Opening_hour;
use App\Model\Service;
use App\Model\Testimonial;
use App\Model\AboutUs;
use App\User;
use Mail;
use Alert;
use Newsletter;
use App\Model\Gallery;


class HomePageController extends Controller
{
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
         $washing_plans = Washing_plan::all();
          $washing_includes = Washing_plan_include::with('washing_plan')->get();
          $washing_prices = Washing_price::all();
         $vehicle_companies = Vehicle_company::all();
        $vehicle_modals = Vehicle_modal::all();
        $vehicle_types = Vehicle_type::all();
         $galleries = Gallery::all();
           $services = Service::all();
        $contacts = Contact::all();
         $blogs = Blog::orderBy('id', 'desc')->get();
         $clients = Clients::all();
        $washing_plan_lists = Washing_plan::all();
        $vehicle_company_lists = Vehicle_company::all();
        $vehicle_modal_lists = Vehicle_modal::all();
        $vehicle_type_lists = Vehicle_type::all();
        $opening_hours = Opening_hour::all();
        $testimonials = Testimonial::all();
        $about_us = AboutUs::all();
        $company_socials = Company_social::all();

        return view('index',compact('teams','washing_plans','washing_includes','washing_prices','vehicle_companies','vehicle_modals','vehicle_types','contacts','blogs','clients','washing_plan_lists','vehicle_company_lists','vehicle_modal_lists','vehicle_type_lists','galleries','opening_hours','services','testimonials','about_us','company_socials'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (Auth::check()) {

        $input = $request->all();
      
        $user_name = User::findOrFail($input['user_id'])->name;
        $user_email = User::findOrFail($input['user_id'])->email;
        $washing_plan = Washing_plan::findOrFail($input['washing_plan_id'])->name;
        $vehicle_company = Vehicle_company::findOrFail($input['vehicle_company_id'])->vehicle_company;
        $vehicle_modal = Vehicle_modal::findOrFail($input['vehicle_modal_id'])->vehicle_modal;
        $vehicle_type = Vehicle_type::findOrFail($input['vehicle_types_id'])->type;
        $appointment_date = $input['appointment_date'];
        $time_frame = $input['time_frame'];

        $input['appointment_date'] = date("Y/m/d", strtotime($request->appointment_date));

        $new = Appointment::create($input);

        $user = User::findOrFail(Auth::user()->id);

        $user->appointment()->save($new);

        if (config('mail.username') == '' && config('mail.password') == '') {
           
          return back()->with('added', 'Your Appointment Has Been Booked');
        }

        $data = array(
         
          'name' => $user_name,
          'email' => $user_email,
          'washing_plan' => $washing_plan,
          'vehicle_company' => $vehicle_company,
          'vehicle_modal' => $vehicle_modal,
          'vehicle_type' => $vehicle_type,
          'date' => $appointment_date,
          'time_frame' => $time_frame,
        );

        Mail::send('emails.home_appointment_emails', compact('data'), function($message) use ($data){
          $message->from(config('mail.username'));
          $message->to($data['email']);
        });

        Mail::send('emails.home_appointment_emails', compact('data'), function($message) use ($data){
          $message->to(config('mail.username'));
        });
        Alert::success('Your Appointment Has Been Booked With Email', 'Success');
        return back();

      }

      else{

        $password = bcrypt($request->password);

        $user = User::create(['name'=>$request->name, 'email'=>$request->email, 'password'=>$password, 'sex'=>$request->sex, 'date_birthday'=>$request->date_birthday, 'username'=>$request->username, 'phone'=>$request->phone, 'role'=>$request->role]);

        $input = $request->except(['username','name', 'email', 'password', 'sex', 'date_birthday', 'phone', 'role']);

        $input['user_id'] = $user->id;


        $washing_plan = Washing_plan::findOrFail($input['washing_plan_id'])->name;
        $vehicle_company = Vehicle_company::findOrFail($input['vehicle_company_id'])->vehicle_company;
        $vehicle_modal = Vehicle_modal::findOrFail($input['vehicle_modal_id'])->vehicle_modal;
        $vehicle_type = Vehicle_type::findOrFail($input['vehicle_types_id'])->type;
        $appointment_date = $input['appointment_date'];
        $time_frame = $input['time_frame'];


        $input['appointment_date'] = date("Y/m/d", strtotime($request->appointment_date));

        $new = Appointment::create($input);

        $user = User::findOrFail($input['user_id']);

        $user->appointment()->save($new);

        if (config('mail.username') == '' && config('mail.password') == '') {
          if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $request->remember_token )) {
            Alert::success('Your Appointment Has Been Booked', 'Success');
              return back();
          }
        }

        $data = array(
          'name' => $user->name,
          'email' => $user->email,
          'washing_plan' => $washing_plan,
          'vehicle_company' => $vehicle_company,
          'vehicle_modal' => $vehicle_modal,
          'vehicle_type' => $vehicle_type,
          'date' => $appointment_date,
          'time_frame' => $time_frame,
        );

        Mail::send('emails.home_appointment_emails', compact('data'), function($message) use ($data){
          $message->from(config('mail.username'));
          $message->to($data['email']);
        });

        Mail::send('emails.home_appointment_emails', compact('data'), function($message) use ($data){
          $message->to(config('mail.username'));
        });

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $request->remember_token )) {
             Alert::success('Your Appointment Has Been Booked With Email', 'Success');
            return back();
        }
      }
    }



    public function subscribe(Request $request)
    {
        if (! Newsletter::isSubscribed($request->email)) 
        {
            Newsletter::subscribe($request->email);
             Alert::success('Thanks for Subscription', 'Success');
            return back();
        }
           Alert::success('Already Subscribe', 'Success');
          return back()->with('status', 'Already Subscribe');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function service_detail($id)
    {
    // $company_socials = Company_social::all();
    $services = Service::find($id);
     $servicess = Service::all();
    $opening_hours = Opening_hour::all();
    $contacts = Contact::all();
     $company_socials = Company_social::all();
    // $socials = Social_team::with('teams')->get();
    return view('service_detail', compact('services', 'opening_hours', 'contacts','servicess','company_socials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
