<?php
/* Smarty version 3.1.38, created on 2021-07-09 00:10:55
  from 'C:\wamp64\www\Tercer_Proyecto\View\SueldoVista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60e7940f327e57_61569684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53e0938a36d30b8376a67d10448182ff02e01b54' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\SueldoVista.tpl',
      1 => 1625789433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e7940f327e57_61569684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Sueldos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

    <form method="post" action="?controller=User&method=Pagosueldo" class="col s12  center aling">
    <h5>Subir el Sueldo de los Empleados de Administracion</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codigoUser" type="text" class="validate" name="codigoUser" required=""/>
          <label for="codigoUser">Codigo del Usuario</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="fechapago" type="data" class="validate" name="fechapago" required=""/>
          <label for="fechapago">Fecha del Pago</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="horapago" type="text" class="validate" name="horapago" required=""/>
          <label for="horapago">Hora del Pago</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="nocheque" type="text" class="validate" name="nocheque" required=""/>
          <label for="nocheque">Número del Cheque</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="valcheque" type="text" class="validate" name="valcheque" required=""/>
          <label for="valcheque">Valor del Cheque</label>
        </div>
    </div>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
