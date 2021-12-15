<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->dataToView['titlePage'] = 'Home';

        $viewsArray[] = 'front/front_head';
        $viewsArray[] = 'front/home';
        $viewsArray[] = 'front/front_footer';
    
        $this->view_composer( $viewsArray );
    }

    public function catalog()
    {
        return view('welcome_message');
    }

    public function login()
    {
        return view('welcome_message');
    }

    public function do_login()
    {
        return view('welcome_message');
    }

    public function cart()
    {
        return view('welcome_message');
    }
}
