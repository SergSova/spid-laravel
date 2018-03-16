<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaticPageRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            $rules = [
                'title' => 'required',
            ];
            switch ($this->route()->parameter('name')) {
                case 'index':
                case   'faq':
                    $rules = array_merge(
                        $rules,
                        [
                            'longtitle' => 'required',
                        ]
                    );
                    break;
                case 'aids':
                    $rules = array_merge(
                        $rules,
                        [
                            'modal_text'   => 'required',
                            'modal_btn'    => 'required',
                            'modal_bottom' => 'required',
                        ]
                    );
                    break;
            }

            return $rules;
        }

        return [];
    }
}
