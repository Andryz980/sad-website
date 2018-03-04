<?php
    
    if (isset($_GET['newfriend']))
        $friendname = $_GET['newfriend'];
    else
        $friendname = $_COOKIE['vusername'];
    
    $cuser = setcookie("vusername", $friendname, time() + (10 * 365 * 24 * 60 * 60), "/");

?>

<!DOCTYPE html>
<html>
   
    <head>
        <title>Tables</title>
        
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
            
            <div class="col-xs-12"><h1>Hi new friend, join the others</h1></div>
            
            <div class="col-xs-12" style="height:20px;"></div> <!-- Space -->  
            
            <div class="col-xs-12">
            <form action="index.php">
                <button type="submit" class="btn btn-info">Back</button>
            </form>
            </div>
            
        </div>
        
        <div class="col-xs-12" style="height:10px;"></div> <!-- Space -->
        
        <div class="col-xs-2"></div>
        
        <div class="col-xs-8">
        
            <table class="table table-hover">

                <thead>

                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <th>Me</th>
                        <th>Haha</th>
                    </tr>
                    <tr>
                        <th>You, <?php if ($friendname !== '') echo $friendname; else echo "shy friend"; ?></th>
                        <th>My new best friend</th>
                    </tr>
                    <tr>
                        <th>Cucciola2.0</th>
                        <th>Bae</th>
                    </tr>
                    <tr>
                        <th>Idk</th>
                        <th>I'm sad</th>
                    </tr>
                    <tr>
                        <th>Claptrap</th>
                        <th>Deejay</th>
                    </tr>
                    <tr>
                        <th>Yeah him</th>
                        <th>lol</th>
                    </tr>
                </tbody>

            </table>
            
        </div>
            
        <div class="col-xs-12" style="height:30px;"></div> <!-- Space -->
            
            
        <div class="col-xs-2"></div>
        
        <div class="col-xs-8"align="center">
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" style="width:10%">
                    Friends
                </div>
                <div class="progress-bar progress-bar-info" role="progressbar" style="width:20%">
                    Special friends
                </div>
                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:60%">
                    Social anxiety
                </div>
            </div>
        </div>
        
        <div class="col-xs-12" style="height:30px;"></div> <!-- Space -->
        
        <div class="col-xs-12" align="center">
            <button type="button" class="btn btn-info" name="wow" onclick="alert('Thanks I hope you\'re happy')">Wow very nice table good job I like it</button>
        </div>
        
    </body>
    
</html>