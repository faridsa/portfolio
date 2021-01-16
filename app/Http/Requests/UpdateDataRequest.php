<?php

namespace App\Http\Requests;

use App\Models\Data;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDataRequest extends FormRequest
{
    public function authorize()
    {
        //return \Gate::allows('news_post_edit');
        return true;
    }

    public function rules()
    {
        return [
            'titulo'         => [
                'required',
            ],
            'contenido'         => [
                'required',
            ],
            'seccion' => [
                'required',
            ],

        ];
    }
}
