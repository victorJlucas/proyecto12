<?php
/*
 * class AdminProductControl clase control de administracion de productos
 */

class AdminproductController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = $this->model('AdminProduct');
    }

    public function index(){
        $session = new Session();
        if ($session->getLogin()){

            $products = $this->model->getProducts();

            $data=[
              'title' => 'Administracion de Productos',
              'menu' => false,
              'admin' => true,
              'date' => $products
            ];

            $this->view('admin/products/index', $data);

        }else{
            header('location:' . ROOT . 'admin');
        }
    }

    public function create(){
        $errors = [];
        $dataForm = [];
        $type = $this->model->getConfig('productType');
        $status = $this->model->getConfig('productStatus');
        $catalogue = $this->model->getCatalogue();

        if ($_SERVER['REQUEST_METHOD']=='POST'){
            //Recibimos la informacion del formulario
            //$type = isset($_POST['type']) ? $_POST['type'] : '';//esta es la forma antigua en php 7 se reduce esta expresion ah:
            $type = $_POST['type'] ?? '';
            //validamos la informacion

            //creamos el array con los datos

            if (empty($errors)){
                //enviamos datos al modelo
                if (empty($errors)){
                    //redirigimos al index de adminproduct
                }
            }
        }

        $data = [
            'title' => 'Administracion de Productos - ALTA',
            'menu' => false,
            'admin' => true,
            'type'  => $type,
            'status' => $status,
            'catalogue' => $catalogue,
            'errors' => $errors,
            'data'  =>  $dataForm
        ];

        $this->view('admin/products/create', $data);


    }

    public function update($id){

    }

    public function delete($id){

    }

}