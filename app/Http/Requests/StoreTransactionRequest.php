<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'courier' => 'required|string|max:100',
            'weight' => 'required|numeric|min:0',
            'shipping_cost' => 'required|numeric|min:0',
            'subtotal' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'payment_status' => 'string|in:settlement,pending,deny,expire,cancel',
            'shipping_status' => 'string|in:pending,shipped,delivered,cancelled',
            'payment_url' => 'url|max:255',
        ];
    }
}