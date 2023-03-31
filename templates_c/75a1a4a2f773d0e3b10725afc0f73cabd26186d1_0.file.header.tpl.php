<?php
/* Smarty version 4.2.1, created on 2023-03-31 10:00:00
  from 'E:\XAMPP\htdocs\php_01_generator\app\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642693006946d9_41835280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a1a4a2f773d0e3b10725afc0f73cabd26186d1' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\app\\views\\templates\\header.tpl',
      1 => 1679841669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642693006946d9_41835280 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
        <header id="header">
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->actionRoot;?>
mainMenu" class="logo"><strong>Moja</strong> <span>stronka :></span></a>
                <nav>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->actionRoot;?>
logout">Wyloguj</a>
                </nav>
        </header>  
<?php }
}
