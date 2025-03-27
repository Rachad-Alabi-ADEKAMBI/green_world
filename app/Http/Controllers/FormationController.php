<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('formations.index', compact('formations'));
    }

    public function create()
    {
        return view('formations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'duree' => 'required|integer',
            'prix' => 'required|numeric',
        ]);

        Formation::create($request->all());

        return redirect()->route('formations.index')->with('success', 'Formation ajoutée !');
    }

    public function edit(Formation $formation)
    {
        return view('formations.edit', compact('formation'));
    }

    public function update(Request $request, Formation $formation)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'duree' => 'required|integer',
            'prix' => 'required|numeric',
        ]);

        $formation->update($request->all());

        return redirect()->route('formations.index')->with('success', 'Mise à jour réussie !');
    }

    public function destroy(Formation $formation)
    {
        $formation->delete();
        return redirect()->route('formations.index')->with('success', 'Formation supprimée !');
    }
}
