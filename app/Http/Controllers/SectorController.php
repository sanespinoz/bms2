<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SectorCreateRequest;
use App\Http\Requests\SectorUpdateRequest;
use App\Sector;
use Session;
use Redirect;
use App\Piso;
use App\Grupo;
use App\Http\Requests;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        
        $sectores =Sector::paginate(10); 
      
       return view('sector.index', compact('sectores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $pisos = Piso::all();  
        //dd($users);
       

        return view('sector.create')->with('pisos', $pisos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectorCreateRequest $request)
    {
       Sector::create( $request->all()
          
            );
            Session::flash('message','Sector Creado Correctamente');
       
            return redirect('sector');
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
      
        $pisos = Piso::all();
        $sector = Sector::findOrFail($id);
        return view('sector.edit',compact('sector','pisos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,SectorUpdateRequest $request)
    {
       
        $sector= Sector::find($id);
        $sector->fill($request->all());
        $sector->save();

         Session::flash('message','Sector Editado Correctamente');
         return redirect('sector');

      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Sector::destroy($id);
         Session::flash('message','Sector Eliminado Correctamente');
         return redirect('sector');



   }
}

