<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgendaRequest extends FormRequest
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
            'name' => 'string|min:10|max:300',
            'phone' => 'telefone_com_ddd',
            'cellphone' => 'celular_com_ddd|nullable',
            'email' => 'string|email|nullable',
            'street' => 'string',
            'number' => 'string',
            'district' => 'string',
            'city' => 'string',
            'state' => 'uf'
        ];
    }
}
