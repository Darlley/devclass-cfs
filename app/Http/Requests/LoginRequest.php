<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LoginRequest extends FormRequest
{
    // protected $redirectRoute = "error";
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'nullable|email',
            'password' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return[
            'required' => "Sem :attribute não consigo 😓",
            'min' => "Tente :attribute com :min caracteres 🤔"
        ];
    }
}
