<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Modules\Settings\Enums\SettingType;

class SettingStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'value' => ['required'],
            'type' => ['required', new Enum(SettingType::class)],
        ];
    }
}
