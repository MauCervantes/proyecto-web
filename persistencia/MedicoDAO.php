<?php
class MedicoDAO{
    private $server = "DESKTOP-HOTSFIC";
    private $usr = "dent";
    private $pass = "123456";
    private $db = "dental_love";

    //Conecta al servidor SQLServer
    private function conectar(){
        try{
            $conn = new PDO("sqlsrv:Server=$this->server;Database=$this->db", $this->usr, $this->pass);
        }catch(PDOException $e){
            die('Connection Failed: error ' . $e->getMessage());
        }
        return $conn;
    }

    //Metodo que ejecuta las consultas, retorna la consulta
    public function consulta($csql){
        $conexion = $this->conectar();
        $records = $conexion->prepare($csql);
        $records->execute();
        
        return $records;
    }

    //Metodo buscar, busca elemento de la tabla medico
    //con los parametros de alias y contraseña. 
    public function buscar($alias, $contrasena){
        $csql = "select * from medico where Usuario = '{$alias}' and 
                    Contra = '{$contrasena}'";
        $resultado = $this->consulta($csql);
        $row = $resultado->fetch(PDO::FETCH_ASSOC);

        if ($row['ID_medico'] == null) {
            return null;
        } else {
            return new Medico($row['ID_medico'], $row['ID_sucursal'], $row['Usuario'], $row['Contra'], $row['NombreMed'], $row['Telefono'], $row['Correo']);
        }
    }

    //Metodo getNombre retorna los nombres de la tabla Medico
    //de la base de datos
    public function buscarNom($alias){
        $csql = "select * from medico where Usuario = '$alias'";
        $resultado = $this->consulta($csql);
        if (!$resultado) {
            return null;
        } else {
            $row = $resultado->fetch(PDO::FETCH_ASSOC);
            return new Medico($row['ID_medico'], $row['ID_sucursal'], $row['Usuario'], $row['Contra'], $row['NombreMed'], $row['Telefono'], $row['Correo']);
        }
    }

    //obtener id del medico
    public function idMedico($nombre){
        $csql = "select ID_medico from medico where NombreMed = '$nombre'";
        $resul = $tihs->consulta($csql);
        $row = $resul->fetch(PDO::FETCH_ASSOC);
        
        return $row["ID_medico"];
    }


    //Lineas agregadas el 31 de mayo del 2023
    //modificar medico
    public function modificarMed($alias_modificar, $nombre, $tel, $correo){
        $csql = "UPDATE medico SET NombreMed = '$nombre', Telefono = '$tel', Correo = '$correo' WHERE usuario = '$alias_modificar'";
        $result = $this->consulta($csql);

        return $this->buscarNom($alias_modificar);
    }
}
