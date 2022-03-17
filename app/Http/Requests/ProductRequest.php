<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:2', 'max:50'],
            'amount' => ['required', 'integer'],
            'description' => ['nullable', 'string', 'max:265'],
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        $errors = $validator->errors();

        throw new HttpResponseException(response($errors, 400));
    }

}
