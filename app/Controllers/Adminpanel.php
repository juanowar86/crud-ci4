<?php

namespace App\Controllers;
use \App\Models\FilmsModel;


class Adminpanel extends BaseController
{
    public function index()
    {
        return view( 'common/working_on' );
    }  

    public function list( $type = FALSE )
    {

        if( ! in_array( $type, $this->allowItemCrud  ) )
        {
            return view( 'errors/html/error_404' );
        }

        $nameSingular = ucfirst( substr( $type, 0,-1 ) );

        $model = ucfirst ($type ). 'Model';
        $queryMaker = model( "App\Models\\$model", FALSE );
        $resultQuery = $queryMaker->findAll();

        $this->dataToView['title'] = 'View '. $nameSingular;
        $this->dataToView['titlePage'] = 'List '. ucfirst( $type );
        $this->dataToView['dataToTable'] = $resultQuery;
        $this->dataToView['type'] = $type;

        $viewsArray[] = 'back/back_head';
        $viewsArray[] = 'back/list_data';
        $viewsArray[] = 'back/back_footer';

        $this->view_composer( $viewsArray );    
    }  

    public function login( $type = FALSE )
    {
        return view( 'common/working_on' );
    }

    public function do_login( $type = FALSE )
    {
        return view( 'common/working_on' );
    }
}