<?php
/* Smarty version 4.2.1, created on 2023-03-26 19:14:03
  from 'E:\XAMPP\htdocs\php_01_generator\app\security\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64207d5bae2046_90457211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77cce4e59cba0df4b83eba20b5681e03c886f987' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\app\\security\\loginView.tpl',
      1 => 1679823659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64207d5bae2046_90457211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39254578864207d5bad67e5_17941887', 'body');
?>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['conf']->value->rootPath)."/templates/main.tpl");
}
/* {block 'body'} */
class Block_39254578864207d5bad67e5_17941887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_39254578864207d5bad67e5_17941887',
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


                                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->appRoot;?>
/app/security/login.php">

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
                                    <?php if ((count($_smarty_tpl->tpl_vars['messages']->value) > 0)) {?>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
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
