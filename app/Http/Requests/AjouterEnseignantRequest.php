<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AjouterEnseignantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sec_s' => 'required|unique:enseignant|digits:14',
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'email' => 'required|email|max:50|regex:/(.*)@esi-sba.dz/i|unique:enseignant',
            'telephone' => 'required',
            'date_n' => 'required',
            'lieu_n' => 'required|max:50',
            'adresse' => 'required|max:100',
            'nom_fr' => 'required|max:50|regex:/^[a-zA-Z_ ]*$/u',
            'prenom_fr' => 'required|max:50|regex:/^[a-zA-Z_ ]*$/u',
            'date_s' => 'required',
            'date_r' =>'required',
            
        ];
    }
}































