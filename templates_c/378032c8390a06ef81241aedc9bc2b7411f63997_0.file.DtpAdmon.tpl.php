<?php
/* Smarty version 3.1.38, created on 2021-07-08 23:15:53
  from 'C:\wamp64\www\Tercer_Proyecto\View\DtpAdmon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60e787292967a8_92957461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '378032c8390a06ef81241aedc9bc2b7411f63997' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\DtpAdmon.tpl',
      1 => 1625786137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e787292967a8_92957461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Dpto. de Administracion</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=Regreso">Regresar</a></li>
      </ul>
    </div>
  </nav>

   <form method="post" action="?controller=User&method=Sueldo" class="col s12  center aling">
    <h5>Sueldo</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}