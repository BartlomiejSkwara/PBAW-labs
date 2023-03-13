<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css" />

    <link rel="stylesheet" href="{$appURL}/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$appURL}/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$appURL}/assets/css/noscript.css" /></noscript>
	
        
        
    <meta charset="utf-8" />
    <title>{$title|default:"Bazowy title :>"}</title>
</head>
<body>

<main id = "wrapper">
    {if $onlyBody|default:false ==false}{include file="{$rootPath}/templates/header.tpl"}{/if}
    {block name=body}PUSTKA :<<<{/block}
    {if $onlyBody|default:false ==false}{include file="{$rootPath}/templates/footer.tpl"}{/if}

</main>





</body>
</html>


