<?php

namespace App\Repositories;


use App\Interfaces\UsersRepositoryInterface;
use App\Models\User;

class UsersRepository implements UsersRepositoryInterface
{
    public function getAllUsers()
    {
        return User::orderBy('updated_at', 'DESC')->get();
    }

    public function getUserById($userId)
    {
        return User::where('id', '=', $userId)->first();
    }

    public function deleteUser($userId)
    {
        return User::destroy($userId);
    }

    public function createUser(array $userDetails)
    {

      return  User::create([
            'username' => $userDetails['username'],
            'email' => $userDetails['email'],
            'first_name' => $userDetails['first_name'],
            'last_name' => $userDetails['last_name'],
            'mobile' => $userDetails['mobile'],
            'email_verified_at' => now(),

        ]);
    }

    public function updateUser($userId, array $newDetails)
    {

        return User::where('id', $userId)
            ->update([
                'username' => $newDetails['username'],
                'email' => $newDetails['email'],
                'first_name' => $newDetails['first_name'],
                'last_name' => $newDetails['last_name'],
                'mobile' => $newDetails['mobile'],
                'email_verified_at' => now(),
            ]);
    }


}
