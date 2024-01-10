<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'description' => 'required|nullable',
            'price' => 'required|max:20',
            'sale_date' => 'required',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'Il campo titolo deve avere massimo :max caratteri',
            'description.required' => 'Il campo description è obbligatorio',
            'description.nullable' => 'Il campo description può non esistere',
            'price.required' => 'Il campo price è obbligatorio',
            'price.max' => 'Il campo price deve avere massimo :max caratteri',
            'sale_date.required' => 'Il campo sale_date è obbligatorio',
            'type.required' => 'Il campo type è obbligatorio',
        ];
    }
}
