<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use Illuminate\Support\Facades\Auth;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libro::all();

        return view ('libros.index', ['libros'=>$libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('libros.create');
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
        $libro = new Libro();
        $libro->data = $request->data;
        $libro->status = $request->status;
        $libro->page = $request->page;
        $libro->calif = $request->calif;
        $libro->ruta = $request->ruta;
        $libro->user_id = Auth::user()->id;
        if ($libro->save()){
            return redirect("/libros");
        }else{
            return view('create');
        }
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
        $libro = Libro::find($id);
        return view("libros.edit", compact('libro'));
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
        $libro = Libro::find($id);
        $libro->data = $request->data;
        $libro->status = $request->status;
        $libro->page = $request->page;
        $libro->calif = $request->calif;
        $libro->ruta = $request->ruta;
        if ($libro->save()){
            return redirect("/libros");
        }else{
            return view('edit',['libro' => $libro]);
        }
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
        Libro::destroy($id);
        return redirect("/libros");
    }
}
