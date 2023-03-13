<?php
/* Smarty version 4.2.1, created on 2023-03-13 13:14:17
  from 'E:\XAMPP\htdocs\php_01_generator\app\genView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640f1399787342_98248869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d384e50321a9bd571074555afd5aa2baaaa6202' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\app\\genView.tpl',
      1 => 1678706834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640f1399787342_98248869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_339422303640f1399779177_17429647', 'body');
?>



                                                <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['rootPath']->value)."/templates/main.tpl");
}
/* {block 'body'} */
class Block_339422303640f1399779177_17429647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_339422303640f1399779177_17429647',
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
                                <option value =	"square"        <?php if ((isset($_smarty_tpl->tpl_vars['genForm']->value['shape'])) && $_smarty_tpl->tpl_vars['genForm']->value['shape'] == "square") {?>"selected"<?php }?>>kwadrat</option>
                                <option value =	"stairs"        <?php if ((isset($_smarty_tpl->tpl_vars['genForm']->value['shape'])) && $_smarty_tpl->tpl_vars['genForm']->value['shape'] == "stairs") {?>"selected"<?php }?>	>schodki</option>
                                <option value =	"triangle"      <?php if ((isset($_smarty_tpl->tpl_vars['genForm']->value['shape'])) && $_smarty_tpl->tpl_vars['genForm']->value['shape'] == "triangle") {?>"selected"<?php }?>>trójkąt</option>
                                <option value =	"rotatedSquare" <?php if ((isset($_smarty_tpl->tpl_vars['genForm']->value['shape'])) && $_smarty_tpl->tpl_vars['genForm']->value['shape'] == "rotatedSquare") {?>"selected"<?php }?>>kwadrate obrot</option>
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
