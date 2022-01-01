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

        public function insertar()
        {
            $data = $this->model->setUser('Jack', 25);
            print_r($data);
        }

        public function verUsuario(int $id)
        {
            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function actualizar()
        {
            $data = $this->model->updateUser(1, "Jack Sari", 26);
            print_r($data);
        }

        public function verusuarios()
        {
            $data = $this->model->getUsers();
            print_r($data);
        }

        public function eliminarusuario(int $id)
        {
            $data = $this->model->deleteUser($id);
            print_r($data); 
        }
    }

?>