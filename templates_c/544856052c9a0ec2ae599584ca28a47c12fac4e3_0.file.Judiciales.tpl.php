<?php
/* Smarty version 3.1.38, created on 2021-07-13 19:28:44
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasJefe\Judiciales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60ede96c35e428_91427008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '544856052c9a0ec2ae599584ca28a47c12fac4e3' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasJefe\\Judiciales.tpl',
      1 => 1626204519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60ede96c35e428_91427008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Judiciales</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?controller=User&method=CrearJudiciales" class="col s12  center aling">
    <h5>Pagar los Judiciales</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsJud" type="text" class="validate" name="codUsJud" required=""/>
          <label for="codUsJud">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valJud" type="text" name="valJud" class="validate" requiered=""/>
     <label for="valJud">Valor de los Judiciales</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
