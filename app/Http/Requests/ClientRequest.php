<?php

namespace App\Http\Requests;

use App\Client;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            //
            
            'name' => 'required',
            'registration' => 'required|unique:clients',
            'location' => 'required',
            'shirtSize' => 'required',
            'word' => 'required|max:20|alpha'

        ];
    }

    public function messages()
    {
       return [
           'name.required' => "O campo nome tem que ser preenchido",
           'registration.required' => "O campo matricula tem que ser preenchido",
           'location.required' => "O campo localidade tem que ser preenchido",
           'shirtSize.required' => "O campo Tamanho da Camisa tem que ser preenchido",
           'word.required' => "A palavra de sentimento tem que ser preenchida",
           "word.max" => "So pode ser incluida uma unica palavra",
           "registration.unique" => "Matricula ja inserida",
           "word.alpha" => "So pode ser cadastrado um unico sentimento"

       ];
    }
}
