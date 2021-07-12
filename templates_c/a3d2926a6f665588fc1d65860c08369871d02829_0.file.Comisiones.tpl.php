<?php
/* Smarty version 3.1.38, created on 2021-07-12 21:04:32
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasJefe\Comisiones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60ecae605ef4e8_50975030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3d2926a6f665588fc1d65860c08369871d02829' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasJefe\\Comisiones.tpl',
      1 => 1626123711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60ecae605ef4e8_50975030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Comisiones</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?controller=User&method=CrearComision" class="col s12  center aling">
    <h5>Crear Codigo Personal</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsComi" type="text" class="validate" name="codUsComi" required=""/>
          <label for="codUsComi">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valcomi" type="text" name="valcomi" class="validate" requiered=""/>
     <label for="valcomi">Valor de la Comision</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
