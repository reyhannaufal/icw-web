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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ], [
            'name' => [
                'required' => 'Nama wajib diisi',
                'max' => 'Nama tidak boleh melewati 255 karakter'
            ],
            'email' => [
                'required' => 'Email wajib diisi',
                'email' => 'Format email salah',
                'max' => 'Email tidak boleh melewati 255 karakter',
                'unique:users' => 'Email sudah digunakan'
            ],
            'password' => [
                'required' => 'Password wajib diisi',
                'string' => 'Password harus berupa karakter',
                'min' => 'Password harus memiliki minimal 8 karakter',
                'uppercase' => 'Password harus memiliki minimal 1 huruf kapital',
                'confirmed' => 'Konfirmasi password harus cocok'
                ]
            ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
