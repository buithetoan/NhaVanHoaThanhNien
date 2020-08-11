<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
        if ($this->method()=='PUT'){
            $id = $this->segment(4);
            return [
                'name' => 'required|max:255|min:5|unique:courses,name,'.$id,
                'title' => 'required',
                'maximum_student'=>'required',
                'start_date'=>'required',
                'end_date'=>'required',
                'url_image' => 'mimes:jpeg,jpg,png',
                'price' => 'required',
                'discount' => 'nullable',
            ];
        }else{
            return [
                'title' => 'required',
                'maximum_student'=>'required',
                'start_date'=>'required',
                'end_date'=>'required',
                'name' => 'required|max:255|min:5|unique:courses,name',
                'url_image' => 'mimes:jpeg,jpg,png',
                'price' => 'required',
                'discount' => 'nullable',
            ];
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên khóa học.',
            'name.max' => 'Tên không được vượt qua 255 kí tự.',
            'name.min' => 'Tên không được nhỏ hơn 5 kí tự.',
            'name.unique' => 'Tên đã tồn tại, thử lại một tên khác.',
            'url_image.mimes' => 'Không phải định dạng hình ảnh(jpeg, png, jpg).',
            'price.required' => 'Vui lòng nhập giá.',
            'title.required' => 'Vui lòng nhập tiêu đề.',
            'maximum_student.required' => 'Vui lòng nhập giới hạn học viên của khóa học.',
            'start_date.required' => 'Vui lòng nhập ngày bắt đầu.',
            'end_date.required' => 'Vui lòng nhập ngày kết thúc.',
        ];
    }
}
