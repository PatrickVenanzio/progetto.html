<!DOCTYPE html>
<html>
    <head>
<style type="text/css">

    body {
    background: linear-gradient(180deg, #EC8DAE 0%, #CF55D2 64.31%,#9B52F9 100%);
    background-repeat:no-repeat;
    min-height: 100% !important;
}
html {
    position:relative;  
    min-height: 100% !important; 
}
* {
    box-sizing: border-box;
}
@font-face {
    font-family: 'Titolo';
    src: url('font/raleway/Raleway-Black.ttf')    
}
@font-face {
    font-family: 'Testo';
    src: url('font/raleway/Raleway-Light.ttf');
}
#titolo{
    font-family: 'Titolo';
    font-weight: bold;
    font-size: 2.5rem;
    text-align: center;
    margin-bottom:1em;
}
#scritte{
    color:rgb(216, 72, 101);
    margin:0.5em 0;
}
#scrittePiccole{
    font-size:smaller;
    margin:0.5em 0;
    color:black;    
}
.contenitore {
    width:100%;
    height:100%;
}
.contenitoreLogin {
    margin:auto;
    padding:3em 1em 1em 1em;
    background:white;
    border-radius: 0.25rem;
    max-width: 500px;
}
.riquadroLogin {
    padding:3em 1em 1em 1em;
    font-family: 'Testo';
    min-width:300px;
    width:80%;
    margin:auto;
}
.casellaDati {
    width:100%;
    background:gainsboro;
    padding:0.7em;
    font-size:1rem;
    font-family: 'Testo';
    border-radius: 0.25rem;
    border:0px;
}
.bottone{
    width:100%;
    background:rgb(226, 80, 80);
    font-size:1rem;
    font-family: 'Titolo';
    text-align: center;
    padding:0.7em;
    color:white;
    margin:2.5em 0;
    border-radius: 0.25rem;
    border:0px;
}
</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>pinet Bello</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        
        <script src="" async defer></script>

        <div class="contenitore">
            <div class="contenitoreLogin">
                <div class="riquadroLogin">
                    <div id="titolo">LOGIN</div>
                    <div id="scritte">
                        <form action="home.php"  method="post">
                        Inserisci la tua email
                        <input type="email" class="casellaDati" /><br><br>
                        
                        Inserisci la password
                        <input type="password" class="casellaDati" />
                        
                        <div id="scrittePiccole">
                            <input type="checkbox"> Ricordami
                        </div>
                        
                        <input type="submit" class="bottone" value="ACCEDI" />

                            Non sei ancora registrato? <a id="scritte" href="registrati.php">Registrati ora</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>
</html>  
