<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Model\Contact;
use App\Model\Opening_hour;
use Mail;
use Alert;

class ContactMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $contacts = Contact::all();
    $opening_hours = Opening_hour::all();
      return view('contact', compact('contacts','opening_hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $this->validate($request, [
          'name'=>'required',
          'email'=>'required|email',
          'subject'=>'required',
          'mail_message'=>'required|min:10',
        ]);

        $data = array(
          'name' => $request->name,
          'email' => $request->email,
          'subject' => $request->subject,
          'mail_message' => $request->mail_message,
        );

        Mail::send('emails.contact_mail', compact('data'), function($message) use ($data){
          $message->from($data['email']);
          $message->to(config('mail.username'));
          $message->subject($data['subject']);
        });
          
        Alert::success('Email Send Successfully', 'Success');
        return Redirect::to('/contact');
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
