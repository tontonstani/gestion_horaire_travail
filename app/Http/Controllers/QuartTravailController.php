<?php

namespace App\Http\Controllers;

use App\Models\QuartTravail;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuartTravailRequest;

class QuartTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('quart_travail.index', ['quarts' => QuartTravail::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quart_travail.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuartTravailRequest $request)
    {
        QuartTravail::create([
            "debut_quart" => $request->input('debut_quart'),
            "fin_quart" => $request->input('fin_quart'),
            "id_employe" => $request->input('id_employe'),
        ]);
        return redirect()->route('quart_travails.index')->with("succes","Le quart de travail a été ajouté.");
    }

    /**
     * Display the specified resource.
     */
    public function show(QuartTravail $quartTravail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuartTravail $quartTravail)
    {
        return view("quart_travail.modifier", ["quart" => $quartTravail]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuartTravailRequest $request, QuartTravail $quartTravail)
    {
        $quartTravail->update([
           "debut_quart" => $request->input('debut_quart'),
           "fin_quart" => $request->input('fin_quart'),
           "id_employe" => $request->input('id_employe'),
        ]);
        $quartTravail->save();
        return redirect()->route('quart_travails.index')->with("success","Le quart de travail a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuartTravail $quartTravail)
    {
        $quartTravail->delete();
        return redirect()->route('quart_travails.index')->with("succes","Le quart de travail a été supprimé.");
    }
}
