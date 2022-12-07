<?php

class tag extends Methods 
{

    public function obtener_tags ()
    {
        require("conexion.php");

        $query = "SELECT * FROM tag ORDER BY idTag DESC";

        $res = $conn->query($query);

        while($row = $res->fetch_assoc())
        {
            $userData['allTags'][] = $row;
        }

        return json_encode($userData);
    }

    public function crear_tag () 
    {
        array_push($_SESSION["meme_data"], json_decode($this->data, true));
        return $_SESSION["meme_data"];
    }    
}
?>