<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'id_number'=>['required', 'integer'],
            'mobile_number'=>['required', 'string', 'max:255'],
            'address'=>['required', 'string', 'max:255'],
            'marital_status'=>['required', 'string', 'max:255'],
            'agree_privacy_policy'=>['required', 'boolean'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
           
            'fname' => $input['fname'],
            'mname' => $input['mname'],
            'lname' => $input['lname'],
            'id_number' => $input['id_number'],
            'mobile_number' => $input['mobile_number'],
            'address' => $input['address'],
            'marital_status' => $input['marital_status'],
            'agree_privacy_policy' => $input['agree_privacy_policy'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}