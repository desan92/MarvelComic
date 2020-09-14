<?php

include("bbdd/conexio_db.php");
include("functions_log.php");

session_start();

$conn = new Connexio;
$conn->Conect_bbdd();

if(isset($_POST["usuari"], $_POST["pass"]) && !empty($_POST["usuari"]) && !empty($_POST["pass"])){
    $user = $_POST["usuari"];
    $pass = md5($_POST["pass"]);
    
    $conexio = new Connexio();
    $conn = $conexio->Conect_bbdd();
    
    $sqlS = "SELECT * FROM user_info WHERE `usuari` = '" . $user . "' AND `contrasenya` = '" . $pass . "';";
    
    $resposta = Selectdb($conn, $sqlS);
    if($resposta != "")
    {
        header("Location: menu.php");
    }
    else
    {
        header("Location: index.php?dades=incorrecte");
    }
}
else{
    header("Location: index.html");
}

?>