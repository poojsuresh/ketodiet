<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>KETO DIET TRACKER</title>
	<meta charset='UTF-8'>
	
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="stylesheets/plain.css">
</head>
<body>
	<div class='content'>
		<div class="login-page">
			<div class="form">
                    <form  method = "post" action = "/register">
                        <h2>Register</h2> 
                        <p class="message">Enter details to register on the Keto Diet App</p> 
                        <input type="text" placeholder = "Enter username" name = "username">
						<input type="email" placeholder = "Enter Email ID" name = "email">
						<input type="password" placeholder = "Enter password" name = "password">
                        <input type="text" placeholder = "Enter first name" name = "firstname">
                        <input type="text" placeholder = "Enter last name" name = "lastname">
						<input type="text" placeholder = "Enter age" name = "age">
						<input type="text" placeholder = "Enter weight" name = "weight">
						<input type="text" placeholder = "Enter height" name = "height">
						<button id = "submit" name = "submit">submit</button>
						<p class="message">Already registered? <a href="/" onclick="openPage()">Sign In</a></p>
					</form>
	
					<script>
						function openPage(){
		  				window.open("login.php","_self")
						};
	  				</script>

                    <?php  

                        require 'vendor/autoload.php';
                        use Google\Cloud\Datastore\DatastoreClient; 
                        $projectId = 'regal-spark-270602';
                        $datastore = new DatastoreClient([
                        'projectId' => $projectId
                        ]);

                        if(isset($_POST['submit']))
                        {                     
                            $uname = $_POST['username'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $fname = $_POST['firstname'];
                            $lname = $_POST['lastname'];
                            $age = $_POST['age'];
                            $weight = $_POST['weight'];
                            $height = $_POST['height'];

                            $key = $datastore->key('Login', $uname);
                            $task = $datastore->entity($key, [
                                'Age' => $age,
                                'Email' => $email,
                                'Height' => $height,
                                'Password' => $password,
                                'First Name' => $fname,
                                'Last Name' => $lname,
                                'Weight' => $weight
                            ]);
                            $datastore->upsert($task);

                           echo "Congratulations! Successfully registered on the Keto Fiet Tracker App";
                        }
                    ?>
    		</div>
		</div>
	</div>
</body>
</html>
