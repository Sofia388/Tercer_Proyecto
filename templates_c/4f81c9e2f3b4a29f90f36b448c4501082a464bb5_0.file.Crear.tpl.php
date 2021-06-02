<?php
/* Smarty version 3.1.38, created on 2021-05-08 03:05:30
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Crear.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6095fffa447762_08794963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f81c9e2f3b4a29f90f36b448c4501082a464bb5' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Crear.tpl',
      1 => 1620443127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6095fffa447762_08794963 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Crear</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=DarBaja">Eliminar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

<form method="post" action="?controller=AdminPost&method=CrearCategoria" class="col s12 center aling">
    <h5> Crear categoria</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="tema" type="text" class="validate" name="tema" required=""/>
          <label for="tema">Nombre</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="des" name="des" class="validate" requiered=""/>
     <label for="des">Descripcion</label>
    </div><br><br><br><br>


    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  <form method="post" action="?controller=AdminPost&method=CrearTema" class="col s12 center aling">
    <h5>Crear Tema</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="idnomnumcategoriabre" type="text" class="validate" name="numcategoria" required=""/>
          <label for="numcategoria">Numero de ID</label>
        </div>

        <div class="input-field col s6 s2 row offset-s2">
          <input id="nombre" type="text" class="validate" name="nombre" required=""/>
          <label for="nombre">Nombre</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
    <input id="desc" name="desc" class="validate" requiered=""/>
     <label for="desc">Descripcion</label>
    </div><br><br><br><br>


    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
