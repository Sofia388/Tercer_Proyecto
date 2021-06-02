<?php
/* Smarty version 3.1.38, created on 2021-03-23 15:40:51
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Inicial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6059fdf34480b0_61989519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2287b920ba96f5b50851c68f0ca5e9861fe891cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Inicial.tpl',
      1 => 1616510401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Bienvenida.tpl' => 1,
    'file:Login.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6059fdf34480b0_61989519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_smarty_tpl->tpl_vars['pagina']->value))) {?>
        <li><a href="/Cabeceras/Inicio.tpl">Regresar</a></li>
 
    <?php if ($_smarty_tpl->tpl_vars['pagina']->value == "Bienvenida") {?>
      <?php $_smarty_tpl->_subTemplateRender("file:Bienvenida.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:Login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>



<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
