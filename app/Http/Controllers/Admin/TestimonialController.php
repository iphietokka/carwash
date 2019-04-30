<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Alert;
use App\Model\Testimonial;
use File;

class TestimonialController extends Controller
{
    function __construct()
    {
        $this->title = 'testimonial';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = $this->title;

        $data = Testimonial::all();

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

           'name' => 'required|string',
            'detail' => 'required|string',
            'post' => 'required|string',
            'image'     => 'image|mimes:jpeg,png,jpg',
            ]);
      //image validate
       if ($validator->passes()) {
        $model = $request->all();
        $model['image'] = $request->image->getClientOriginalName();
        $request->image->move(public_path('images/testimonials'), $model['image']);
   
        Testimonial::create($model);

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
        $data = Testimonial::find($id);
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


        $data=Testimonial::find($model['id']); 

    $data->fill($request->except('image'));
    if($file = $request->hasFile('image')) {
     $fullPath = public_path("images/testimonials/{$data->image}");
    if (File::exists($fullPath))  {
       File::delete($fullPath);
    }
    $file = $request->file('image');
    $fileName = $file->getClientOriginalName();
   $destinationPath = public_path().'/images/testimonials/' ;
    $file->move($destinationPath,$fileName);
    $data->image = $fileName ;
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
        if ($data = Testimonial::find($id))
    {
    $filename = $data->image;
    $fullPath = public_path("images/testimonials/{$data->image}");
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
