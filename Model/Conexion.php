<?php

class Conexion{

    private $con;
    
    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'BDpruebaMVC');
    }

    public function getUsers(){
        $query = $this->con->query('SELECT * FROM usuarios');

        $retorno = [];

        $i = 0;
        while ($file = $query->fetch_assoc()){
            $retorno[$i] = $file;
            $i++;
        }

        return $retorno;
    }

}

?>