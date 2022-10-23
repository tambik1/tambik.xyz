<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TournamentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //TODO: Сделать проверку на Админа
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:50',
            'start_date' => 'required',
            'end_date' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Обязательно введите название турнира',
            'name.min' => 'Название турнира должно состоять минимум из 5 символов',
            'name.max' => 'Название турнира должно быть меньше 50 символов',
            'start_date.required' => 'Обязательно должна быть указана дата начала турнира',
            'end_date.required' => 'Обязательно должна быть указана дата окончания турнира',
        ];
    }
}
