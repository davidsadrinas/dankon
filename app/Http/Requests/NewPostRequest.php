<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Blog\Messages\NewPostMessage;

class NewPostRequest extends FormRequest //implements NewPostMessage
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
            'user_id' => 'required',
            'name' => 'required',            
            'body' => 'required',
            'file' => 'required'
        ];
    }
/*
    public function getName(): string
    {
        return $this->get('name');
    }
    public function getFile(): string
    {
        return $this->get('file');
    }
    public function getBody(): string
    {
        return $this->get('body');
    }
    public function getUserId(): string
    {
        return $this->get('user_id');
    }
*/
}