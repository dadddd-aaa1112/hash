<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'orig_row' => 'required',
            'update_freq' => 'required|numeric|min:0',
            'count_repet' => 'required|numeric|min:0',
            'salt' => 'required',
            'algorithm_id' => 'numeric|not_in:0',
        ];
    }

    public function messages()
    {
        return [
            'count_repet.min' => 'Число должно быть больше или равно 0',
            'update_freq.min' => 'Число должно быть больше или равно 0',
            'orig_row.required' => 'Необходимо ввести значение',
            'update_freq.required' => 'Необходимо ввести значение',
            'count_repet.required' => 'Необходимо ввести значение',
            'salt.required' => 'Необходимо ввести значение',
            'algorithm_id.not_in' => 'Необходимо выбрать значение',
        ];
    }
}
