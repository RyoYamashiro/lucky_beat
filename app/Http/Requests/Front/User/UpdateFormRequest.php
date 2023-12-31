<?php

namespace App\Http\Requests\Front\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateFormRequest extends FormRequest
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
            'name' => ['required', 'max:25'],
            'bio' => ['max:255', 'required']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'ユーザー名',
            'bio' => '自己紹介文',
        ];
    }
}
