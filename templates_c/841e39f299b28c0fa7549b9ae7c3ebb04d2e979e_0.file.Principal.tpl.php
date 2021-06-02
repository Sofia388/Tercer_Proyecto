<?php
/* Smarty version 3.1.38, created on 2021-03-02 14:29:08
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603e3da472ce73_06987045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '841e39f299b28c0fa7549b9ae7c3ebb04d2e979e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Principal.tpl',
      1 => 1614691743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
  ),
),false)) {
function content_603e3da472ce73_06987045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <h1 align="center">INGRESO</h1>
</div>


    <div class="row">
    <form  method="post" action="?controller=User&method=BuscarUsuario" class="col s12">

    <div class="row" >
        <div class="input-field col s6 s2 row offset-s2 center aling" >
          <input id="email" type="email" class="validate" required="" name="email"/>
          <label for="email">Email</label>
        </div>
    </div>

      <div class="row" class="center-align">
         <div class="input-field col s6 row offset-s2 center aling">
             <input id="password" type="password" class="validate" required="" name="pass"/>
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
