<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Alert;
use App\Model\Opening_hour;
use File;

class OpeningHourController extends Controller
{
     function __construct()
    {
        $this->title = 'opening_hour';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = $this->title;

        $data = Opening_hour::all();

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
        if ($request->opening_time == '' && $request->closing_time == '') {

          Opening_hour::create(['day'=>$request->day, 'opening_time'=>'-', 'closing_time'=>'-']);

             Alert::success('Successfully Updated', 'Success');
               return Redirect::to('admin/'.$this->title);
        }


        $input = $request->all();

        if(Opening_hour::create($input)){   
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
        $data = Opening_hour::find($id);
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
       //      $input = $request->all();

       //      $time = Opening_hour::findOrFail($input['id']);

       //  if ($request->opening_time == '' && $request->closing_time == '') {

       //    $time->update(['day'=>$request->day, 'opening_time'=>'-', 'closing_time'=>'-']);

       //  Alert::success('Successfully Updated', 'Success');
       //  }else{
       //      Alert::error('Something went wrong!', 'Oops...');
       //  }
       //  return Redirect::to('admin/'.$this->title);

     
        
       // if($time->update($input)){
       //    Alert::success('Successfully Updated', 'Success');
       //  }else{
       //      Alert::error('Something went wrong!', 'Oops...');
       //  }

       //  return Redirect::to('admin/'.$this->title);

        $model = $request->all();
       

        $time = Opening_hour::find($model['id']); 

        if ($request->opening_time == '' && $request->closing_time == '') {
        $time->update(['day'=>$request->day, 'opening_time'=>'-', 'closing_time'=>'-']);
        Alert::success('Successfully Updated', 'Success');
        return Redirect::to('admin/'.$this->title);
        }

        if ($time->update($model)){                
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
        $time = Opening_hour::findOrFail($id);

        if($time->delete()){

        Alert::success('The Item was deleted.', 'Congrats');
        }else{
        Alert::error('Something went wrong!', 'Oops...');
        }
        return back()->with('deleted', 'Opening hours deleted');
    }
}
