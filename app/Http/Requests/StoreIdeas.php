<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIdeas extends FormRequest
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
            // setting validation rules for submitting ideas.
            'title'     =>  'required',
            'body'      =>  'required',
            'file' => 'image|mimes:png,jpeg,gif'
            
        ];
    }
}
