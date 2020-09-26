<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'subject_name' => 'required',
            'subject_name' => 'required',
        ];
    }

    public function message()
    {
        return [
            'subject_name.required' => 'Subject Name Required',
            'subject_name.required' => 'Class Name Required',
        ];
    }
}