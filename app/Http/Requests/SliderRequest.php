<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'slider_title'          => 'required',
            'slider_description'    => 'required',
        ];
        if(!isset($this->id) && empty($this->id)){
           $rules['slider_img']  = 'required|image|mimes:jpg,jpeg,png';
        }
        return $rules;
    }
}
