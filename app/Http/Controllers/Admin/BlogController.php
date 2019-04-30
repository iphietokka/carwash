<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Model\Blog;
use App\User;
use Alert;
use File;

class BlogController extends Controller
{
    function __construct()
    {
        $this->title = 'blog';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $title = $this->title;

        $blogs = Blog::all();

        return view('admin.'.$title.'.index',compact('title','blogs'));
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
        $users = User::all();
        return view('admin.'.$title.'.create',compact('title','data','users'));
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

           'title' => 'required|string',
            'user_id' => 'required|string',
            'date' => 'required|date',
            'details' => 'required|string',
            'img'     => 'image|mimes:jpeg,png,jpg',
            ]);
      //image validate
       if ($validator->passes()) {
        $model = $request->all();
        $model['img'] = $request->img->getClientOriginalName();
        $request->img->move(public_path('images/blog'), $model['img']);
   
        Blog::create($model);

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
        $data = Blog::find($id);
         $users = User::all();
        return view('admin.'.$title.'.edit', compact('title','data','users'));
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


        $data=Blog::find($model['id']); 

    $data->fill($request->except('img'));
    if($file = $request->hasFile('img')) {
     $fullPath = public_path("images/blog/{$data->img}");
    if (File::exists($fullPath))  {
       File::delete($fullPath);
    }
    $file = $request->file('img');
    $fileName = $file->getClientOriginalName();
   $destinationPath = public_path().'/images/blog/' ;
    $file->move($destinationPath,$fileName);
    $data->img = $fileName ;
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
        if ($data = Blog::find($id))
    {
    $filename = $data->img;
    $fullPath = public_path("images/blog/{$data->img}");
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
