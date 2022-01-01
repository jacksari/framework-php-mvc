<?php

    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            //echo "Mensaje desde el controllador";
            $data['page_id'] = 'home';
            $data['tag_page'] = 'Tienda virtual';
            $data['page_title'] = 'Página principal';
            $data['page_name'] = 'home';
            $data['page_content'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ducimus iste ex nam, quo maxime? Aperiam adipisci dicta animi quia natus voluptatibus cupiditate fugit voluptate sequi odio! Hic, vel placeat!';
            
            $this->views->getView($this, 'home',$data );
        }
    }

?>