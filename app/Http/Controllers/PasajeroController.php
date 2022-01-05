<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use App\Models\Bus;
use Illuminate\Http\Request;

/**
 * Class PasajeroController
 * @package App\Http\Controllers
 */
class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasajeros = Pasajero::paginate();

        return view('pasajero.index', compact('pasajeros'))
            ->with('i', (request()->input('page', 1) - 1) * $pasajeros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasajero = new Pasajero();
        $buses = Bus::all();
        return view('pasajero.create', compact('pasajero','buses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pasajero::$rules);

        $pasajero = Pasajero::create($request->all());

        return redirect()->route('pasajeros.index')
            ->with('success', 'Pasajero creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasajero = Pasajero::find($id);

        return view('pasajero.show', compact('pasajero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasajero = Pasajero::find($id);
        $buses = Bus::all();
        return view('pasajero.edit', compact('pasajero','buses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pasajero $pasajero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasajero $pasajero)
    {
        request()->validate(Pasajero::$rules);

        $pasajero->update($request->all());

        return redirect()->route('pasajeros.index')
            ->with('success', 'Pasajero actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pasajero = Pasajero::find($id)->delete();

        return redirect()->route('pasajeros.index')
            ->with('success', 'Pasajero eliminado con éxito');
    }
}
