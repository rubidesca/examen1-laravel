<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
    public function index(Request $request)
    {
        $searchText = $request->get('searchText');
        $entradas = Entrada::where('descripcion', 'like', '%'.$searchText.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('entradas.index', compact('entradas', 'searchText'));
    }

    public function create()
    {
        return view('entradas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
        ]);

        Entrada::create([
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('entradas.index')
            ->with('success', 'Entrada agregada exitosamente.');
    }
}
