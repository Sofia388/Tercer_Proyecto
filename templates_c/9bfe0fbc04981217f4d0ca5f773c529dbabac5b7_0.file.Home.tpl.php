<?php
/* Smarty version 3.1.38, created on 2021-06-03 17:40:21
  from 'C:\MAMP\htdocs\Tercer_Proyecto\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60b91405aee2a4_29798181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bfe0fbc04981217f4d0ca5f773c529dbabac5b7' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Tercer_Proyecto\\View\\Home.tpl',
      1 => 1620081707,
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
function content_60b91405aee2a4_29798181 (Smarty_Internal_Template $_smarty_tpl) {
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
