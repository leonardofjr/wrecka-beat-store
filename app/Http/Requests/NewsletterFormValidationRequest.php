<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsletterFormValidationRequest extends Request
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
                'newsletterFormEmail' => 'required|email',
        ];
    }

    /**
     * Overwriting messages method.
     *
     * @return array
     */
    public function messages()
    {


        return [
                'newsletterFormEmail.required' => 'Email field is required',
                'newsletterFormEmail.email' => 'Enter a valid email',
        ];
    }
}
