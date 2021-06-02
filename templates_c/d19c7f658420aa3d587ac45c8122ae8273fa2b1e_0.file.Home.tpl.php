<?php
/* Smarty version 3.1.38, created on 2021-03-09 15:32:36
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60478704c9dba9_10888020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd19c7f658420aa3d587ac45c8122ae8273fa2b1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Home.tpl',
      1 => 1615299125,
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
function content_60478704c9dba9_10888020 (Smarty_Internal_Template $_smarty_tpl) {
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
