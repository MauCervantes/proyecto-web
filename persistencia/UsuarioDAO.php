<?php

class UsuarioDAO{
    private $server = "DESKTOP-HOTSFIC";
    private $usr = "dent";
    private $pass = "123456";
    private $db = "dental_love";

    private function conectar(){
        try{
            $conn = new PDO("sqlsrv:Server=$this->server;Database=$this->db", $this->usr, $this->pass);
        }catch(PDOException $e){
            die('Connection Failed: error ' . $e->getMessage());
        }
        return $conn;
    }

    public function consulta($csql){
        $conexion = $this->conectar();
        $records = $conexion->prepare($csql);
        $records->execute();
        
        return $records;
    }

    public function buscar($alias, $contrasena){
        $csql = "select * from paciente where Usuario = '{$alias}' and 
                    Contra = '{$contrasena}'";
        $resultado = $this->consulta($csql);
        $row = $resultado->fetch(PDO::FETCH_ASSOC);

        if ($row['ID_paciente'] == null) {
            return null;
        } else {
            return new Usuario($row['ID_paciente'], $row['Usuario'], $row['Contra'], $row['NombrePac'], $row['Telefono'], $row['Correo'], $row['Edad']);
        }
    }

    public function maxValue(){
        $csql = "select MAX(ID_paciente) as 'Max' from paciente";
        $resultado = $this->consulta($csql);
        if (!$resultado) {
            return 0;
        } else {
            $row = $resultado->fetch(PDO::FETCH_ASSOC);
            return $row['Max'];
        }
    }

    public function registraUsu($id, $usuario, $contra, $nombre, $tel, $correo, $edad){
        // Creamos consulta con los datos
        $csql = "INSERT INTO paciente (ID_paciente, Usuario, Contra, NombrePac, Telefono, Correo, Edad) VALUES ($id, '$usuario', '$contra', '$nombre', '$tel', '$correo', $edad)";
        $result = $this->consulta($csql);
        return $result;
    }

    //retorna nombres de pacientes registrados
    public function buscarNombre($alias){
        $csql = "select * from paciente where Usuario = '$alias'";
        $result = $this->consulta($csql);
        
        if (!$result) {
            return null;
        } else {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return new Usuario($row['ID_paciente'], $row['Usuario'], $row['Contra'], $row['NombrePac'], $row['Telefono'], $row['Correo'], $row['Edad']);
        }

        
    }
    public function borrarUsu($alias_eliminar){
        $csql = "DELETE FROM paciente WHERE usuario = '$alias_eliminar'";
        $result = $this->consulta($csql);
        
        return $result;
    }
    public function modificarUsu($alias_modificar, $usuario, $nombre, $tel, $correo, $edad){
        $csql = "UPDATE paciente SET Usuario = '$usuario', NombrePac = '$nombre', Telefono = '$tel', Correo = '$correo', Edad = '$edad' WHERE usuario = '$alias_modificar'";
        $result = $this->consulta($csql);

        return $this->buscarNombre($usuario);
    }
}
