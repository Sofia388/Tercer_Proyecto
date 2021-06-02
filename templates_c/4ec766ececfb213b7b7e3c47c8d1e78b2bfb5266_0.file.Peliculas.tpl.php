<?php
/* Smarty version 3.1.38, created on 2021-04-07 16:25:48
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Peliculas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_606dc0ecf147f5_34949781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ec766ececfb213b7b7e3c47c8d1e78b2bfb5266' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Peliculas.tpl',
      1 => 1617805365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_606dc0ecf147f5_34949781 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenidos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Arte">Arte</a></li>
        <li><a href="?controller=User&method=Juegos">Juegos</a></li>
        <li><a href="?controller=User&method=Libros">Libros</a></li>
        <li><a href="?controller=User&method=Musica">Música</a></li>
        <li><a href="?controller=User&method=Anterior">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

    <h1>Peliculas</h1>
    
    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
