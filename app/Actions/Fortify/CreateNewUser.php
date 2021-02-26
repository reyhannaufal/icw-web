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
            'phone_number' => ['required', 'regex:/\+62\s\d{3}[-\.\s]??\d{3}[-\.\s]??\d{3,4}|\(0\d{2,3}\)\s?\d+|0\d{2,3}\s?\d{6,7}|\+62\s?361\s?\d+|\+62\d+|\+62\s?(?:\d{3,}-)*\d{3,5}/',
                                'max:63', 'unique:users'],
            'institution' => ['required', 'string', 'max:255'],
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
            ],
            'phone_number' => [
                'required' => 'Nomor telepon wajib diisi',
                'max' => 'Nomor telepon tidak boleh melewati 63 karakter',
                'unique:users' => 'Nomor telepon sudah digunakan'
            ],
            'institution' => [
                'required' => 'Nama institusi wajib diisi',
                'string' => 'Nama institusi harus berupa karakter',
                'max' => 'Nomor telepon tidak boleh melewati 255 karakter'
                ]
            ])->validate();

//        dd($input);
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone_number' => $input['phone_number'],
            'institution' => $input['institution']
        ]);
    }
}
