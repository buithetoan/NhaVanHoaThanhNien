<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActiveRequest extends FormRequest
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
                'name' => 'required|max:255|min:5|unique:activities,name,'.$id,
                'title' => 'required',
                'start_date'=>'required',
                'url_image' => 'mimes:jpeg,jpg,png',
            ];
        }else{
            return [
                'title' => 'required',
                'start_date'=>'required',
                'name' => 'required|max:255|min:5|unique:activities,name',
                'url_image' => 'required|mimes:jpeg,jpg,png',
            ];
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên hoạt động.',
            'name.max' => 'Tên không được vượt qua 255 kí tự.',
            'name.min' => 'Tên không được nhỏ hơn 5 kí tự.',
            'name.unique' => 'Tên đã tồn tại, thử lại một tên khác.',
            'url_image.mimes' => 'Không phải định dạng hình ảnh(jpeg, png, jpg).',
            'url_image.required'=>'Vui lòng nhập hình ảnh',
            'title.required' => 'Vui lòng nhập tiêu đề.',
            'start_date.required' => 'Vui lòng nhập ngày bắt đầu.',
        ];
    }
}
