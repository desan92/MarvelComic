<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Fan Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body{
            background-color: black;
        }
        .videodiv{
            text-align: center;
        }
        .divlog{
            margin: auto;
            margin-top: 50px;
            border: solid #000033 5px;
            border-radius: 25px;
            background-image: url(fotos/Marvel-Comics-wallpaper.jpg);
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            height: 450px;
            width: 400px;
            color: white;
            display: none;
            justify-content: center;
            align-items: center;
        }
        .video{
            height: 500px;
            width: 500px;
        }
        .log{
            text-align: center;
            font-family: sans-serif;
            color: whitesmoke;
        }
        #formlog{
            margin: auto;
            
        }
    </style>
</head>
    
<body id="body">
   <div class="videodiv" id="toHide">
    <video class="video" autoplay muted>
        <source src="media/Marvel%20Intro%20HD.mp4" type="video/mp4">
    </video>
    </div>
    <div class="divlog" id="toHide2">
       <div class="log">
        <h4>Marvel</h4>
        <p>Per a iniciar sessió, entra les teves credencials</p>
        <p style="color: red;"><?php 
            if(isset($_GET["dades"]))
            {
                echo "Error usuari no existeix";
            } 
            else
            {
                
            }
            ?></p>
        <div class="row">
            <form class="col s12" method="post" action="log.php">
              <div class="row" style="text-align: center;">
                <div class="input-field col offset-s3 s7">
                 <i class="material-icons prefix" style="font-size: 25px">account_box</i>
                  <input id="usuari" type="text" class="validate" name="usuari">
                  <label for="usuari">Usuari</label>
                </div>
                <div class="input-field col offset-s3 s7">
                 <i class="material-icons prefix" style="font-size: 25px">https</i>
                  <input id="pass" type="password" class="validate" name="pass">
                  <label for="pass">Password</label>
                </div>
              </div>
              <div class="row">
                    <div class="col offset-s3 s7">
                        <button class="btn waves-effect waves-light btn-small #1a237e indigo darken-4" type="submit" name="login" id="Login" value="login"> <span> ENTRA </span>
                        <i class="material-icons right"> check </i>
                        </button>
                    </div>
                </div>
            </form>
          </div>
        <p>No tens conta? <a href="registre.php">Registra't</a></p>
        </div>
    </div>
    <script>
    setTimeout(hideDiv, 12500);   
            function hideDiv() {
                document.getElementById("toHide").style.display="none";    
            }
    setTimeout(hideDiv2, 12500);   
            function hideDiv2() {
                document.getElementById("toHide2").style.display="block";    
                var imatge = document.getElementById("body");
                imatge.style.backgroundImage= "url(fotos/2.jpg)";
                imatge.style.backgroundAttachment="fixed";
                imatge.style.backgroundPosition="center center";
                imatge.style.backgroundSize="cover";
                imatge.style.backgroundRepeat="no-repeat";
                imatge.style.transition = "all 1s ease-in-out";
            }
    </script>
</body>
</html>
