<?php
    class Medico{
        // --Atributos
        private $idM_int;
        private $idS_int;
        private $aliasM_str;
        private $contrasenaM_str;
        private $nombreM_str;
        private $telM_str;
        private $correoM_str;

        // constructor
        public function __construct($idM, $idSuc, $aliasM, $contrasenaM, $nombreM, $telM, $correoM){
            $this->idM_int = $idM;
            $this->idS_int = $idSuc;
            $this->aliasM_str = $aliasM;
            $this->contrasenaM_str = $contrasenaM;
            $this->nombreM_str = $nombreM;
            $this->telM_str = $telM;
            $this->correoM_str = $correoM;
        }

        // ---Setters
        public function setId($id){
            $this->idM_int=$id;
        }

        public function setIdSuc($id){
            $this->idS_int=$id;
        }

        public function setAlias($alias){
            $this->aliasM_str=$alias;
        }

        public function setContrasena($contrasena){
            $this->contrasenaM_str=$contrasena;
        }

        public function setNombre($nombre){
            $this->nombreM_str=$nombre;
        }

        public function setTel($tel){
            $this->telM_str = $tel;
        }

        public function setCorreo($correo){
            $this->correoM_str = $correo;
        }

       // ---Gettters
        public function getId() {
            return $this->idM_int;
        }

        public function getIdSuc() {
            return $this->idS_int;
        }

        public function getAlias() {
            return $this->aliasM_str;
        }

        public function getContrasena() {
            return $this->contrasenaM_str;
        }

        public function getNombre() {
            return $this->nombreM_str;
        }

        public function getTel() {
            return $this->telM_str;
        }
        
        public function getCorreo() {
            return $this->correoM_str;
        }
    }
?>