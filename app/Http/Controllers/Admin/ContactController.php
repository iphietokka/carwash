<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Alert;
use File;
use App\Model\Contact;

class ContactController extends Controller
{
    function __construct()
    {
        $this->title = 'contact';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;

        $data = Contact::all();

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
        return view('admin.'.$title.'.create',compact('title','data'));
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

           'c_name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'email' => 'email|max:255|unique:users',
            'website' => 'required|string',
            'logo'     => 'image|mimes:jpeg,png,jpg',
            ]);
      //image validate
       if ($validator->passes()) {
        $model = $request->all();
        $model['logo'] = $request->logo->getClientOriginalName();
        $request->logo->move(public_path('images/logo'), $model['logo']);
   
        Contact::create($model);

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
        $data = Contact::find($id);
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


        $data=Contact::find($model['id']); 

    $data->fill($request->except('logo'));
    if($file = $request->hasFile('logo')) {
     $fullPath = public_path("images/logo/{$data->logo}");
    if (File::exists($fullPath))  {
       File::delete($fullPath);
    }
    $file = $request->file('logo');
    $fileName = $file->getClientOriginalName();
   $destinationPath = public_path().'/images/logo/' ;
    $file->move($destinationPath,$fileName);
    $data->logo = $fileName ;
    }

     if($data->save()){   
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
        if ($data = Contact::find($id))
    {
    $filename = $data->logo;
    $fullPath = public_path("images/logo/{$data->logo}");
    if (File::exists($fullPath))  {
        File::delete($fullPath);
    }
    $data->delete($fullPath);

    Alert::success('The Item was deleted.', 'Congrats');
    
        }else{
            Alert::error('Something went wrong!', 'Oops...');
        }
        return Redirect::to('admin/'.$this->title);
    }
}
