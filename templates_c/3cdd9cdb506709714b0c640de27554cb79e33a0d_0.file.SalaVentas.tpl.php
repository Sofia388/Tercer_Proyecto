<?php
/* Smarty version 3.1.38, created on 2021-07-12 01:45:15
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasVentas\SalaVentas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60eb9eab702614_69208084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cdd9cdb506709714b0c640de27554cb79e33a0d' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasVentas\\SalaVentas.tpl',
      1 => 1626054265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60eb9eab702614_69208084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Sala de Ventas</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoVentas">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

  <form method="post" action="?controller=User&method=VerSueldoVen" class="col s12  center aling">
    <h5>Ver Sueldo</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

  <form method="post" action="?controller=User&method=VerBoniVen" class="col s12  center aling">
    <h5>Ver Bonificacion</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
