{extends file="main.tpl"}
{block name=body}	
    <div class="is-preload">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Menu -->
            <nav id="menu" class="is-menu-visible">
                <div class="inner">
                <h1>Logowanie</h1>
                <hr/>

                <form method="post" action="{$conf->actionRoot}login">                                   
                    <label for="login">Login:</label>
                    <input type="text" name="login" id="login" value=""/>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="" />

                    <br/>
                    <input class="" type="submit" value="Zaloguj" >
                </form>
                <section>
                    <div class="inner">
                    {if (count($messages->getErrors())>0)}
                       {foreach $messages->getErrors() as $msg}
                                <p class="message">{$msg}</p>
                       {/foreach}
                    {/if}
                    </div>  
                </section>
                </div>                              
            </nav>
        </div>

        <!-- Scripts -->
        <script src="{$conf->rootPath}/assets/js/jquery.min.js"></script>
        <script src="{$conf->rootPath}/assets/js/jquery.scrolly.min.js"></script>
        <script src="{$conf->rootPath}/assets/js/jquery.scrollex.min.js"></script>
        <script src="{$conf->rootPath}/assets/js/browser.min.js"></script>
        <script src="{$conf->rootPath}/assets/js/breakpoints.min.js"></script>
        <script src="{$conf->rootPath}/assets/js/util.js"></script>
        <script src="{$conf->rootPath}/assets/js/main.js"></script>
    </div>  

 
    
{/block}


{*		<title>Landing - Forty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>*}


