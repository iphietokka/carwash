<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Model\Appointment_user;
use App\Model\Washing_price;
use App\Model\Payment_mode;
use Alert;

class PaymentController extends Controller
{

    function __construct()
    {
        $this->title = 'payment';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;

        $payments = Appointment_user::all();
        $washing_prices = Washing_price::all();
        $payment_mode_lists = Payment_mode::pluck('mode', 'id')->all();

        return view('admin.'.$title.'.index',compact('title','payments','washing_prices','payment_mode_lists'));
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
        //
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
        $data = Appointment_user::find($id);
        $payment_mode_lists = Payment_mode::all();
        return view('admin.'.$title.'.edit', compact('title','data','payment_mode_lists'));
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
       

        $data = Appointment_user::find($model['id']); 

        if ($data->update($model)){                
             Alert::success('Successfully Updated', 'Success');
        }else{
             Alert::error('Something went wrong!', 'Oops...');
        }
        return Redirect::to('admin/'.$this->title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = Appointment_user::find($id);
        if($data->delete()){
            Alert::success('The Item was deleted.', 'Congrats');
        }else{
            Alert::error('Something went wrong!', 'Oops...');
        }
        return Redirect::to('admin/'.$this->title);
    }
}
