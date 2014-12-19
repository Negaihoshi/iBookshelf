<?php namespace App\Http\Controllers;

class RegisterController extends Controller {


      public function index()
      {
        return view('Register');
      }

      public function registerMember()
      {
        $name = Input::get('name');
        $email = Input::get('email');
        $password = Input::get('password');
        return $name;
      }
}
