<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class GroupStoreRequest extends FormRequest
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
        $i = 1;
        $j = 2;
        $k = 3;

        return [
            'orig_row' . $i => 'required',
            'update_freq' . $i => 'required|numeric|min:0|max:300000',
            'count_repet' . $i => 'required|numeric|min:0',
            'salt' . $i => 'required',
            'algorithm_id' . $i => 'numeric|not_in:0',


            'orig_row' . $j => 'required',
            'update_freq' . $j => 'required|numeric|min:0|max:300000',
            'count_repet' . $j => 'required|numeric|min:0',
            'salt' . $j => 'required',
            'algorithm_id' . $j => 'numeric|not_in:0',

            'orig_row' . $k => 'required',
            'update_freq' . $k => 'required|numeric|min:0|max:300000',
            'count_repet' . $k => 'required|numeric|min:0',
            'salt' . $k => 'required',
            'algorithm_id' . $k => 'numeric|not_in:0',

        ];
    }

    public function messages()
    {
        $i = 1;
        $j = 2;
        $k = 3;

        return [
            'count_repet' . $i . '.min' => 'Число должно быть больше или равно 0',
            'update_freq' . $i . '.min' => 'Число должно быть больше или равно 0',
            'update_freq' . $i . '.max' => 'Число должно быть не больше 300 000',
            'orig_row' . $i . '.required' => 'Необходимо ввести значение',
            'update_freq' . $i . '.required' => 'Необходимо ввести значение',
            'count_repet' . $i . '.required' => 'Необходимо ввести значение',
            'salt' . $i . '.required' => 'Необходимо ввести значение',
            'algorithm_id' . $i . '.not_in' => 'Необходимо выбрать значение',

            'count_repet' . $j . '.min' => 'Число должно быть больше или равно 0',
            'update_freq' . $j . '.min' => 'Число должно быть больше или равно 0',
            'update_freq' . $j . '.max' => 'Число должно быть не больше 300 000',
            'orig_row' . $j . '.required' => 'Необходимо ввести значение',
            'update_freq' . $j . '.required' => 'Необходимо ввести значение',
            'count_repet' . $j . '.required' => 'Необходимо ввести значение',
            'salt' . $j . '.required' => 'Необходимо ввести значение',
            'algorithm_id' . $j . '.not_in' => 'Необходимо выбрать значение',

            'count_repet' . $k . '.min' => 'Число должно быть больше или равно 0',
            'update_freq' . $k . '.min' => 'Число должно быть больше или равно 0',
            'update_freq' . $k . '.max' => 'Число должно быть не больше 300 000',
            'orig_row' . $k . '.required' => 'Необходимо ввести значение',
            'update_freq' . $k . '.required' => 'Необходимо ввести значение',
            'count_repet' . $k . '.required' => 'Необходимо ввести значение',
            'salt' . $k . '.required' => 'Необходимо ввести значение',
            'algorithm_id' . $k . '.not_in' => 'Необходимо выбрать значение',
        ];

    }
}
