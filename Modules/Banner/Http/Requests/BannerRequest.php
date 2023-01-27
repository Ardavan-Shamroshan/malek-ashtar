<?php

namespace Modules\Banner\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('post')) {
            return [
                'title' => ['required', 'max:120', 'min:1'],
                'url' => ['nullable', 'max:200', 'min:1'],
                'position' => ['required', 'numeric'],
                'image' => ['required', 'image', 'mimes:png,jpg,jpeg,gif'],
            ];
        } else
            return [
                'title' => ['required', 'max:120', 'min:1'],
                'url' => ['nullable', 'max:200', 'min:1'],
                'position' => ['required', 'numeric'],
                'image' => ['image', 'mimes:png,jpg,jpeg,gif'],
            ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
