<?php

namespace App\Controllers;


class Itemcrud extends BaseController
{
    public function index()
    {
        return view('errors/html/error_404');         
    }  

    public function view( $type = FALSE, $idItem = FALSE )
    {
        return view('errors/html/error_404');          
    }  

    public function edit( $type = FALSE )
    {
        return view('errors/html/error_404');           
    } 
     
    public function delete( $type = FALSE )
    {
        return view('errors/html/error_404');           
    }  
}