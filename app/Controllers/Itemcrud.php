<?php

namespace App\Controllers;
use App\Models\FilmsModel;

class Itemcrud extends BaseController
{
    
    public function index()
    {
        return view( 'common/working_on' );       
    }  

    public function add( $type = FALSE )
    {
       
        if( ! in_array( $type, $this->allowItemCrud  ) )
        {
            return view( 'errors/html/error_404' );
        }

        $nameSingular = ucfirst( substr( $type, 0,-1 ) );

        $this->dataToView['title'] = 'View '. $nameSingular;
        $this->dataToView['titlePage'] = 'Add '. ucfirst( $type );
        $this->dataToView['actionURI'] = '/admin/item/save/'. $type;
        $this->dataToView['titleForm'] = 'Add '. $nameSingular;
        $this->dataToView['btnText'] = 'Save '. $nameSingular;
        $this->dataToView['return'] =  'add/' .$type;

        $viewsArray[] = 'back/back_head';
        $viewsArray[] = 'back/item_view';
        $viewsArray[] = 'back/back_footer';

        $this->view_composer( $viewsArray );     

    }  

    public function save( $type = FALSE )
    {
        
        $model = ucfirst ($type ). 'Model';
        $queryMaker = model( "App\Models\\$model", FALSE );
        $dataToSave = array();

        if( $this->request->getPost( 'id' ) )
        { 
            $dataToSave = [
                'id_film'             => $this->request->getPost( 'id' ),
                'name'        => $this->request->getPost( 'name' ),
                'director'    => $this->request->getPost( 'director' ),
                'year'         => $this->request->getPost( 'year' ),
                'synopsis'    => $this->request->getPost( 'synopsis' ),
                'stock'        => $this->request->getPost( 'stock' )
            ];           
        }
        else 
        { 
            $dataToSave = [                
                'name'        => $this->request->getPost( 'name' ),
                'director'    => $this->request->getPost( 'director' ),
                'year'         => $this->request->getPost( 'year' ),
                'synopsis'    => $this->request->getPost( 'synopsis' ),
                'stock'        => $this->request->getPost( 'stock' )
            ];
        }
                
        $queryMaker->save( $dataToSave );
        return redirect()->to( '/admin/item/'. $this->request->getPost( 'return' ) ) ;  
 
    }

    public function view( $type = FALSE, $idItem = FALSE )
    {
        if( ! in_array( $type, $this->allowItemCrud  ) )
        {
            return view( 'errors/html/error_404' );
        }

        $model = ucfirst ($type ). 'Model';

        $queryMaker = model( "App\Models\\$model", FALSE );

        $resultQuery = $queryMaker->find( $idItem );

        if( empty( $resultQuery ) ) 
        {
            $this->dataToView['title'] = 'Error - Empty result query';
            $this->dataToView['message'] = 'Warning! The entry was not found.';

            return view('errors/html/error_custom', $this->dataToView );
        }

        $nameSingular = ucfirst( substr( $type, 0, -1 ) );

        // Bloque de datos a la vista
        $this->dataToView['titlePage'] = 'View '. ucfirst( $type );
        $this->dataToView['title'] = 'View '. $nameSingular;
        $this->dataToView['actionURI'] = '/admin/item/save/'. $type;
        $this->dataToView['idItem'] = $resultQuery[$queryMaker->primaryKey];
        $this->dataToView['resultQuery'] = $resultQuery;
        $this->dataToView['btnText'] = 'Save '. $nameSingular;
        $this->dataToView['return'] = 'view/'. $type .'/'. $idItem;

        $viewsArray[] = 'back/back_head';
        $viewsArray[] = 'back/item_view';
        $viewsArray[] = 'back/back_footer';
        
        $this->view_composer( $viewsArray );     
        
    }  
     
    public function delete( $type = FALSE )
    {
        return view( 'common/working_on' );      
    }  
}