<?php
/* Smarty version 3.1.38, created on 2021-05-20 01:20:31
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a5b95f4ba0e5_30533189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c51cb314fae5a2dc7f0d835c9bf775f7c065b793' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Administrador.tpl',
      1 => 1621473628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a5b95f4ba0e5_30533189 (Smarty_Internal_Template $_smarty_tpl) {
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


  <form method="post" action="?controller=AdminPost&method=CrearCategoria" class="col s12  center aling">
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
    </div><br><br><br><br><br><br>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  <form method="post" action="?controller=AdminPost&method=CrearTema" class="col s12  center aling">
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
    </div><br><br><br><br><br><br>


    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

    <form method="post" action="?controller=AdminPost&method=Contnew" class="col s12  center aling">
    <h5>Crear Contenido</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="temsnumid" type="text" class="validate" name="temsnumid" required=""/>
          <label for="temsnumid">Numero de ID del Tema</label>
        </div>

        <div class="input-field col s6 s2 row offset-s2">
          <input id="nomtema" type="text" class="validate" name="nomtema" required=""/>
          <label for="nomtema">Nombre</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
    <input id="namcontenido" type="text" name="namcontenido" class="validate" requiered=""/>
     <label for="namcontenido">Contenido</label>
     </div>

     <div class="input-field col s6 s2 row offset-s2">
    <input id="namefoto" type="text" name="namefoto" class="validate" requiered=""/>
     <label for="namefoto">Foto</label>
    </div><br><br><br><br><br><br><br><br><br>
    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>


  <form method="post" action="?controller=AdminPost&method=BajaUsuario" class="col s12  center aling">
    <h5>Dar baja al usuario</h5>
      <div class="row">
          <div class="input-field col s6 s2 row offset-s2">
            <input id="UserBaja" type="text" class="validate" name="UserBaja" required=""/>
            <label for="UserBaja">Nombre</label>
          </div>
      </div >

          <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>




  <form method="post" action="?controller=AdminPost&method=BajaTema" class="col s12  center aling">
        <h5>Dar de baja un Tema</h5>
            <div class="row">
             <div class="input-field col s6 s2 row offset-s2">
                      <input id="BajaTema" type="text" class="validate" name="BajaTema" required=""/>
                     <label for="BajaTema">Nombre</label>
                </div>
            </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

    <form method="post" action="?controller=AdminPost&method=BajaContenido" class="col s12  center aling">
        <h5>Dar de baja al Contenido</h5>
            <div class="row">
             <div class="input-field col s6 s2 row offset-s2">
                      <input id="BajaCon" type="text" class="validate" name="BajaCon" required=""/>
                     <label for="BajaCon">Nombre</label>
                </div>
            </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>



   <form method="post" action="?controller=AdminPost&method=BajaCategoria" class="col s12  center aling">
        <h5>Dar de baja una Categoria</h5>
            <div class="row">
             <div class="input-field col s6 s2 row offset-s2">
                      <input id="BajaCategoria" type="text" class="validate" name="BajaCategoria" required=""/>
                     <label for="BajaCategoria">Nombre</label>
                </div>
            </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
