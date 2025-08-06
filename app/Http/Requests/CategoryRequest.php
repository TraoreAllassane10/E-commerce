<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            "nom" => "required|unique:categories,nom",
            "image" => "required|string"
        ];
    }

    public function messages()
    {
        return [
            "nom.required" => "Le nom de la categorie est requis",
            "nom.required" => "Cette categorie existe déjà",
            "image.required" => "L'image de la categorie est requise",
        ];
    }
}
