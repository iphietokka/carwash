<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Company_social;
use App\Model\Service;
use App\Model\Opening_hour;
use App\Model\Contact;
use App\Model\Washing_plan;
use App\Model\Washing_plan_include;
use App\Model\Washing_price;
use App\Model\Vehicle_type;
use App\Model\Gallery;
use App\Model\Team;
use App\Model\Social_team;
use App\Model\Appointment_user;

class Teamcontroller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $company_socials = Company_social::all();
    $services = Service::all();
    $opening_hours = Opening_hour::all();
    $contacts = Contact::all();
    $teams = Team::all();
    $socials = Social_team::with('teams')->get();
    return view('team', compact('company_socials', 'services', 'opening_hours', 'contacts', 'teams', 'socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function team_detail($id)
    {
    $company_socials = Company_social::all();
    $services = Service::all();
    $opening_hours = Opening_hour::all();
    $contacts = Contact::all();
    $teams = Team::find($id);
    $teamss = Team::all();
    $socials = Social_team::with('teams')->get();
    return view('team_detail', compact('company_socials', 'services', 'opening_hours', 'contacts', 'teams', 'socials','teamss'));
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
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update(Request $request)
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
