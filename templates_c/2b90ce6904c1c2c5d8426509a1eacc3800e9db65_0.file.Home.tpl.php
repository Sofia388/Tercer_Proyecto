<?php
/* Smarty version 3.1.38, created on 2021-06-23 19:40:18
  from 'C:\wamp64\www\Tercer_Proyecto\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60d38e224021d7_94636262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b90ce6904c1c2c5d8426509a1eacc3800e9db65' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\Home.tpl',
      1 => 1624468707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
    'file:Cabeceras/Inicio.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60d38e224021d7_94636262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ((isset($_smarty_tpl->tpl_vars['pagina']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['pagina']->value == "Login") {?>
      <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>



<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
