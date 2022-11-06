<?php

namespace App\Http\Requests\Company;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'password' => [
                'required',
                'string',
                'min:0',
                'max:255',
            ],
            'role'     => [
                'required',
                Rule::in(UserRoleEnum::getRolesForRegister()),
            ],
        ];
    }
}
