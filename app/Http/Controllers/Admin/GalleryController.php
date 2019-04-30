<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Alert;
use File;

use App\Model\Gallery;

class GalleryController extends Controller
{
    function __construct()
    {
        $this->title = 'gallery';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $title = $this->title;
        
        
        $data = Gallery::all();
        // dd($data);
        return view('admin.'.$title.'.index',compact('title','data'));
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
         $request->validate([

          'gallery_img' => 'image|mimes:jpeg,png,jpg',

        ]);

        $input = $request->all();

        $file = $request->file('gallery_img');

        $name = $file->getClientOriginalName();

        $file->move('images/gallery', $name);

        $input['gallery_img'] = $name;

        if(Gallery::create($input)){
            Alert::success('Gallery has been added', 'Success');
        }else{
             Alert::error('Something went wrong!', 'Oops...');
        }

        return back();
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
       $model = $request->all();


        $data=Gallery::find($model['id']); 

    $data->fill($request->except('gallery_img'));
    if($file = $request->hasFile('gallery_img')) {
     $fullPath = public_path("images/gallery/{$data->gallery_img}");
    if (File::exists($fullPath))  {
       File::delete($fullPath);
    }
    $file = $request->file('gallery_img') ;
    $fileName = $file->getClientOriginalName();
   $destinationPath = public_path().'/images/gallery/' ;
    $file->move($destinationPath,$fileName);
    $data->gallery_img = $fileName ;
}

     if($data->save()){   
            Alert::success('Successfully Updated', 'Success');
        }else{
            Alert::error('Something went wrong!', 'Oops...');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if ($data = Gallery::find($id))
    {
    $filename = $data->gallery_img;
    $fullPath = public_path("images/gallery/{$data->gallery_img}");
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
