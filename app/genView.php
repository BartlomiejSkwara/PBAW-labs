<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css" />

    <link rel="stylesheet" href="<?php echo _APP_URL?>/css/style.css">

<meta charset="utf-8" />
<title>Generator</title>
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Generator :></a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Generator</a></li>
            <li class="pure-menu-item"><a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-menu-link">Wyloguj</a></li>
        </ul>
    </div>
</div>

<main>
<h1> Generator kształtów </h1>

<form class="pure-form" action = "<?php print(_APP_ROOT)?>/app/gen.php" method="put">

	<label for="shapecharacter">Znak:</label>
        <input type= "text" id="shapecharacter" name="shapecharacter"  maxlength="1" size="1" value="<?php securePrint($genForm['shapecharacter'])?>">

	<label for="shapesize">Rozmiar:</label>
        <input type= "text" id="shapesize" name="shapesize"  maxlength="2" size="2" value="<?php securePrint($genForm['shapesize']);?>">

	<label for="shape">Kształt:</label>
	<select id = "shape" name="shape">
		<option value =	"square"       <?php if(isset($genForm['shape'])&&($genForm['shape']=="square")) print("selected");?>	>kwadrat</option>
		<option value =	"stairs"       <?php if(isset($genForm['shape'])&&($genForm['shape']=="stairs")) print("selected");?>	>schodki</option>
		<option value =	"triangle"     <?php if(isset($genForm['shape'])&&($genForm['shape']=="triangle")) print("selected");?>>trójkąt</option>
		<option value =	"rotatedSquare"<?php if(isset($genForm['shape'])&&($genForm['shape']=="rotatedSquare")) print("selected");?>	>kwadrate obrot</option>
	</select>
	
	<input class="pure-button pure-button-primary" type="submit"></input>
	<br>
	
</form>



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


</main>

<div class="pure-g">
    <?php
        for($i = 0; $i<25; $i++){
            echo '<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4"><div class="among">You arrrrrr a pirate</div></div>';
        }
       
        
    ?>
   

</div>


</body>
</html>

