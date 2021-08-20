<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = User::get();

        return view('index', compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;
        $user->name = $request['name'];
        $user->last_name = $request['apellido'];
        $user->fecha_nacimiento = $request['fecha'];
        $user->email = $request['email'];
        $edad = Carbon::parse( $request['fecha'])->age;
        $user->edad = $edad;






        $user->save();



        return redirect()->route('index')->with('message','Registro creado satisfactoriamente') ;
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

        $user = User::findOrFail($id);
        return view('edit', compact('user'));

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
        $user = User::findOrFail($id);

        $edad = Carbon::parse( $request['fecha'])->age;
        $user->edad = $edad;
        $user->name = $request['name'];
        $user->last_name = $request['apellido'];
        $user->fecha_nacimiento = $request['fecha'];
        $user->email = $request['email'];
        $user->update();



        return redirect()->route('index')->with('message','Registro editado satisfactoriamente') ;

      
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('index')->with('message','Se ha eliminado satisfactoriamente') ;

   
    }
}
