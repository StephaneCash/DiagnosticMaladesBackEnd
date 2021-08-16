<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctors::all();
        return response()->json($doctors);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $doctor = new Doctors;
        $doctor->nom = $request->nom;
        $doctor->postnom = $request->postnom;
        $doctor->prenom = $request->prenom;
        $doctor->specialte = $request->specialte;
        $doctor->adress = $request->adress;
        $doctor->contact = $request->contact;
        $doctor->save();
        return response()->json($doctor);
    }

    public function show($id)
    {
        $doctor = Doctors::findOrFail($id);
        return response()->json($doctor);
    }   

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctors::findOrFail($id);
        $doctor->nom = $request->nom;
        $doctor->postnom = $request->postnom;
        $doctor->prenom = $request->prenom;
        $doctor->specialte = $request->specialte;
        $doctor->adress = $request->adress;
        $doctor->contact = $request->contact;
        $doctor->save();
        return response()->json($doctor);
    }

    public function destroy($id)
    {
        $doctor = Doctors::findOrFail($id);
        $doctor->delete();
        return response()->json($doctor);
    }
}
