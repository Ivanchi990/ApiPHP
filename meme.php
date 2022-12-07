<?php

class meme extends Methods 
{

    public function crear_meme () 
    {
        require("conexion.php");

        $nombre = $_POST();

        $query = "INSERT INTO meme(nombre, titulo_superior, titulo_inferior, url) VALUES ()";

        return $_SESSION["meme_data"];
    }

    public function obtener_memes()
    {
        require("conexion.php");

        if(isset($_GET['p']))
        {
            $num = $_GET['p'];

            $query = "SELECT * FROM memes ORDER BY RAND() LIMIT $num";
        }
        elseif(isset($_GET['tag']))
        {
            $tag = $_GET['tag'];

            $query = "SELECT * FROM memes m JOIN tiene t JOIN tag ta ON m.idMeme = t.idMeme AND t.idTag = ta.idTag WHERE ta.texto = '$tag'";
        }
        else
        {
            $query = "SELECT * FROM memes ORDER BY RAND()";
        }

        $res = $conn->query($query);

        while($row = $res->fetch_assoc())
        {
            $userData['allMemes'][] = $row;
        }

        return json_encode($userData);
    }
}
?>