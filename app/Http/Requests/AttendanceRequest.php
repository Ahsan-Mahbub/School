<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceRequest extends FormRequest
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
            'attendance_date' => 'required',
            'class_name' => 'required',
            'section_name' => 'required',
            'student_name' => 'required',
            'attendance_date' => 'required',
            'attendance_status' => 'required',
        ];
    }
}
