<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|Max:64',
            'description' => 'nullable|Max:2000', 
            'thumb' => 'nullable|Max:1024|url', 
            'price' => 'nullable|Max:64|numeric', 
            'series' => 'required|Max:64', 
            'sale_date' => 'nullable|Max:64', 
            'type' => 'required|Max:64|in:comic book,graphic novel', 
            'artists' => 'nullable|Max:1024', 
            'writers' => 'nullable|Max:1024',
        ];
    }
}
