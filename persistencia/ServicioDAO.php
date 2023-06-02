<?php
class ServicioDAO{
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

    public function idServicio($nombre){
        $csql = "select ID_servicios from servicios where Nombre = '$nombre'";
        $resul = $this->consulta($csql);
        $row = $resul->fetch(PDO::FETCH_ASSOC);
        
        return $row["ID_servicios"];
    }
}
?>