<?php
/* Smarty version 3.1.38, created on 2021-07-12 20:51:36
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasAdmon\Beneficio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60ecab58b87cf5_86667038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1b2f9f03db0f3a0cfcdfea94c3ef0833eb0df8' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasAdmon\\Beneficio.tpl',
      1 => 1626123032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60ecab58b87cf5_86667038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Beneficio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoAdmin">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
