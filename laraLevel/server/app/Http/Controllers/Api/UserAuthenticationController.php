<?php


namespace App\Http\Controllers\Api;


use App\Repositories\UserRepository;
use http\Env\Request;

class UserAuthenticationController
{
   public function login(Request  $request, UserRepository $userRepository){
       $data = $request->validate(
           [
               'email' => 'required|email',
               'password' => 'required'
           ]
       );
   }

}
