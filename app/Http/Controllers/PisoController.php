<?php

namespace App\Http\Controllers;

use App\Http\Requests\PisoCreateRequest;
use App\Http\Requests\PisoUpdateRequest;
use App\Piso;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return response()->json(Piso::orderBy('nombre', 'asc')->paginate(4));
    }

    /**
     * Show the form for creating a new resource.
     * Lo crea en la vista del front end
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PisoCreateRequest $request)
    {
       $piso = Piso::create($request->all());
        //return redirect('pisos');
       
         $piso->save();
        return response()->json(array('success' => true));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return response()->json(Piso::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $piso =Piso::find($id);
       // return view('pisos.edit',['piso'=>$piso]);
        return response()->json(Piso::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,PisoUpdateRequest $request)
    { 
       $piso = Piso::find($id);
       $piso->fill($request->all());
       $piso->save();
        // Session::flash('message','Piso Editado Correctamente');
        // return redirect('pisos');
        return response()->json(array('success' => true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(Piso::destroy($id)) {
        // Session::flash('message','Piso Eliminado Correctamente');
         //return redirect('pisos');
         return response()->json(array('success' => true));

    };
}
}
