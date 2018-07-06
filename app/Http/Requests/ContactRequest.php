<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()//pour effectuer un contrôle de sécurité éventuel sur l'identité ou les droits de l'émetteur 
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
            'nom' => 'bail|required|between:5,20|alpha',
            'email' =>'bail|required|email',
            'texte' =>'bail|required|max:250'
        ];
        //bail : on arrête de vérifier dès qu'une règle n'est pas respectée ;
    }
}
