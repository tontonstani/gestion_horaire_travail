<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuartTravailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "debut_quart"=>'required|date|after_or_equal:today',
            "fin_quart"=>'required|date|after_or_equal:today',
            "id_employe"=>'required|integer',
        ];
    }
}
