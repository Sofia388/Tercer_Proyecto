<?php
/* Smarty version 3.1.38, created on 2021-05-10 01:39:10
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Categorias\Juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60988ebebbb9b7_26672787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4109807b93f87317fe8bc6c6c1ac88b81048f599' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Categorias\\Juegos.tpl',
      1 => 1620610720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Temas/Tema1.Juegos.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60988ebebbb9b7_26672787 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a href="#" class="breadcrumb">Primer Tema</a>
        <a href="?controller=Temas&method=Juegos_Temas2" class="breadcrumb">Segundo Tema</a>
        <a href="?controller=Temas&method=Juegos_Temas3" class="breadcrumb">Tercer Tema</a>
      </div>
    </div>
  </nav>  
    
     <?php $_smarty_tpl->_subTemplateRender("file:Temas/Tema1.Juegos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
