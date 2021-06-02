<?php
/* Smarty version 3.1.38, created on 2021-04-21 16:30:48
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Categorias\Juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60803718b89d75_63145166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2438844a3958256fd080819ea1f2685e2950245d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Categorias\\Juegos.tpl',
      1 => 1618446306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60803718b89d75_63145166 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Juegos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Arte">Arte</a></li>
        <li><a href="?controller=User&method=Libros">Libros</a></li>
        <li><a href="?controller=User&method=Musica">Música</a></li>
        <li><a href="?controller=User&method=Peliculas">Peliculas/Series</a></li>
        <li><a href="?controller=User&method=Anterior">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

        <nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="?controller=Temas&method=Juegos_Temas1" class="breadcrumb">Primer Tema</a>
        <a href="?controller=Temas&method=Juegos_Temas2" class="breadcrumb">Segundo Tema</a>
        <a href="?controller=Temas&method=Juegos_Temas3" class="breadcrumb">Tercer Tema</a>
      </div>
    </div>
  </nav>  
    
    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
