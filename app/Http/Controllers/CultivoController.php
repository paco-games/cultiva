<?php

namespace cultiva\Http\Controllers;

use Illuminate\Http\Request;

use cultiva\Http\Requests;
use cultiva\Http\Controllers\Controller;
use cultiva\activeFarm;
use cultiva\States;
use cultiva\Ground;
use Session;

class CultivoController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->activeFarm = activeFarm::find($route->getParameter('cultivo'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = activeFarm::all();
        return view('cultivo.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = activeFarm::all();
        return view('cultivo.create', compact('id'));
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
    public function show($id)
    {
        //
    }

    public function vincular($id)
    {
        $terreno = Ground::find($id);
        $estados = States::lists('namestate', 'namestate');
        return view('cultivo.create', compact('estados', 'terreno'));
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
