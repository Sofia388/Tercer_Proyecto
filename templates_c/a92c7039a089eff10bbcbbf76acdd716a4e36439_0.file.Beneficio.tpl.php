<?php
/* Smarty version 3.1.38, created on 2021-07-12 20:54:20
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasJefe\Beneficio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60ecabfcacfe28_93216767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a92c7039a089eff10bbcbbf76acdd716a4e36439' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasJefe\\Beneficio.tpl',
      1 => 1626123257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60ecabfcacfe28_93216767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Beneficio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?controller=User&method=CrearBeneficio" class="col s12  center aling">
    <h5>Crear Codigo Personal</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsBene" type="text" class="validate" name="codUsBene" required=""/>
          <label for="codUsBene">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valbene" type="text" name="valbene" class="validate" requiered=""/>
     <label for="valbene">Valor del Beneficio</label>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="motivo" type="text" name="motivo" class="validate" requiered=""/>
    <label for="motivo">Motivo del Beneficio</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
