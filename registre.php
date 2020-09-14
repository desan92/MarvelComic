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
            background-image: url(fotos/2.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
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
            height: 480px;
            width: 400px;
            color: white;
            justify-content: center;
            align-items: center;
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
    <div class="divlog" id="toHide2">
       <div class="log">
        <h4>Marvel</h4>
        <p style="color: red;"><?php 
            if(isset($_GET["registre"]))
            {
                echo "Error en el registre";
            } 
            else
            {
                
            }
            if(isset($_GET["dades"]))
            {
                echo "Error usuari existent";
            } 
            else
            {
                
            }
            ?></p>
        <div class="row">
            <form class="col s14" method="post" action="registredb.php">
                <div class="row">
                  <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">contacts</i>
                    <input id="first_name" name="first_name" type="text">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">contacts</i>
                    <input id="last_name" name="last_name" type="text">
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="username" name="username" type="text">
                    <label for="username">Username</label>
                  </div>
                  <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" name="password" type="password">
                    <label for="password">Password</label>
                  </div>
                  <div class="input-field hoverable col s6">
                    <i class="material-icons prefix">replay</i>
                    <input id="password2" name="password2" type="password">
                    <label for="password2">Retype Password</label>
                  </div>
                </div>
                <div class="row">
                    <div class="col offset-s3 s7">
                        <button class="btn waves-effect waves-light btn-small #1a237e indigo darken-4" type="submit" name="login" id="Login" value="login"> <span> REGISTRE </span>
                        <i class="material-icons right"> check </i>
                        </button>
                    </div>
                </div>
              </form>

            </div>
        </div>
    </div>
    
    <script>
    /*var password = document.getElementById("password");
    var password2 = document.getElementById("password2");

    function validatePassword(){
      if(password.value != password2.value) 
      {
        password2.setCustomValidity("Passwords Don't Match");
      } 
      else 
      {
        password2.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    password2.onkeydown = validatePassword;*/

    </script>
</body>
</html>
