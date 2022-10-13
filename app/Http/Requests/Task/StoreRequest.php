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
        $i = 0;
        return [
            'orig_row' . $i => 'required',
            'update_freq' . $i => 'required|numeric|min:0|max:300000',
            'count_repet' . $i => 'required|numeric|min:0',
            'salt' . $i => 'required',
            'algorithm_id' . $i => 'numeric|not_in:0',

        ];
    }

    public function messages()
    {
        $i = 0;
        return [
            'count_repet' . $i . '.min' => 'Число должно быть больше или равно 0',
            'update_freq' . $i . '.min' => 'Число должно быть больше или равно 0',
            'update_freq' . $i . '.max' => 'Число должно быть не больше 300 000',
            'orig_row' . $i . '.required' => 'Необходимо ввести значение',
            'update_freq' . $i . '.required' => 'Необходимо ввести значение',
            'count_repet' . $i . '.required' => 'Необходимо ввести значение',
            'salt' . $i . '.required' => 'Необходимо ввести значение',
            'algorithm_id' . $i . '.not_in' => 'Необходимо выбрать значение',
        ];

    }
}
