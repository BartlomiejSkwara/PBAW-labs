<?php
/* Smarty version 4.2.1, created on 2023-04-15 13:18:45
  from 'E:\XAMPP\htdocs\php_01_generator\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_643a88153dc191_89945061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a72b4aad47281f96b46e6915fca8b7ff59394c87' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\app\\views\\loginView.tpl',
      1 => 1681315880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643a88153dc191_89945061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177922102643a88153b3262_53899161', 'body');
?>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'body'} */
class Block_177922102643a88153b3262_53899161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_177922102643a88153b3262_53899161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
	
    <div class="is-preload">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Menu -->
            <nav id="menu" class="is-menu-visible">
                <div class="inner">
                <h1>Logowanie</h1>
                <hr/>

                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->actionRoot;?>
login">                                   
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
                    <?php if ((count($_smarty_tpl->tpl_vars['messages']->value->getErrors()) > 0)) {?>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                <p class="message"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
                       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    </div>  
                </section>
                </div>                              
            </nav>
        </div>

        <!-- Scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->rootPath;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->rootPath;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->rootPath;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->rootPath;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->rootPath;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->rootPath;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->rootPath;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
    </div>  

 
    
<?php
}
}
/* {/block 'body'} */
}
