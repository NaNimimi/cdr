<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'customer_email' => 'required|email|max:255',
            'total_price'    => 'required|numeric|min:0',
            'status'         => 'nullable|in:pending,completed,cancelled',
        ];
    }
}