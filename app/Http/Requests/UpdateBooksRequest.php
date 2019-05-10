<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBooksRequest extends FormRequest
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
        $book = $this->route('book');
        return [
            'title' => 'required|max:250|unique:books,title,' . $book->id,
            'description' => 'required',
            'isbn' => 'required|max:250'
        ];
    }
}
