<!DOCTYPE html>
<html lang="">
<head>
    <script src="js/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="jquery/jquery-3.4.1.min.js" ></script>
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
   <div id="app">
       <div>
        <ul class="collapsible">
            <li v-for="dada in resultatEvents">
              <div class="collapsible-header">{{dada.title}}</div>
              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
        </ul>
    </div>
   </div>
    
    
    
    
    <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems);
          });
        
        var app = new Vue({
          el: '#app',
          data: {
            resultatEvents: [],
              carregat:false,
              nom: "Jordi"
          },
            method:{
                dadesEvents(){
                axios.get("api/apiMarvel.php")	//recuperem les dades de tots els events
                .then(res=>{
                    //console.log(resultatEvents = res.data)
                   this.resultatEvents = res.data
				   this.carregat = true	//quan tinguem les dades, posarem aquesta variable en true
                   
                })
            }
            },
            mounted(){				//quan es carregui el vue, que carregin les dades:
				this.dadesEvents()
			}
            
        })
        
    
    </script>
</body>
</html>
