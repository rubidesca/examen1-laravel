<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    public function index(Request $request)
    {
        $searchText = $request->get('searchText');
        $vehiculos = Vehiculo::where('modelo', 'like', '%'.$searchText.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('vehiculos.index', compact('vehiculos', 'searchText'));
    }

    public function create()
    {
        return view('vehiculos.create');
    }

    public function show($id)
{
    
    $vehiculo = Vehiculo::findOrFail($id);
    return view('vehiculos.show', compact('vehiculo'));
}


    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|unique:vehiculos',
            'modelo' => 'required',
            'propietario' => 'required',
        ]);

        Vehiculo::create([
            'placa' => $request->placa,
            'modelo' => $request->modelo,
            'propietario' => $request->propietario,
        ]);

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo agregado exitosamente.');
    }

    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'modelo' => 'required',
            'propietario' => 'required',
        ]);

        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update([
            'modelo' => $request->modelo,
            'propietario' => $request->propietario,
        ]);

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->delete();

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo eliminado exitosamente.');
    }
}
