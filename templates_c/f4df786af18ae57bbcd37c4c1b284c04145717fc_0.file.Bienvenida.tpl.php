<?php
/* Smarty version 3.1.38, created on 2021-07-12 00:44:59
  from 'C:\wamp64\www\Tercer_Proyecto\View\Bienvenida.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60eb908b1b2619_99456058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4df786af18ae57bbcd37c4c1b284c04145717fc' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\Bienvenida.tpl',
      1 => 1625615369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60eb908b1b2619_99456058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenidos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Prueba</a></li>
      </ul>
    </div>
  </nav>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
