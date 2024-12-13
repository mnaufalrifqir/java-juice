<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialRequest extends FormRequest
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
            'transaction.rating' => 'required|integer|min:1|max:5',
            'transaction.comment' => 'required|string|max:255',
            'products.*.details_transaction_id' => 'required|exists:details_transactions,id',
            'products.*.rating' => 'required|integer|min:1|max:5',
            'products.*.comment' => 'required|string|max:255',
        ];
    }
}
