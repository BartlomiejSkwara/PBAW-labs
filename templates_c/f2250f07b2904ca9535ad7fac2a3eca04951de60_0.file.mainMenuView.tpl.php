<?php
/* Smarty version 4.2.1, created on 2023-03-26 19:14:07
  from 'E:\XAMPP\htdocs\php_01_generator\app\mainMenu\mainMenuView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64207d5f95c965_14629375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2250f07b2904ca9535ad7fac2a3eca04951de60' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\app\\mainMenu\\mainMenuView.tpl',
      1 => 1679846565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64207d5f95c965_14629375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29701860364207d5f954122_04560615', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['conf']->value->rootPath)."/templates/main.tpl");
}
/* {block 'body'} */
class Block_29701860364207d5f954122_04560615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_29701860364207d5f954122_04560615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Banner -->
<!-- Note: The "styleN" class below should match that of the header element. -->
        <section id="banner" class="style2">
                <div class="inner">
                        <span class="image">
                                <img src="images/pic07.jpg" alt="" />
                        </span>
                        <header class="major">
                                <h1>Witam :></h1>
                        </header>
                        <div class="content">
                                <p>Lorem ipsum dolor sit amet nullam consequat<br />
                                sed veroeros. tempus adipiscing nulla.</p>
                        </div>
                </div>
        </section>

<!-- Main -->
        <div id="main">

                <!-- Jeszcze idk czy go użyje :> -->

                <!-- Linki i inny kontenet :> -->
                        
                        <section id="two" class="spotlights">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
                     
                                    <section>
                                        
                                            <a href="generic.html" class="image">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->appURL;?>
\images\pic08.jpg" alt="amongu" data-position="center center" />
                                            </a>
                                            <div class="content">
                                                    <div class="inner">
                                                            <header class="major">
                                                                    <h3><?php echo $_smarty_tpl->tpl_vars['element']->value->title;?>
</h3>
                                                            </header>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['element']->value->description;?>
</p>
                                                            <ul class="actions">
                                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->actionURL;
echo $_smarty_tpl->tpl_vars['element']->value->action;?>
" class="button">Learn more</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </section>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            

                                
                                
                        </section>

                <!-- Jeszcze idk czy go użyje :> -->

        </div>











<?php
}
}
/* {/block 'body'} */
}
