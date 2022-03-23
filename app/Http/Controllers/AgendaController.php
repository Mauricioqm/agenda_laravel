<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Evento;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('evento.index');

        $eventos = Evento::paginate();

        return view('evento.index', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $evento = new Evento();
      return view('evento.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion de informacion
        request()->validate(Evento::$rules);;

        // DB::table('eventos')->insert([
        //     'document' => request()->input('document'),
        //     'name' => request()->input('name'),
        //     'pet' => request()->input('pet'),
        //     'hour' => request()->input('hour'),
        //     'start' => request()->input('start'),
        //     'end' => request()->input('start')
        // ]);

        $evento = Evento::create($request->all());

        return redirect()->route('evento.index')
            ->with('success', 'Reserva creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $evento = Evento::find($id);

      return view('evento.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);

        return view('evento.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        request()->validate(Evento::$rules);

        $evento->update($request->all());

        return redirect()->route('eventos.index')
            ->with('success', 'Reserva actualizada satisfactoriamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id)->delete();

        return redirect()->route('evento.index')
            ->with('success', 'Reserva  eliminada satisfactoriamente');
    }
}
