<?php
/* Smarty version 3.1.38, created on 2021-07-12 01:24:48
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasJefe\CrearCodigo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60eb99e0afd478_71583982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd62b1c607942390f60fe47cff357cfa1dbcf96a' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasJefe\\CrearCodigo.tpl',
      1 => 1626052869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60eb99e0afd478_71583982 (Smarty_Internal_Template $_smarty_tpl) {
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

  
  <form method="post" action="?controller=User&method=CrearCodigo" class="col s12  center aling">
    <h5>Crear Codigo Personal</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="correoUs" type="email" class="validate" name="correoUs" required=""/>
          <label for="correoUs">Correo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="codPer" name="codPer" class="validate" requiered=""/>
     <label for="codPer">Codigo Personal</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
