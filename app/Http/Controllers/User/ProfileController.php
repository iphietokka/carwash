<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\User;
use Alert;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    function __construct()
    {
        $this->title = 'profile';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = $this->title;
        $data = User::all();
        // $data = User::where('id', '!=', Auth::id())->get();
        return view('user.'.$title.'.index',compact('title','data'));
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
        $data = User::find($id);
        return view('user.'.$title.'.edit', compact('title','data'));
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


        $boat=User::find($model['id']); 

        if ($request->password == '') {

          $input = $request->except('password');

        }
        else {
          $input = $request->all();
        }

        if ($file = $request->file('photo')) {

          $name = $file->getClientOriginalName();

          $file->move('images/users', $name);

          if($file = $request->hasFile('photo')) {
            $fullPath = public_path("images/users/{$boat->photo}");
            if (File::exists($fullPath))  
            File::delete($fullPath);
        }

          $input['photo'] = $name;

        }

        if (!$request->password == '') {

          $input['password'] = bcrypt($request->password);

        }
       

     if( $boat->update($input)){   
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
        //
    }
}
