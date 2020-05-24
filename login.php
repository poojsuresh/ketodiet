<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>KETO DIET TRACKER</title>
        <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="stylesheets/plain.css">
    </head>
    <body>
    <div class='content'>
        <div class="login-page">
            <div class="form">
                <form class="login-form" method = "post" action = "/">
                    <h2>Log In</h2>
                    <p class="message"> login here using your username and password</p>  
                    <input type="text" placeholder="username" name = "uid"/>
                    <input type="password" placeholder="password" name = "password"/>
                    <button id = "login" name = "login">login</button>
                    <p class="message">Not registered? <a href="/register" onclick="openPage()">Create an account</a></p>
                </form>

                <script>
						function openPage(){
		  				window.open("register.php","_self")
						};
	  			</script>

            </div>
        </div>
        
        <?php

            require 'vendor/autoload.php';
            use Google\Cloud\Datastore\DatastoreClient; 
            $projectId = 'regal-spark-270602';
            $datastore = new DatastoreClient([
            'projectId' => $projectId
            ]);

            $key = $datastore->key(Login, $_POST['uid']);
            $entity = $datastore->lookup($key);
            
            // Set session variables
            //$_SESSION["user_name"] = ($entity['Username']);
            $_SESSION["user_name"] = ($_POST['uid']);
            $_SESSION["age"] = ($entity['Age']);
            $_SESSION["weight"] = ($entity['Weight']);
            $_SESSION["height"] = ($entity['Height']);
            $_SESSION["firstname"] = ($entity['First Name']);
            $_SESSION["lastname"] = ($entity['Last Name']);
    
            if(isset($_POST['login']))
            {
                if (!is_null($entity['Email']))
                {
                    if($entity['Password'] == $_POST['password'])
                    {
                        echo '<script type="text/javascript">
                        window.location = "/nutrition"
                        </script>';
                    }
    
                    else
                        echo "User id or password is invalid.";
                }
    
            }
            else
            {
                echo "User id or password is INVALID.";
            }
        
        ?>
</div>
</body> 
</html>	