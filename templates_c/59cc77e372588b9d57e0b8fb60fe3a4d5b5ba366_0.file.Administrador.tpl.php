<?php
/* Smarty version 3.1.38, created on 2021-07-08 20:42:57
  from 'C:\wamp64\www\Tercer_Proyecto\View\Administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60e76351cd6337_03502328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59cc77e372588b9d57e0b8fb60fe3a4d5b5ba366' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\Administrador.tpl',
      1 => 1625615563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e76351cd6337_03502328 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Administrador</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>

      </ul>
    </div>
  </nav>



<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
