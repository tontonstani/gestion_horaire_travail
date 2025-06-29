<?php

namespace App\Http\Controllers;

use App\Models\Vacance;
use App\Http\Controllers\Controller;
use App\Http\Requests\VacanceRequest;
use App\Http\Requests\UpdateVacanceRequest;

class VacanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vacance.index', ['vacances' => Vacance::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacance.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VacanceRequest $request)
    {
        Vacance::create([
            "debut_vacance" => $request->input('debut_vacance'),
            "fin_vacance" => $request->input('fin_vacance'),
            "id_employe" => $request->input('id_employe'),
        ]);
        return redirect()->route("vacances.index")->with("succes","Les vacances ont été ajoutés.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacance $vacance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacance $vacance)
    {
        return view('vacance.modifier', ['vacance' => $vacance]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VacanceRequest $request, Vacance $vacance)
    {
        $vacance->update([
            "debut_vacance"=>$request->get('debut_vacance'),
            "fin_vacance"=>$request->get('fin_vacance'),
            "id_employe"=>$request->get('id_employe'),
        ]);
        $vacance->save();
        return redirect()->route('vacances.index')->with("succes","Les vacances ont été modifiés.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacance $vacance)
    {
        $vacance->delete();
        return redirect()->route('vacances.index')->with("succes","Les vacances ont été supprimés.");
    }
}
