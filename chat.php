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
                <h1>Welcome to a sad chat for nice people 🌈</h1>
            </div>
            
            <div class="col-xs-2" align="right">
                
                <form action="tables.php" method="get">                    
                    <input type="text" class="form-control" name="newfriend" style="visibility: hidden" value="<?php echo $friendname; ?>">
                    
                    <button type="submit" class="btn btn-info">Back</button>
                </form>
                
            </div>
            
            <div class="col-xs-12" style="height:40px;"></div> <!-- Space -->
            
            <div class="col-xs-8">
                
                <form>
                    
                    <input type="text" class="form-control" name="message">
                    
                </form>
                
            </div>
            
            <div class="col-xs-4" align="right">
            
                <form action="$_SERVER['PHP_SELF']" method="post">
                    
                    <button type="submit" class="btn btn-info">Send</button>
                    <!-- database -->
                    
                </form>
            
            </div>
            
            <div class="col-xs-12" style="height:40px;"></div> <!-- Space -->
            
            <div class="col-xs-12">

                <table class="table table-striped">

                    <thead>

                        <tr>
                            <th>User</th>
                            <th>Message</th>
                        </tr>

                    </thead>
                    
                    <tbody>
                        <?php
                            $i = 0;
                            $users = array("Andy","Cucciola2.0","Andy");
                            $messages = array("Hey","sup","Love you");
                            
                            for ($i = 0; $i < count($messages); $i++)
                                echo "<tr><th>$users[$i]</th><th>$messages[$i]</th></tr>";
                        ?>
                    </tbody>

                </table>

            </div>
            
        </div>
        
    </body>
    
</html>