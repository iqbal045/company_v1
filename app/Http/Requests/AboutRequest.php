<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
        $rules = [
            'title'    => ['required', 'string', 'max:255'],
            'subtitle' => ['required', 'string', 'max:255'],
            'desc'     => ['required', 'string', 'max:1000'],
        ];

        if (request()->isMethod('post')) {
            $rules['about_images'] = 'required|mimes:jpg,jpeg,bmp,png|max:2024';
        }

        if (request()->isMethod('put') || request()->isMethod('patch')) {
            $rules['about_images'] = 'nullable|image|mimes:jpg,jpeg,bmp,png|max:2024';
        }

        return $rules;
    }
}
