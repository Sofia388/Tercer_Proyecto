<?php
/* Smarty version 3.1.38, created on 2021-04-07 16:25:42
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_606dc0e647c169_79445794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fbd2912b8ba0014a8d0f1a840c85412721dbd2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Libros.tpl',
      1 => 1617805304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_606dc0e647c169_79445794 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenidos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Arte">Arte</a></li>
        <li><a href="?controller=User&method=Juegos">Juegos</a></li>
        <li><a href="?controller=User&method=Musica">Música</a></li>
        <li><a href="?controller=User&method=Peliculas">Peliculas/Series</a></li>
        <li><a href="?controller=User&method=Anterior">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

    <h1>  Libros</h1>
    

    <img src="https://trucoslondres.com/wp-content/uploads/2017/04/musssss.jpg" aling="center">


    
    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;

<?php }
}
