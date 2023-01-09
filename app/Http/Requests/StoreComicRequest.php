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

            'title' => 'required|min:2|max:100',
            'description' => 'nullable|max:255',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|decimal:2',
            'series' => 'nullable|max:100',
            'sale_date' => 'nullable|date_format:Y/m/d',
            'type' => 'nullable|max:255'

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Campo obbligatorio',
            'title.min' => 'Il titolo deve essere di almeno :min caratteri',
            'title.max' => 'Il titolo deve essere di massimo :max caratteri',
            'description.max' => 'La descrizione deve essere di massimo :max caratteri',
            'thumb.max' => 'L\'immagine deve essere di massimo :max caratteri',
            'price' => 'Il prezzo deve avere :decimal numeri decimali',
            'sale_date.date_format' => 'Il formato della data deve essere :date_format',
            'type.max' => 'Il tipo deve essere di massimo :max caratteri'
        ];
    }
}
