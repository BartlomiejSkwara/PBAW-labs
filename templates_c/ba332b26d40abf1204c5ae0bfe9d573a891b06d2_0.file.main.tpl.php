<?php
/* Smarty version 4.2.1, created on 2023-03-31 10:00:00
  from 'E:\XAMPP\htdocs\php_01_generator\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6426930068c5d5_25759821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba332b26d40abf1204c5ae0bfe9d573a891b06d2' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\php_01_generator\\app\\views\\templates\\main.tpl',
      1 => 1680249599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6426930068c5d5_25759821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css" />

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->appURL;?>
/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->appURL;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->appURL;?>
/assets/css/noscript.css" /></noscript>
	
        
        
    <meta charset="utf-8" />
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Bazowy title :>" ?? null : $tmp);?>
</title>
</head>
<body>

<main id = "wrapper">
    <?php if ((($tmp = $_smarty_tpl->tpl_vars['onlyBody']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp) == false) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15519465296426930068af22_27959845', 'body');
?>

    <?php if ((($tmp = $_smarty_tpl->tpl_vars['onlyBody']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp) == false) {
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

</main>





</body>
</html>


<?php }
/* {block 'body'} */
class Block_15519465296426930068af22_27959845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15519465296426930068af22_27959845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PUSTKA :<<<<?php
}
}
/* {/block 'body'} */
}
