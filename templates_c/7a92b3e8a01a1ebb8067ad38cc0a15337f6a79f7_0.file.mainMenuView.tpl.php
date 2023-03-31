<?php
/* Smarty version 4.2.1, created on 2023-03-31 09:59:30
  from 'E:\XAMPP\htdocs\php_01_generator\app\views\mainMenuView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642692e24b0975_12073212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a92b3e8a01a1ebb8067ad38cc0a15337f6a79f7' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\app\\views\\mainMenuView.tpl',
      1 => 1680249569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642692e24b0975_12073212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1795006048642692e24a5a65_40368360', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'body'} */
class Block_1795006048642692e24a5a65_40368360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1795006048642692e24a5a65_40368360',
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
