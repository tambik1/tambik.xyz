<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ModerationUser extends FormRequest
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
            'name.required' => 'Обязательно введите Имя',
            'name.min' => 'Имя должно состоять минимум из 5 символов',
            'name.max' => 'Имя должно быть меньше 50 символов',
        ];
    }
}
