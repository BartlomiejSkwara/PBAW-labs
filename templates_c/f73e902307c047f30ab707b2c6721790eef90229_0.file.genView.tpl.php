<?php
/* Smarty version 4.2.1, created on 2023-03-13 16:56:01
  from 'E:\XAMPP\htdocs\php_01_generator\app\genView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640f4791682ce6_95968880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f73e902307c047f30ab707b2c6721790eef90229' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\app\\genView.tpl',
      1 => 1678722772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640f4791682ce6_95968880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_737922373640f4791675a06_38780050', 'body');
?>



                                                <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['rootPath']->value)."/templates/main.tpl");
}
/* {block 'body'} */
class Block_737922373640f4791675a06_38780050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_737922373640f4791675a06_38780050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    
    

 

<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
            <div class="inner">
                    <header class="major">
                            <h1>Generator kształtów</h1>
                    </header>

                    <form  action = "<?php echo $_smarty_tpl->tpl_vars['appRoot']->value;?>
/app/gen.php" method="put">
                    <div class ="fields";>
                        
                        <div class="field quarter">
                        <label for="shapecharacter">Znak:</label>
                        <input type= "text" id="shapecharacter" name="shapecharacter"  maxlength="1" size="1" value="<?php echo $_smarty_tpl->tpl_vars['genForm']->value['shapecharacter'];?>
">
                        </div>
                        
                        <div class="field quarter">
                        <label for="shapesize">Rozmiar:</label>
                        <input type= "text" id="shapesize" name="shapesize"  maxlength="2" size="2" value="<?php echo $_smarty_tpl->tpl_vars['genForm']->value['shapesize'];?>
">
                        </div>
                        
                        <div class="field quarter">
                        <label for="shape">Kształt:</label>
                        <select id = "shape" name="shape">
                                <option value =	"square"        <?php if ((isset($_smarty_tpl->tpl_vars['genForm']->value['shape'])) && $_smarty_tpl->tpl_vars['genForm']->value['shape'] == "square") {?>selected<?php }?>>kwadrat</option>
                                <option value =	"stairs"        <?php if ((isset($_smarty_tpl->tpl_vars['genForm']->value['shape'])) && $_smarty_tpl->tpl_vars['genForm']->value['shape'] == "stairs") {?>selected<?php }?>	>schodki</option>
                                <option value =	"triangle"      <?php if ((isset($_smarty_tpl->tpl_vars['genForm']->value['shape'])) && $_smarty_tpl->tpl_vars['genForm']->value['shape'] == "triangle") {?>selected<?php }?>>trójkąt</option>
                                <option value =	"rhombus"       <?php if ((isset($_smarty_tpl->tpl_vars['genForm']->value['shape'])) && $_smarty_tpl->tpl_vars['genForm']->value['shape'] == "rhombus") {?>selected<?php }?>>romb</option>
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
           <?php if ((count($_smarty_tpl->tpl_vars['messages']->value) > 0)) {?>
               <ul>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </ul>
           <?php } else { ?> 
               <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                   <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

               <?php }?>

           <?php }?>
           </div>  
    </section>     
                                

</div>










<?php
}
}
/* {/block 'body'} */
}
