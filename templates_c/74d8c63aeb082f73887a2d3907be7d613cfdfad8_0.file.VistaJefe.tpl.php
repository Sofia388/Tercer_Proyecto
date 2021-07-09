<?php
/* Smarty version 3.1.38, created on 2021-07-09 00:09:58
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistaJefe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60e793d6966a25_10212419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74d8c63aeb082f73887a2d3907be7d613cfdfad8' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistaJefe.tpl',
      1 => 1625788075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e793d6966a25_10212419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenido Jefe</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

    <form method="post" action="?controller=User&method=CodigoNew" class="col s12  center aling">
        <h5>Crear Codigo</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>

    <form method="post" action="?controller=User&method=Sueldo" class="col s12  center aling">
        <h5>Pago de Sueldo</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
