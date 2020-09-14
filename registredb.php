<?php

include("bbdd/conexio_db.php");
include("functions_registre.php");


if(isset($_POST["first_name"], $_POST["last_name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["password2"]))
{
    
    //echo md5($_POST["password"]) . $_POST["first_name"];
    
    $nom = $_POST["first_name"];
    $cognom = $_POST["last_name"];
    $usuari = $_POST["username"];
    $mail = $_POST["email"];
    $pass = md5($_POST["password"]);
    
    IniciarSessio($nom, $cognom, $usuari, $mail, $pass);

    $conexio = new Connexio();
    $conn = $conexio->Conect_bbdd();
    
    $sqlS = "SELECT * FROM user_info WHERE `usuari` = '" . $usuari . "';";
    
    $resposta = Selectdb($conn, $sqlS);
    if($resposta == "")
    {
        $sqlI = "INSERT INTO user_info (`nom`, `cognom`, `mail`, `usuari`, `contrasenya`) VALUES ( '$nom', '$cognom', '$mail' ,'$usuari', '$pass');"; 
    
        Insertdb($conn, $sqlI);
    }
    else
    {
        header("Location: registre.php?dades=incorrecte");
    }
    
}
else
{
    header("Location: registre.php");
}

?>