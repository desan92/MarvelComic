<?php

function IniciarSessio($nom, $cognom, $usuari, $mail, $pass)
{
    session_start();
    
    $_SESSION["nom"] = $nom;
    $_SESSION["cognom"] = $cognom;
    $_SESSION["usuari"] = $usuari;
    $_SESSION["mail"] = $mail;
    $_SESSION["pass"] = $pass;
}

function Selectdb($conn, $sql)
{
     $resposta = null;
        
        //es pasa la consulta i la conexio al mysqli_query
        $resultat = mysqli_query($conn, $sql);

        //també es pot fer un mysqli_fetch_array retorna un array
        //posant echo $fila['nom'];
        while ($fila = mysqli_fetch_assoc($resultat)) {
            //surt un element.
            $resposta = $fila;
        }
        
        return $resposta;
        
           
}

function Insertdb($conn, $sql){
    //$resposta = null;
    
    if (mysqli_query($conn, $sql)) 
    {
      //$resposta = "Nou registre afegit";
        header("Location: index.php");
    } 
    else 
    {
      //$resposta = "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("Location: registre.php?registre=error");
    }
    
    //return $resposta;
}

?>