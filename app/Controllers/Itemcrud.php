<?php

namespace App\Controllers;


class Itemcrud extends BaseController
{
    public function index()
    {
        return view('errors/html/error_404');         
    }  

    public function add( )
    {
        $this->dataToView['titlePage'] = 'Add item';
        $viewsArray[] = 'back/back_head';
        $viewsArray[] = 'back/item_add';
        $viewsArray[] = 'back/back_footer';
        $this->view_composer( $viewsArray );     
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