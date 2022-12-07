<?php

class tag extends Methods 
{


    public function obtener_tags ()
    {
        return $_SESSION["meme_data"];
    }

    public function crear_tag () 
    {
        array_push($_SESSION["meme_data"], json_decode($this->data, true));
        return $_SESSION["meme_data"];
    }    
}
?>