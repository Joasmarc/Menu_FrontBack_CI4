<?php

namespace App\Controllers;

// models
//use App\Models\Users;

class Basic_controller extends BaseController
{
    public function inicio()
    {
        return view('inicio');
    }

    public function render_login()
    {
        //$session = \Config\Services::session();

        return view('login_admin');
    }

    public function login()
    {
        $request = \Config\Services::request();

        $username = $request->getPost("username");
        $password = $request->getPost("password");

        //$Users_model = new Users($db);
        //$sql_matrix = $Users_model->where("username", $username)->findAll();

        if (true) {
            return redirect()->to('/inicio');
        } else {
            return redirect()->back();
        }
    }
}