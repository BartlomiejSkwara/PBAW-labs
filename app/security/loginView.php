<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
<meta charset="utf-8" />
<title>Generator</title>
</head>
<body>

<h2>Logowanie :></h2>
<form class="pure-form" action="<?php echo _APP_ROOT?>/app/security/login.php" method="put">
    <fieldset>
        <label for="login">Login:</label>
        <input type="text" id = "login" name ="login">
        <br><br>


        <label for="password">Password:</label>
        <input type="password" id = "password" name ="password">
        <br>
    </fieldset>
    <input class="pure-button pure-button-primary" type="submit">
        
</form>

</body>
</html>

<?php 
	if(count($messages)>0){
		foreach ($messages as $msg){
			echo $msg;
			echo "<br>";
                        
		}
                
	}
?>


