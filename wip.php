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
            
            <div class="col-xs-8">
                <h1>Welcome to a even sadder WIP page</h1>
            </div>
            
            <div class="col-xs-4" align="right">
                <h1>御免なさい :c</h1>
            </div> 
            
            <div class="col-xs-12" style="height:20px;"></div> <!-- Space -->
            
            <div class="col-xs-9" align="center">
                <div class="progress" style="height:34px;">
                    <div class="progress-bar progress-bar-info" role="progressbar" style="height:50px; width:65%">
                        <h5>Progress (even if no one really cares lol)</h5>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-3" align="right">
                
                <form action="chat.php"> <!-- really any page before this one, TO EDIT -->
                    <button type="submit" class="btn btn-info">Back</button>
                </form>
                
            </div>
                
            <div class="col-xs-12" style="height:40px;"></div> <!-- Space -->
                
            <div class="col-xs-4">
                <img src="pics/sorry.jpg" class="img-rounded" style="width:100%;height:100%;">
            </div>
            
            <div class="col-xs-4">
                <img src="pics/wipgif.gif" class="img-rounded" style="width:100%;height:260px;">
                <h3 align="center">sorry sorry sorry</h3>
                <h3 align="center">sorry sorry sorry</h3>
            </div>
            
            <div class="col-xs-4">
                <img src="pics/sorry.jpg" class="img-rounded" style="width:100%;height:100%;">
            </div>
                        
            
        </div>
        
    </body>
    
</html>