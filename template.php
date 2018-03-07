<!DOCTYPE html>
<html>
   
    <head>
        <title>Template</title>
        
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
            
            <div class="col-xs-10"><h1>Wow, new page!</h1></div>
            
            <div class="col-xs-2" align="right">
                
                <!-- BACK BUTTON -->
                <form action="index.php">
                    <input type="text" class="form-control" style="visibility: hidden; height:24px">
                    <button type="submit" class="btn btn-info">Back</button>
                </form>
                
            </div>
            
            <div class="col-xs-12" style="height:20px;"></div> <!-- Space -->  
            
            <div class="col-xs-2"></div>
            
            <div class="col-xs-8" align="center">
                <form action="reg.php" method="post">
                    <h3>Username (Max 24 chars)</h3>
                    <input type="text" name="newfriend" class="form-control" style="font-family:Arial; text-align:center">
                </form>
            </div>
            
            <div class="col-xs-2"></div>
            
            <div class="col-xs-12" style="height:30px;"></div> <!-- Space -->  

            <div class="col-xs-12" align="center">
                <button type="button" class="btn btn-info" name="wow" onclick="alert('Thanks I hope you\'re happy'); showChatButton()">Register</button>
            </div>
            
        </div>
    </body>
    
</html>