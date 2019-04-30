<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Alert;
use Helper;
use App\Model\Washing_price;
use App\Model\Vehicle_type;
use App\Model\Washing_plan;

class WashingPriceController extends Controller
{

    function __construct()
    {
        $this->title = 'washing_price';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $title = $this->title;
       $price = Washing_price::all();
       $plan = Washing_plan::all();
       $type = Vehicle_type::all();
       return view('admin.'.$title.'.index', compact('title','price','plan','type'));
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
            $plan = Washing_plan::all();
            $type = Vehicle_type::all();
        return view('admin.'.$title.'.create', compact('title','data','plan','type'));
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
            'washing_plan_id' => 'required|string',
            'vehicle_type_id' => 'required|string',
            'price' => 'required|string',
            'duration' => 'required|string',
            ]);

        $model = $request->all();
     
        if (Washing_price::create($model)){
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
        $data = Washing_price::find($id);
        $type = Vehicle_type::all();
        $plan = Washing_plan::all();
      
        return view('admin.'.$title.'.edit', compact('title','data','type','plan'));
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
       

        $data = Washing_price::find($model['id']); 

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
       $data = Washing_price::find($id);
        if($data->delete()){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
        }
        return Redirect::to('admin/'.$this->title);
    }
}
