<?php
/* Smarty version 3.1.38, created on 2021-07-08 21:02:58
  from 'C:\wamp64\www\Tercer_Proyecto\View\Registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60e76802817026_57508139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b16954495b8b6ba68a90a85cc70f1927af26bb99' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\Registro.tpl',
      1 => 1625778172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e76802817026_57508139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> Registro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Regreso">Regresar</a></li>
        <li><a href="?controller=User&method=IrLogin">Login</a></li>
      </ul>
    </div>
  </nav>
  
  <div>
    <h1 align="center">Registro</h1>
   </div>
      
      <div class="row">
    <form  method="post" action="?controller=User&method=GuardarUsuario" class="col s12">

      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="email" type="email" class="validate" name="email" required="">
          <label for="email">Email</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input  id="nombre" type="text" class="validate" name="nombre" required="">
          <label for="nombre">Nombre</label>
        </div>

        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="apellido" type="text" class="validate" name="apellido" required="">
          <label for="apellido">Apellido</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="Password" type="password" class="validate" name="pass" required="">
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="depto" type="text" class="validate" name="depto" required="">
          <label for="depto">Departamento</label>
          <span class="helper-text" data-error="wrong" data-success="right">Coloca 1- Sala de Ventas o 2- Administracion</span>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="cel" type="text" class="validate" name="cel" required="">
          <label for="cel">Telefono</label>
        </div>
      </div>


            <div class="row" class="center-align">
            <div class="input-field col s6 row offset-s2 center aling">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>
  </div>



  
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
