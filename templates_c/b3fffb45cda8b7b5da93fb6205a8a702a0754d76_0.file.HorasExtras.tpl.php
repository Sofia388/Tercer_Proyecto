<?php
/* Smarty version 3.1.38, created on 2021-07-12 21:15:27
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasJefe\HorasExtras.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60ecb0ef7248e3_97564649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fffb45cda8b7b5da93fb6205a8a702a0754d76' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasJefe\\HorasExtras.tpl',
      1 => 1626124464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60ecb0ef7248e3_97564649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Horas Extras</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?controller=User&method=CrearHorasExtras" class="col s12  center aling">
    <h5>Pago de las Horas Extras</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsHrs" type="text" class="validate" name="codUsHrs" required=""/>
          <label for="codUsHrs">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valHrs" type="text" name="valHrs" class="validate" requiered=""/>
     <label for="valHrs">Valor del Horas Extras</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
