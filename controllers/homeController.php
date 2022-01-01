<?php

    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function home($params)
        {
            //echo "Mensaje desde el controllador";
            $this->views->getView($this, 'home');
        }

        public function datos($params)
        {
            echo "Mensaje desde el controllador". $params;
        }

        public function carrito($params)
        {
            $carrito = $this->model->getCarrito($params);
            echo $carrito;
        }
    }

?>