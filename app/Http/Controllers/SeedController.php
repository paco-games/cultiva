<?php

namespace cultiva\Http\Controllers;

use Illuminate\Http\Request;
use cultiva\Seed;
use cultiva\Http\Requests;
use cultiva\Http\Controllers\Controller;
use Session;
use Redirect;

use DB;

class SeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $semillas = DB::table('seeds')->get();
        return view('cultivo.listadoSemillas',compact('semillas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //'

                return view('seeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $Seed = new Seed();
            $Seed->description = $request->description;
            $Seed->period = $request->period;
            $Seed->timeProduction = $request->timeProduction;
            $Seed->estimatedEfficiency = $request->estimatedEfficiency;
            $Seed->groundType = $request->groundType;            
            $Seed->weatherType = $request->weatherType;
            $Seed->user_id="1";
            $Seed->save();
        
                
        Session::flash('message','Semilla agregado correctamente');
         return Redirect::route('seeds.create');
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
