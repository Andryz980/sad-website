<?php

    $isnewlogin = true;
    $friendname = "shy";

    if (isset($_COOKIE['vusername']))
    {
        $isnewlogin = false;
        $friendname = $_COOKIE['vusername'];
    }
    
?>

<!DOCTYPE html>
<html>
   
    <head>
        <title>My Comfy Website</title>
        
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Implementato correttamente Bootstrap -->

        <link rel="icon" href="pics/vicon.png">
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>

    <body style="background-color:#c7b3ff"> <!-- edit -->
             
        <div class="container">
            
            <div class="col-xs-12" style="height:20px;"></div> <!-- Space -->            
            
            <div class="col-xs-10">
                <h1>Let the music flow through your heart</h1>
            </div>
            
            <div class="col-xs-2" align="right">
                
                <!-- BACK BUTTON -->
                <form>
                    <input type="text" class="form-control" style="visibility: hidden; height:24px">
                    <button type="submit" onclick="window.close();" class="btn btn-info">Close</button>
                </form>
                
            </div>
            
            <div class="col-xs-12" style="height:10px;"></div> <!-- Space -->  
            
            <div class="col-xs-12" style="height:15px" align="center">
                <h2>Choose your side</h2>
            </div>
            
            <div class="col-xs-12" style="height:10px;"></div> <!-- Space -->  
            
            <div class="col-xs-6" style="height:60px">
                <h3>Vaporwave comfyness</h3><br>
            </div>
            
            <div class="col-xs-6" align="right" style="height:60px">
                <h3>Synthwave vibes</h3><br>
            </div>
            
            <div class="col-xs-6"> <!-- V -->
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/156920476&color=%23543444&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </div>
            
            <div class="col-xs-6"> <!-- S -->
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/356794796&color=%23543444&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </div>
            
            <div class="col-xs-12" style="height:20px"></div> <!-- Space -->
            
            <div class="col-xs-6"> <!-- V -->
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/331709122&color=%23543444&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </div>
            
            <div class="col-xs-6"> <!-- S -->
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/330011825&color=%23543444&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </div>
            
        </div>
        
    </body>
    
</html>