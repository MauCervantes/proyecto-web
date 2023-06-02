<?php
    class Usuario{
        // --Atributos
        private $id_int;
        private $alias_str;
        private $contrasena_str;
        private $nombre_str;
        private $tel_str;
        private $correo_str;
        private $edad_int;

        // constructor
        public function __construct($id, $alias, $contrasena, $nombre, $tel, $correo, $edad){
            $this->id_int = $id;
            $this->alias_str = $alias;
            $this->contrasena_str = $contrasena;
            $this->nombre_str = $nombre;
            $this->tel_str = $tel;
            $this->correo_str = $correo;
            $this->edad_int = $edad;
        }

       // ---Setters
       public function setId($id){
            $this->id_int=$id;
       }

       public function setAlias($alias){
            $this->alias_str=$alias;
       }

       public function setContrasena($contrasena){
            $this->contrasena_str=$contrasena;
       }

       public function setNombre($nombre){
            $this->nombre_str=$nombre;
       }

       public function setTel($tel){
            $this->tel_str = $tel;
       }

       public function setCorreo($correo){
            $this->correo_str = $correo;
       }

       public function setEdad($edad){
            $this->edad_int = $edad;
       }


       // ---Gettters
        public function getId() {
            return $this->id_int;
        }

        public function getAlias() {
            return $this->alias_str;
        }

        public function getContrasena() {
            return $this->contrasena_str;
        }

        public function getNombre() {
            return $this->nombre_str;
        }

        public function getTel() {
            return $this->tel_str;
        }
        
        public function getCorreo() {
            return $this->correo_str;
        }

        public function getEdad() {
            return $this->edad_int;
        }
    }
?>