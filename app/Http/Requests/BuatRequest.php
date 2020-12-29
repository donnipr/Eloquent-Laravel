<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Article;

class BuatRequest extends Request
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
            'blogger_id' => 'Required',
            'judul' => 'Required',
            'body' => 'Required'
        ];
    }

 public function messages()
    {
        return [
            'blogger_id.required' => 'blogger_id tidak boleh kosong',
            'judul.required' => 'judul tidak boleh kosong',
            'body.required' => 'body tidak boleh kosong',
        ];
    }
    
}
