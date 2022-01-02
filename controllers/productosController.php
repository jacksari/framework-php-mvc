<?php

    class Productos extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function productos()
        {
            //echo "Mensaje desde el controllador";
            $data['page_id'] = 'productos';
            $data['tag_page'] = 'Productos';
            $data['page_title'] = 'Productos en venta';
            $data['page_name'] = 'productos';
            
            $this->views->getView($this, 'productos',$data );
        }

    }

?>