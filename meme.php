<?php

class meme extends Methods 
{

    public function crear_meme () 
    {
        require("conexion.php");

        $data = json_decode(file_get_contents('php://input'), true);

        $meme = $data['meme'];

        $nombre = $meme['nombre'];
        $url = $meme['url'];
        $titSup = $meme['titSup'];
        $titInf = $meme['titInf'];

        $tag = $data['tag'];

        $insert = "INSERT INTO memes(nombre, titulo_superior, titulo_inferior, url) VALUES ('$nombre',  '$titSup', '$titInf', '$url')";

        $conn->query($insert);

        foreach($tag as $t)
        {
            $query = "INSERT INTO tiene VALUES ((SELECT idMeme FROM memes ORDER BY idMeme DESC limit 1), (SELECT idTag FROM tag WHERE texto = '$t'))";

            $conn->query($query);
        }

        return true;
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