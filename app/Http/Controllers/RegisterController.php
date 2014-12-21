<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller {

      protected $rules = array(
        'username'    => 'required|username',
        'email'       => 'required|email',
        'password'    => 'required|min:6'
      );

      public function index()
      {
        return view('Register');
      }

      public function registerMember(Request $request)
      {
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $data = array(
          'username'    => $username,
          'email'       => $email,
          'password'    => $password,
          'verify'      => 'true'
        );
        return $data;
      }
}
