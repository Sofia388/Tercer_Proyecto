<?php
/* Smarty version 3.1.38, created on 2021-07-07 22:22:59
  from 'C:\wamp64\www\Tercer_Proyecto\View\SalaVentas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60e629438f24c0_81900093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c490726540e69bcef1e55218f7beaa8dc6418f37' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\SalaVentas.tpl',
      1 => 1625696575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e629438f24c0_81900093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Sala de Ventas</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=IrLogin">Login</a></li>
      </ul>
    </div>
  </nav>

  



<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
