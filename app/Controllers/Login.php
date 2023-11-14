<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Login extends BaseController
{
    protected $userModel;
    public function __construct() 
    {
        helper(['url']);
        $this->userModel = new User();
    }
    public function index()
    {
        return view('login');
    }
   public function signin()
   {
        $userName = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if ($userName == '' or $password == '') {
            $err = "Please enter a username and password";
        }

        $userData = $this->userModel->where('username', $userName)->first();
        if (empty($err)) {
            $sessionData = [
                'id' => $userData['id'],
                'username' => $userData['username'],
                'password' => $userData['password'],
            ];
            session()->set($sessionData);
            return redirect()->to('dashboard');
        }
        return redirect()->to('dashboard');
    }
}
