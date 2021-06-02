<?php
/* Smarty version 3.1.38, created on 2021-04-28 17:07:00
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60897a149e8c99_00535729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baecad84b8edfb53d519d565fed04ac2b6126d9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Administrador.tpl',
      1 => 1619622400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60897a149e8c99_00535729 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Administrador</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
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
    <textarea id="des" name="des" class="validate" requiered=""></textarea>
     <label for="des">Descripcion</label>
    </div><br><br><br><br>


    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>


  <form method="post" action="?controller=AdminPost&method=CrearTema" class="col s12 center aling">
    <h5> Crear Tema</h5>

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
    <textarea id="desc" name="desc" class="validate" requiered=""></textarea>
     <label for="desc">Descripcion</label>
    </div><br><br><br><br>


    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>



  <form method="post" action="#" class="col s12 center aling">
  <h5>Dar baja al usuario</h5>
    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="UserBaja" type="text" class="validate" name="UserBaja" required=""/>
          <label for="UserBaja">Nombre</label>
        </div>
    </div >


    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

    <form method="post" action="?controller=AdminPost&method=Delete" class="col s12  center aling">
        <h5>Dar de baja una Categoria</h5>
            <div class="row">
             <div class="input-field col s6 s2 row offset-s2">
                      <input id="NombreCategoria" type="text" class="validate" name="NombreCategoria" required=""/>
                     <label for="NombreCategoria">Nombre</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
