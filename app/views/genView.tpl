{extends file="main.tpl"}
{block name=body}

    
    

 

<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
            <div class="inner">
                    <header class="major">
                            <h1>Generator kształtów</h1>
                    </header>

                    <form  action = "{$conf->actionRoot}generatorProcess" method="post">
                    <div class ="fields";>
                        
                        <div class="field quarter">
                        <label for="shapecharacter">Znak:</label>
                        <input type= "text" id="shapecharacter" name="shapecharacter"  maxlength="1" size="1" value="{$genForm->shapecharacter}">
                        </div>
                        
                        <div class="field quarter">
                        <label for="shapesize">Rozmiar:</label>
                        <input type= "text" id="shapesize" name="shapesize"  maxlength="2" size="2" value="{$genForm->shapesize}">
                        </div>
                        
                        <div class="field quarter">
                        <label for="shape">Kształt:</label>
                        <select id = "shape" name="shape">
                                <option value =	"square"        {if isset($genForm->shape)&& $genForm->shape=="square"}selected{/if}>kwadrat</option>
                                <option value =	"stairs"        {if isset($genForm->shape)&& $genForm->shape=="stairs"}selected{/if}	>schodki</option>
                                <option value =	"triangle"      {if isset($genForm->shape)&& $genForm->shape=="triangle"}selected{/if}>trójkąt</option>
                                <option value =	"rhombus"       {if isset($genForm->shape)&& $genForm->shape=="rhombus"}selected{/if}>romb</option>
                        </select>
                        </div>
                        
                        <div class="field quarter">
                            <label class="invisible">Submit</label>
                            <input class="primary" type="submit" value="Generuj"></input>
                        </div>

                        
                    </div>
                    
                    

                    </form>

                   
                        
                        

            </div>
            
    </section>
                        
    <section>
        <div class="inner">
           {if (count($messages->getErrors())>0)}
               <ul>
               {foreach $messages->getErrors() as $msg}
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
                                
    <section>
        <div class = "inner">    
            <h2>Historia Generowań</h2>
            <div class="table-wrapper">
                <table>
                        <thead>
                            <tr>
                                <th>Znak</th>
                                <th>Rozmiar</th>
                                <th>Kształt</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            {if (count($history)>0)}
                                {foreach $history as $task}
                                    <tr>
                                        <td>{$task["char"]}</td>
                                        <td>{$task["size"]}</td>
                                        <td>{$task["shape"]}</td>
                                        <td>{$task["date"]}</td>   
                                        <td><a href="{$conf->actionRoot}generatorProcess&shapecharacter={urlencode($task["char"])}&shapesize={$task["size"]}&shape={$task["shape"]}" class="button primary small">Generuj</a></td>
                                        <td><a href="{$conf->actionRoot}generatorRemove&removeId={$task["resultID"]}" class="button primary small"> Usuń  </a></td>
                                    </tr>
                                {/foreach}
                            {else}
                                <tr>
                                    <td>Brak Danych</td>
                                </tr>
                            {/if}
                        </tbody>
                        {*<tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>100.00</td>
                                </tr>
                        </tfoot>*}
                </table>
        </div>
        </div>
    </section>

</div>

{/block}


                                                