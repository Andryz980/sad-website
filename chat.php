<?php
    $friendname = "shy";

    if (isset($_COOKIE['vusername']))
        $friendname = $_COOKIE['vusername'];    
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
                <h1>Welcome to a nice chat for nice people! ^^</h1>
            </div>
            
            <div class="col-xs-2" align="right">
                
                <!-- BACK BUTTON -->
                <form action="tables.php" method="get">                    
                    <input type="text" class="form-control" name="newfriend" style="visibility: hidden; height:24px" value="<?php echo $friendname; ?>">
                    <button type="submit" class="btn btn-info">Back</button>
                </form>
                
            </div>
            
            <div class="col-xs-12" style="height:40px;"></div> <!-- Space -->
            
            <div class="col-xs-12"><label>You can write here, don't worry about the other people they are cool too</label></div>
            
            <div class="col-xs-9">
                
                <form>
                    
                    <input type="text" class="form-control" name="message">
                    
                </form>
                
            </div>
            
            <div class="col-xs-3" align="right">
            
                <form action="wip.php" method="post">
                    
                    <button type="submit" class="btn btn-info">Send</button>
                    <!-- database -->
                    
                </form>
            
            </div>
            
            <div class="col-xs-12" style="height:40px;"></div> <!-- Space -->
            
            <div class="col-xs-12">

                <table class="table table-striped">
                    <col width="30%">
                    <col width="70%">
                    <thead>
                        
                        <tr>
                            <th>User</th>
                            <th>Message</th>
                        </tr>

                    </thead>
                    
                    <tbody>
                        <?php
                            $i = 0;
                            $users = array("Andy","Sweetie","Wiz");
                            $messages = array("Hey","Sup","Yo guys");
                            
                            for ($i = 0; $i < count($messages); $i++)
                                echo "<tr><th>$users[$i]</th><th>$messages[$i]</th></tr>";
                        ?>
                    </tbody>

                </table>

            </div>

            <div class="col-xs-12" style="height:20px;"></div> <!-- Space -->
            
            <div class="col-xs-12" align="center">
                <a href="jukebox.php" target="_blank">
                    <img src="pics/boombox.gif">
                </a>
            </div>
            
        </div>
        
    </body>
    
</html>