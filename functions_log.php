<?php

function IniciarSessio($usuari, $pass)
{
    session_start();
    
    $_SESSION["usuari"] = $usuari;
    $_SESSION["pass"] = $pass;
}

function Selectdb($conn, $sql)
{
     $resposta = null;
        
        //es pasa la consulta i la conexio al mysqli_query
        $resultat = mysqli_query($conn, $sql);

        while ($fila = mysqli_fetch_assoc($resultat)) {
            //surt un element.
            $resposta = $fila;
        }
        
        return $resposta;
           
}

?>