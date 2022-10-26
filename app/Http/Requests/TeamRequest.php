<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'name' => 'required|min:5|max:50'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Обязательно введите название команды',
            'name.min' => 'Название команды должно состоять минимум из 5 символов',
            'name.max' => 'Название команды должно быть меньше 50 символов',
        ];
    }
}
