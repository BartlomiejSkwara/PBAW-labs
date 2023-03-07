<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Generator</title>
</head>
<body>

sususususus
<h1> Generator kształtów </h1>
<form action = "<?php print(_APP_ROOT)?>/app/gen.php" method="put">

	<label for="shapecharacter">Znak:</label>
	<input type= "text" id="shapecharacter" name="shapecharacter"  maxlength="1" size="1" value="<?php if(isset($shapecharacter))print($shapecharacter);?>">

	<label for="shapesize">Rozmiar:</label>
	<input type= "text" id="shapesize" name="shapesize"  maxlength="2" size="2" value="<?php if(isset($shapesize))print($shapesize);?>">

	<label for="shape">Kształt:</label>
	<select id = "shape" name="shape">
		<option value =	"square"  <?php if(isset($shape)&&($shape=="square")) print("selected");?>	>kwadrat</option>
		<option value =	"stairs"  <?php if(isset($shape)&&($shape=="stairs")) print("selected");?>	>schodki</option>
		<option value =	"triangle"<?php if(isset($shape)&&($shape=="triangle")) print("selected");?>>trójkąt</option>
		<option value =	"romb"	  <?php if(isset($shape)&&($shape=="romb")) print("selected");?>	>romb	</option>
	</select>
	
	<input type="submit"></input>
	<br>
	
</form>

</body>
</html>

<?php 
	if(isset($messages)){
		foreach ($messages as $msg){
			echo $msg;
			echo "<br>";
		}
	}
	else if (isset($result)){
		echo $result;
	}


?>