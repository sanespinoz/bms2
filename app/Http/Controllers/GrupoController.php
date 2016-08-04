<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GrupoCreateRequest;
use App\Http\Requests\GrupoUpdateRequest;
use App\Grupo;
use Session;
use Redirect;
use App\Sector;
use App\Luminaria;
use App\Http\Requests;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $grupos =Grupo::paginate(10); 
      
       return view('grupo.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectores = Sector::all();  
        //dd($users);
       

        return view('grupo.create')->with('sectores', $sectores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoCreateRequest $request)
    {
             Grupo::create( $request->all()
       
            );
            Session::flash('message','Grupo Creado Correctamente');
        //return redirect('/usuario')->with('message','store');
            return redirect('grupo');
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
           $sectores = Sector::all();
        $grupo = Grupo::findOrFail($id);
        return view('grupo.edit',compact('grupo','sectores'));


      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,GrupoUpdateRequest $request)
    {
       $grupo= Grupo::find($id);
        $grupo->fill($request->all());
        $grupo->save();

         Session::flash('message','Grupo Editado Correctamente');
         return redirect('grupo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
         Grupo::destroy($id);
         Session::flash('message','Grupo Eliminado Correctamente');
         return redirect('grupo');

    }
}
