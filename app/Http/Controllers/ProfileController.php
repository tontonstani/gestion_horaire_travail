<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("employe.index", ["employes"=>User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('employe.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileUpdateRequest $request){
        User::create([
            'nom' => $request->input("nom"),
            'prenom' => $request->input("prenom"),
            'email' => $request->input("email"),
            'telephone' => $request->input("telephone"),
            'numero_employe' => $request->input("numero_employe"),
            'travail' => $request->input("travail"),
            'departement' => $request->input("departement"),
            'departement_surveillance' => $request->input("departement_surveillance"),
            'password' => Hash::make($request->input("password")),
        ]);
        return redirect()->route('employes.index');
    }
    /**
     * Display the user's profile form.
     */
    public function edit(User $employe): View
    {
        return view('employe.modifier', ['employe' => $employe]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, User $employe): RedirectResponse
    {
        $employe->update([
            "prenom"=>$request->get('prenom'),
            "nom"=>$request->get('nom'),
            "email"=>$request->get('email'),
            "telephone"=>$request->get('telephone'),
            "numero_employe"=>$request->get('numero_employe'),
            "travail"=>$request->get('travail'),
            "departement"=>$request->get('departement'),
            "departement_surveillance"=>$request->get('departement_surveillance'),
            "password"=>$request->get('password'),
        ]);
        $employe->save();
        return redirect()->route('employes.index');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(User $employe): RedirectResponse
    {
        $employe->delete();
        return redirect()->route('employes.index');
    }
}
