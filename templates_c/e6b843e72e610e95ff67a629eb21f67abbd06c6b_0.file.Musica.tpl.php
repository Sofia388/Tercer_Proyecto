<?php
/* Smarty version 3.1.38, created on 2021-04-13 16:25:26
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Categorias\Musica.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6075a9d6607120_44084084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b843e72e610e95ff67a629eb21f67abbd06c6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Categorias\\Musica.tpl',
      1 => 1617805370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6075a9d6607120_44084084 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenidos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Arte">Arte</a></li>
        <li><a href="?controller=User&method=Juegos">Juegos</a></li>
        <li><a href="?controller=User&method=Libros">Libros</a></li>
        <li><a href="?controller=User&method=Peliculas">Peliculas/Series</a></li>
        <li><a href="?controller=User&method=Anterior">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

    <h1>Musica</h1>
    
    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
