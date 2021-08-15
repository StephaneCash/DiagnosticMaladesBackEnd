<?php

namespace App\Http\Controllers;

use App\Models\Maladie;
use Illuminate\Http\Request;

class MaladiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maladies = Maladie::all();
        return response()->json($maladies);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $maladie = new Maladie;
        $maladie->nom = $request->nom;
        $maladie->type = $request->type;
        $maladie->symptomes = $request->symptomes;
        $maladie->description = $request->description;
        $maladie->save();
        return response()->json($maladie);
    }

    public function show($id)
    {
        $maladie = Maladie::findOrFail($id);
        return response()->json($maladie);
    }   

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $maladie = Maladie::findOrFail($id);
        $maladie->nom = $request->nom;
        $maladie->type = $request->type;
        $maladie->symptomes = $request->symptomes;
        $maladie->description = $request->description;
        $maladie->save();
        return response()->json($maladie);
    }

    public function destroy($id)
    {
        $maladie = Maladie::findOrFail($id);
        $maladie->delete();
        return response()->json($maladie);
    }
}
