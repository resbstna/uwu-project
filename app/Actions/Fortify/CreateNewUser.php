<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;

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
            'cpp_name' => ['required'],
            'cpp_panggilan' => ['required'],
            'cpw_name' => ['required'],
            'cpw_panggilan' => ['required'],
            'password' => $this->passwordRules()
        ])->validate();

        $pengantin = DB::table('pengantin')->insert([
            'url' => $input['cpp_panggilan'] . '-' . $input['cpw_panggilan'],
            'cppname' => $input['cpp_name'],
            'cpp_panggilan' => $input['cpp_panggilan'],
            'cpwname' => $input['cpw_name'],
            'cpw_panggilan' => $input['cpw_panggilan'],
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'url' => $input['cpp_panggilan'] . '-' . $input['cpw_panggilan'],
            'password' => Hash::make($input['password']),
        ]);
        
    }
}
