<?php

namespace App\Http\Requests;

use App\Rules\MaxWordCount;
use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
     * @return array<string, array<mixed>>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', new MaxWordCount(4)],
            'email' => ['required', 'email', 'unique:applications', 'max:255'],
        ];
    }
}
