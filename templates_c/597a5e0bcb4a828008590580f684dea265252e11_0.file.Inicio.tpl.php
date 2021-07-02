<?php
/* Smarty version 3.1.38, created on 2021-07-02 00:44:35
  from 'C:\wamp64\www\Tercer_Proyecto\View\Cabeceras\Inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60de6173102b40_29496754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597a5e0bcb4a828008590580f684dea265252e11' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\Cabeceras\\Inicio.tpl',
      1 => 1624489997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60de6173102b40_29496754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>

    <div class="nav-wrapper">
      <a href="#"  class="brand-logo center">Paguina para el Pago</a>
    </div>
  </nav>


    <div class="row">
    <form  method="post" action="?controller=Usr&method=UsuarioExistente" class="col s12">

    <div>
    <h1 align="center">Login</h1>
    </div>

      <div class="row" class="center-align">
         <div class="input-field col s5 s3 row offset-s2 center aling">
             <input id="NombreUser" type="text" class="validate" required="" name="NombreUser"/>
             <label for="NombreUser">Nombre de usuario</label>
            </div>
      </div>

      <div class="row" class="center-align">
         <div class="input-field col s5 s3 row offset-s2 center aling">
             <input id="password" type="password" class="validate" required="" name="password"/>
             <label for="password">Contraseña</label>
            </div>
      </div>


      <div class="row" class="center-align">
            <div class="input-field col s5 s3 row offset-s2 center aling">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
