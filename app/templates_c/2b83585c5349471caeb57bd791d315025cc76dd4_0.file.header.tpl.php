<?php
/* Smarty version 4.2.1, created on 2023-03-26 17:35:12
  from 'E:\XAMPP\htdocs\php_01_generator\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642066309b2fb7_47360874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b83585c5349471caeb57bd791d315025cc76dd4' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\templates\\header.tpl',
      1 => 1679841669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642066309b2fb7_47360874 (Smarty_Internal_Template $_smarty_tpl) {
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
