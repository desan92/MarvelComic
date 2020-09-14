<?php


if(isset($_GET["id_comic"]))
{
    $comicID = $_GET["id_comic"];
    
    $dades = json_decode(file_get_contents("http://gateway.marvel.com/v1/public/comics/" . $comicID . "?ts=1&apikey=2a644643c40788a9fc46bd99bcfff61a&hash=76f3ed42b098bd7e66fd64bc80ef1e3b"));
    
    $dades = json_decode(json_encode($dades), true);
    
    $resultatId = [];
    
    for($i = 0; $i < count($dades["data"]["results"]); $i++)
    {
        array_push($resultatId, array ('id_comic'=>$dades["data"]["results"][$i]["id"], 'title'=>$dades["data"]["results"][$i]["title"], 'descripcio'=>$dades["data"]["results"][$i]["description"], 'format'=>$dades["data"]["results"][$i]["format"], 'foto'=>$dades["data"]["results"][$i]["thumbnail"]["path"] . "/landscape_amazing.jpg"));
    }
    
    echo(json_encode($resultatId));
}
else
{
    $dades = json_decode(file_get_contents("http://gateway.marvel.com/v1/public/comics?ts=1&apikey=2a644643c40788a9fc46bd99bcfff61a&hash=76f3ed42b098bd7e66fd64bc80ef1e3b"));

    $dades = json_decode(json_encode($dades), true);

    $resultat = [];
    for($i = 0; $i < count($dades["data"]["results"]); $i++)
    {
        array_push($resultat, array ('id_comic'=>$dades["data"]["results"][$i]["id"], 'title'=>$dades["data"]["results"][$i]["title"], 'format'=>$dades["data"]["results"][$i]["format"], 'foto'=>$dades["data"]["results"][$i]["thumbnail"]["path"] . "/portrait_xlarge.jpg"));
    }

    echo(json_encode($resultat));
}


?>