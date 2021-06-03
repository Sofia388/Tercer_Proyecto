<?php
/* Smarty version 3.1.38, created on 2021-06-03 17:55:39
  from 'C:\MAMP\htdocs\Tercer_Proyecto\View\Cabeceras\Inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60b9179b117410_30959844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1628788920dc698eccd0aabc3b96575c3d403b56' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Tercer_Proyecto\\View\\Cabeceras\\Inicio.tpl',
      1 => 1622742935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60b9179b117410_30959844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>

    <div class="nav-wrapper">
      <a href="#"  class="brand-logo center">Pagina Principal</a>
    </div>
  </nav>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
