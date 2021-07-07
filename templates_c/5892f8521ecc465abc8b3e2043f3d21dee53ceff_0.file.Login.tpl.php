<?php
/* Smarty version 3.1.38, created on 2021-07-07 21:52:57
  from 'C:\wamp64\www\Tercer_Proyecto\View\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60e62239182c46_40252355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5892f8521ecc465abc8b3e2043f3d21dee53ceff' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\Login.tpl',
      1 => 1625659379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
  ),
),false)) {
function content_60e62239182c46_40252355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> Inicio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Regreso">Regresar</a></li>
        <li><a href="?controller=User&method=IrRegistro">Registro</a></li>
      </ul>
    </div>
  </nav>


<div>
    <h1 align="center">Login</h1>
</div>


    <div class="row">
    <form  method="post" action="?controller=User&method=BuscarUsuario" class="col s12">

    <div class="row" >
        <div class="input-field col s6 s2 row offset-s2 center aling" >
          <input placeholder="DPI" id="DPI" type="DPI" class="validate" required="" name="DPI"/>
          <label for="DPI">Usuario</label>
        </div>
    </div>

      <div class="row" class="center-align">
         <div class="input-field col s6 row offset-s2 center aling">
             <input placeholder="Password" id="password" type="password" class="validate" required="" name="pass"/>
             <label for="password">Password</label>
            </div>
      </div>

      <div class="row" class="center-align">
            <div class="input-field col s6 row offset-s2 center aling">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>

</div><?php }
}
