<?php

class tag extends Methods 
{

    public function obtener_tags ()
    {
        require("conexion.php");

        print_r($_GET);

        $query = "SELECT * FROM tag ORDER BY texto DESC";

        $res = $conn->query($query);

        while($row = $res->fetch_assoc())
        {
            $userData['allTags'][] = $row;
        }

        return json_encode($userData);
    }

    public function crear_tag () 
    {
        require("conexion.php");

        $data = json_decode(file_get_contents('php://input'), true);

        $texto = $data['texto'];

        $query = "INSERT INTO tag(texto) VALUES ('$texto')";

        return $conn->query($query);
    }    
}
?>