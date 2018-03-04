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
    </head>

    <body style="background-color:#c7b3ff"> <!-- edit -->
        
        <div class="container">
            
            <div class="col-xs-12" style="height:20px;"></div> <!-- Space -->            
            
            <div class="col-xs-12">
                <h1>Welcome to a sad website 🌈</h1>
            </div>
            
            <?php
            
            if ($friendname == "shy")
                echo '
            <div class="col-xs-12" align="center">
                <h3>Wanna be friends?</h3>
            
                <h5>(I mean if you don\'t that\'s fine too)</h5>
            </div>
            
            <div class="col-xs-12" style="height:20px;"></div> <!-- Space -->            
            
            <form method="get" action="tables.php">';
            else
                echo '<div class="col-xs-12" style="height:30px;"></div>';
            ?>
            
                <div class="col-xs-4" align="right">
                    <img src="pics/kirby.gif" class="img-circle" style="width:100px;height:100px;">
                </div>
                
            <?php
            
            if ($friendname == "shy")
                echo '
                
                <div class="col-xs-4" align="center">
                    <div class="form-group">
                        <label>Your name:</label>
                        <input type="text" class="form-control" name="newfriend">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Join</button>
                    </div>
                </div>
                ';
            else
                echo '<div class="col-xs-4" align="center">
                        <h4>Wait... ' . $friendname . '? You came back despite this website being so awful..?</h4>
                        <h4>I mean, thanks! I really appreciate it haha wow</h4></div>';
            ?>
                <div class="col-xs-4">
                    <img src="pics/kirby.gif" class="img-circle" style="width:100px;height:100px;">
                </div>
                
            <?php
            
            if ($friendname == "shy")
                echo '</form>';
            else
                echo '<div class="col-xs-12" style="height:50px;"></div>';
            
            ?>
            
            <div class="col-xs-12" style="height:10px;"></div> <!-- Space -->   
            
            <div class="col-xs-12">
                
                <h3>Enjoy some nice pics anyway</h3>
                
                <div class="col-xs-12" style="height:20px;"></div> <!-- Space -->   
                
                <div class="col-xs-4">
                    <img src="pics/lights.png" class="img-rounded" style="width:350px;height:200px;">
                </div>
                <div class="col-xs-4">
                    <img src="pics/way.png" class="img-rounded" style="width:350px;height:200px;">
                </div>
                <div class="col-xs-4">
                    <img src="pics/rain.gif" class="img-rounded" style="width:350px;height:200px;">
                </div>

                
            </div>
            
        </div>
        
    </body>
    
</html>