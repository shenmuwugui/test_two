<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCheck extends FormRequest
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
            'title'=>'required',
            'tid'=>'required',
            'author'=>'required',
            'status'=>'required',
            'content'=>'required',
            'img'=>'mimes:jpg,jpeg,png,gif|max:2000000',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => '标题不能为空',
            'tid.required' => '分类不能为空',
            'author.required' => '作者不能为空',
            'status.required' => '状态不能为空',
            'content.required' => '内容不能为空',
            'img.mimes' => '图片类型不能为空',
            'img.max' => '图片大小不超过2Mb',
        ];
    }
}
