<?php

namespace App\Http\Controllers;

use App\Models\Vacance;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVacanceRequest;
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
    public function store(StoreVacanceRequest $request)
    {
        //
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
    public function update(UpdateVacanceRequest $request, Vacance $vacance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacance $vacance)
    {
        //
    }
}
