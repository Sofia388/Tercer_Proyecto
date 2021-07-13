<?php
/* Smarty version 3.1.38, created on 2021-07-13 19:32:50
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasAdmon\Judiciales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60edea62caa108_46351283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8c1d6cbe683e58b87b231355fe32a0914d72493' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasAdmon\\Judiciales.tpl',
      1 => 1626204574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60edea62caa108_46351283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Judiciales</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoAdmin">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
