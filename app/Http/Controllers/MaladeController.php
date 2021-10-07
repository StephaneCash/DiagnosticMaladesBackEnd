<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Malade;


class MaladeController extends Controller
{
    public function index()
    {
        $malades = Malade::all();
        return $malades->toJson(JSON_PRETTY_PRINT);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $malade = new Malade;
        $malade->nom = $request->nom;
        $malade->postnom = $request->postnom;
        $malade->maladie = $request->maladie;
        $malade->prevention = $request->prevention;
        $malade->save();
        return response()->json($malade);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
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
    }
}
