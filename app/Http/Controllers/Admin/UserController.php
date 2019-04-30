<?php

namespace App\Http\Controllers\Admin;

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

class UserController extends Controller
{

    function __construct()
    {
        $this->title = 'user';
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
        return view('admin.'.$title.'.index',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title; 
        $data = '';
        return view('admin.'.$title.'.create', compact('title','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $validator = Validator::make($request->all(), [

            'password' => 'required|string|confirmed',
            'username' => 'required|string|max:20|unique:users',
            'role' => 'required|string',
            'email' => 'email|max:255|unique:users',
            'name' => 'required|string',
             'phone' => 'string',
             'date_birthday' => 'date',
             'address' => 'string',
             'sex' => 'string',
              'photo'     => 'image|mimes:jpeg,png,jpg',
            ]);
      //image validate
       if ($validator->passes()) {
        $model = $request->all();
        $model['date_birthday'] = date("Y/m/d", strtotime($request->dob));
        $model['password'] = bcrypt($model['password']); 
        $model['photo'] = time() . $request->photo->getClientOriginalName();
        $request->photo->move(public_path('images/users'), $model['photo']);
        User::create($model);

        Alert::success('Successfully Updated', 'Success');
        }else{
             Alert::error('Something went wrong!', 'Oops...');
        }
        return Redirect::to('admin/'.$this->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = $this->title;
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
        return view('admin.'.$title.'.edit', compact('title','data'));
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

          $name = time() . $file->getClientOriginalName();

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
        return Redirect::to('admin/'.$this->title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
         if ($data = User::find($id))
    {
    $filename = $data->photo;
    $fullPath = public_path("images/users/{$data->photo}");
    if (File::exists($fullPath))  {
        File::delete($fullPath);
    }
    $data->delete($fullPath);

    Alert::success('Data Berhasil Dihapus', 'Selamat');
    
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
        }
        return Redirect::to('admin/'.$this->title);
    }
}
