<?php
/* Smarty version 3.1.38, created on 2021-05-10 22:03:09
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Bienvenida.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6099ad9d048142_61395720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '300c87fef1ac5965c8400382b73cac05c8322ced' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Bienvenida.tpl',
      1 => 1620684181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6099ad9d048142_61395720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenidos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Arte">Arte</a></li>
        <li><a href="?controller=User&method=Juegos">Juegos</a></li>
        <li><a href="?controller=User&method=Libros">Libros</a></li>
        <li><a href="?controller=User&method=Musica">Música</a></li>
        <li><a href="?controller=User&method=Peliculas">Peliculas/Series</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>


      <table>
<tr>
  <td><strong>Categoria</strong></td>
  <td><strong>Tema</strong></td>
</tr>

<tr>
  <td>Arte</td>
  <td>Las Pinturas mas Caras</td>
</tr>

<tr>
  <td>Arte</td>
  <td>Las Pinturas mas Famosas</td>
</tr>

<tr>
  <td>Arte</td>
  <td>El Arte mas extraño</td>
</tr>

</table>

<br><br><br>

      <table>
<tr>
  <td><strong>Categoria</strong></td>
  <td><strong>Tema</strong></td>
</tr>

<tr>
  <td>Juegos</td>
  <td>Juegos mas famosos</td>
</tr>

<tr>
  <td>Juegos</td>
  <td>Juegos de terror</td>
</tr>

<tr>
  <td>Juegos</td>
  <td>Juegos de accion</td>
</tr>

</table>

<br><br><br>

      <table>
<tr>
  <td><strong>Categoria</strong></td>
  <td><strong>Tema</strong></td>
</tr>

<tr>
  <td>Libros</td>
  <td>Libros mas leidos del Mundo</td>
</tr>

<tr>
  <td>Libros</td>
  <td>Los mejores libros para Jovenes</td>
</tr>

<tr>
  <td>Libros</td>
  <td>Los libros de mas importantes de la historia</td>
</tr>

</table>

<br><br><br>

      <table>
<tr>
  <td><strong>Categoria</strong></td>
  <td><strong>Tema</strong></td>
</tr>

<tr>
  <td>Musica</td>
  <td>Los discos mas vendidos</td>
</tr>

<tr>
  <td>Musica</td>
  <td>Las canciones con mas vistas en YouTube</td>
</tr>

<tr>
  <td>Musica</td>
  <td>Artistas que solo tuvieron un exito</td>
</tr>

</table>

<br><br><br>

      <table>
<tr>
  <td><strong>Categoria</strong></td>
  <td><strong>Tema</strong></td>
</tr>

<tr>
  <td>Peliculas/Series</td>
  <td>Las peliculas mas Taquilleras</td>
</tr>

<tr>
  <td>Peliculas/Series</td>
  <td>Las Peliculas que se estrenana en el 2021</td>
</tr>

<tr>
  <td>Peliculas/Series</td>
  <td>Las series mas vistas</td>
</tr>

</table>




<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
