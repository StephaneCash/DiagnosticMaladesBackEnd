<?php

namespace App\Http\Controllers;

use App\Models\Maladie;
use Illuminate\Http\Request;

class MaladieController extends Controller
{
    public function index()
    {
        //$data = Maladie::join('doctor', 'doctor.id', '=', 'id.id');
        $maladies = Maladie::all();
        return $maladies->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
