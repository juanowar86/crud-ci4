<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Para datos que necesite en la vista.
     * 
     * @var array
     */
    protected $dataToView = [];

    /**
     * Permite controlar que tablas pueden usarse para el crud, nombre de la tabla
     * 
     * @var array
     */
    protected $allowItemCrud = ['films'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    // Flexibilizo la creación de vistas sin importar el número de componentes, se debe vigilar el orden.
    protected function view_composer( $viewsList = array() )
    {
        if( empty( $viewsList ) )
        {            
            // return view('errors/error_404');
            $this->dataToView['title'] = 'Error - Required view';
            $this->dataToView['message'] = 'Warning! BaseController::view_composer requires array of views.';
            echo view('errors/html/error_custom', $this->dataToView );
        }
        else
        {
            foreach ( $viewsList as $key => $view ) 
            {
                // Con solo pasar una vez basta
                echo ( $key == 0 )? view( $view, $this->dataToView ): view( $view );
            }
        }
    }
}
