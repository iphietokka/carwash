<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Alert;
use File;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{

    function __construct()
    {
        $this->title = 'team';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;

        $data = Team::all(); 
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

            'status' => 'required|string',
            'post' => 'required|string',
            'date_join' => 'required|date',
            'email' => 'email|max:255|unique:users',
            'name' => 'required|string',
             'phone' => 'string',
             'date_birthday' => 'required|string',
             'address' => 'string',
             'sex' => 'string',
            'photo'     => 'image|mimes:jpeg,png,jpg',
            ]);
      //image validate
       if ($validator->passes()) {
        $model = $request->all();
        $model['date_birthday'] = date("Y-m-d", strtotime($request->date_birthday));
        $model['photo'] =time() . $request->photo->getClientOriginalName();
        $request->photo->move(public_path('images/team'), $model['photo']);
   
        Team::create($model);

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
        $data = Team::find($id);
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


        $data=Team::find($model['id']); 

    $data->fill($request->except('photo'));
    if($file = $request->hasFile('photo')) {
     $fullPath = public_path("images/team/{$data->photo}");
    if (File::exists($fullPath))  {
       File::delete($fullPath);
    }
    $file = $request->file('photo') ;
    $fileName = $file->getClientOriginalName();
   $destinationPath = public_path().'/images/team/' ;
    $file->move($destinationPath,$fileName);
    $data->photo = $fileName ;
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
        if ($data = Team::find($id))
    {
    $filename = $data->photo;
    $fullPath = public_path("images/team/{$data->photo}");
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
