<?php
class CitaDAO{
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

    //Metodo que ejecuta las consultas, retorna la consulta
    public function consulta($csql){
        $conexion = $this->conectar();
        $records = $conexion->prepare($csql);
        $records->execute();
        
        return $records;
    }

    //obtenner el id de la ultima cita
    public function maxCita(){
        $csql = "select MAX(ID_citas) as 'Max' from citas";
        $resultado = $this->consulta($csql);
        if (!$resultado) {
            return 0;
        } else {
            $row = $resultado->fetch(PDO::FETCH_ASSOC);
            return $row['Max'];
        }
    }

    //método para insertar nueva cita en la base de datos
    public function registrarCita($idCita, $idpac, $idServ, $hora, $anio, $mes, $dia, $status){
        $csql = "INSERT INTO citas (ID_citas, ID_paciente, ID_servicio, Hora, anio, mes, dia, estatus) VALUES ($idCita, $idpac, $idServ, '$hora', '$anio', '$mes', '$dia', '$status') ";
        $resul = $this->consulta($csql);

        if(!$resul){
            return null;
        }else{
            return $resul;
        }
    }

    //actualice a aceptar o negar cita
    public function anCita($idcita, $an){
        if($an == "Aceptar"){
            $csql = "UPDATE citas SET estatus = 'Aceptada' WHERE [ID_citas] = $idcita";
        }else{
            $csql = "UPDATE citas SET estatus = 'Rechazada' WHERE [ID_citas] = $idcita";
        }

        $resul = $this->consulta($csql);
        if(!$resul){
            return null;
        }else{
            return $resul;
        }
    }
}
?>