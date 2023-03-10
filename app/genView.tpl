{extends file="{$rootPath}/templates/main.tpl"}
{block name=body}

    
    

 

<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
            <div class="inner">
                    <header class="major">
                            <h1>Generator kształtów</h1>
                    </header>

                    <form  action = "{$appRoot}/app/gen.php" method="put">
                    <div class ="fields";>
                        
                        <div class="field quarter">
                        <label for="shapecharacter">Znak:</label>
                        <input type= "text" id="shapecharacter" name="shapecharacter"  maxlength="1" size="1" value="{$genForm['shapecharacter']}">
                        </div>
                        
                        <div class="field quarter">
                        <label for="shapesize">Rozmiar:</label>
                        <input type= "text" id="shapesize" name="shapesize"  maxlength="2" size="2" value="{$genForm['shapesize']}">
                        </div>
                        
                        <div class="field quarter">
                        <label for="shape">Kształt:</label>
                        <select id = "shape" name="shape">
                                <option value =	"square"        {if isset($genForm['shape'])&& $genForm['shape']=="square"}"selected"{/if}>kwadrat</option>
                                <option value =	"stairs"        {if isset($genForm['shape'])&& $genForm['shape']=="stairs"}"selected"{/if}	>schodki</option>
                                <option value =	"triangle"      {if isset($genForm['shape'])&& $genForm['shape']=="triangle"}"selected"{/if}>trójkąt</option>
                                <option value =	"rotatedSquare" {if isset($genForm['shape'])&& $genForm['shape']=="rotatedSquare"}"selected"{/if}>kwadrate obrot</option>
                        </select>
                        </div>
                        
                        <div class="field quarter">
                            <label class="invisible">Submit</label>
                            <input class="primary" type="submit"></input>
                        </div>
                        
                    </div>
                    
                    

                    </form>
                        
                       
                   
                        
                        

            </div>
            
    </section>
                        
    <section>
        <div class="inner">
           {if (count($messages)>0)}
               <ul>
               {foreach $messages as $msg}
                        <li>{$msg}</li>
               {/foreach}
               </ul>
           {else} 
               {if isset($result)}
                   {$result}
               {/if}

           {/if}
           </div>  
    </section>     
                                

</div>










{/block}


                                                