<?php

class meme extends Methods 
{
    // GET meme: Obtiene memes de forma aleatoria
    // GET meme?p=10 Obtiene 10 meme de manera aleatoria
    // GET meme?tag=TAG Obtiene memes con ese TAG
    // POST meme : crea un nuevo meme.

    #protected  $nombre;
    #protected  $url

    public function crear_meme () 
    {
        array_push($_SESSION["meme_data"], json_decode($this->data, true));



        return $_SESSION["meme_data"];
    }

    public function obtener_memes()
    {
        require("conexion.php");

        $query = "SELECT * FROM Memes ORDER BY RAND()";

        $res = $conn->query($query);

        while($row = $res->fetch_assoc())
        {
            $userData['allMemes'][] = $row;
        }

        return json_encode($userData);
    }

    public function get10()
    {
        require("conexion.php");

        // $query = "SELECT * FROM Memes ORDER BY RAND() LIMIT $_GET['p']";

        $res = $conn->query($query);

        while($row = $res->fetch_assoc())
        {
            $userData['allMemes'][] = $row;
        }

        return json_encode($userData);
    }
}
?>