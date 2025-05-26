<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
     */
    public function rules(): array
    {
        $rules = [
<<<<<<< HEAD
            'first_name' => 'required|string|min:3|max:255',
=======
            'first_name' => 'required|string|max:255',
>>>>>>> 538171d31a2abcefb97a2a68dc6f9744aa14f19b
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ];
<<<<<<< HEAD

=======
        
>>>>>>> 538171d31a2abcefb97a2a68dc6f9744aa14f19b
        // Add the unique rule with customer ID exception for updates
        if ($this->customer) {
            $rules['email'] .= '|unique:customers,email,' . $this->customer->id;
        } else {
            $rules['email'] .= '|unique:customers,email';
        }
<<<<<<< HEAD

        return $rules;
    }
}
=======
        
        return $rules;
    }
}
>>>>>>> 538171d31a2abcefb97a2a68dc6f9744aa14f19b
