<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Foto;
use Illuminate\Http\Request;
use App\Http\Requests\contactRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentarios.index', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Foto $foto)
    {
        return view('comentarios.create', compact('foto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo_comentario = new Comentario();
        $nuevo_comentario->contenido = $request->contenido;
        $nuevo_comentario->user()->associate(Auth::id());
        $nuevo_comentario->foto()->associate($request->foto_id);
        $nuevo_comentario->status()->associate($request->status_id);
        $nuevo_comentario->save();

        return back()->with('info', 'Comentario enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        return view('comentarios.show', compact('comentario'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        //
    }

    public function show_comentarios_by_foto(Foto $foto)
    {
        return Comentario::where('foto_id',$foto->id)->get();
    }
}
