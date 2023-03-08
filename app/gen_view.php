<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
<meta charset="utf-8" />
<title>Generator</title>
</head>
<body>


<h1> Generator kształtów </h1>
<form class="pure-form" action = "<?php print(_APP_ROOT)?>/app/gen.php" method="put">

	<label for="shapecharacter">Znak:</label>
        <input type= "text" id="shapecharacter" name="shapecharacter"  maxlength="1" size="1" value="<?php securePrint($shapecharacter)?>">

	<label for="shapesize">Rozmiar:</label>
        <input type= "text" id="shapesize" name="shapesize"  maxlength="2" size="2" value="<?php securePrint($shapesize);?>">

	<label for="shape">Kształt:</label>
	<select id = "shape" name="shape">
		<option value =	"square"  <?php if(isset($shape)&&($shape=="square")) print("selected");?>	>kwadrat</option>
		<option value =	"stairs"  <?php if(isset($shape)&&($shape=="stairs")) print("selected");?>	>schodki</option>
		<option value =	"triangle"<?php if(isset($shape)&&($shape=="triangle")) print("selected");?>>trójkąt</option>
		<option value =	"rotatedSquare"	  <?php if(isset($shape)&&($shape=="rotatedSquare")) print("selected");?>	>kwadrate obrot</option>
	</select>
	
	<input class="pure-button pure-button-primary" type="submit"></input>
	<br>
	
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
	else {
		securePrint($result);
	}


?>
