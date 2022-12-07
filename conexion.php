<?php
    $conn = new mysqli("localhost", "admin", "Alumno_2020", "memesapi");

    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
?>