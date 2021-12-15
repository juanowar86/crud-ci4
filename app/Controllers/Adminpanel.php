<?php

namespace App\Controllers;


class Adminpanel extends BaseController
{
    public function index()
    {
        return view('errors/html/error_404');
    }  

    public function list( $type = FALSE )
    {
        return view('errors/html/error_404');
    }  

    public function login( $type = FALSE )
    {
        return view('errors/html/error_404');       
    }

    public function do_login( $type = FALSE )
    {
        return view('errors/html/error_404');     
    }
}