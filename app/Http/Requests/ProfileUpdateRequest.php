<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "prenom"=>"required|string|max:30|min:4|regex:/^[A-Z]{1}[a-z]{2,29}$/",
            "nom"=>"required|string|max:30|min:4|regex:/^[A-Z]{1}[a-z]{2,29}$/",
            "email"=>"required|email|min:10|max:255|regex:/^\w{3,50}@\w{4,8}.[a-z]{2,3}$/",
            "telephone"=>"required|string|regex:/^\d{10}$/",
            "numero_employe"=>"required|integer|unique:users",
            "travail"=>"required|string",
            "departement"=>"required|string|min:4|max:100",
            "departement_surveillance"=>"required|string|min:4|max:255",
            "password"=>"required|string|min:8|max:30",
        ];
    }
}
