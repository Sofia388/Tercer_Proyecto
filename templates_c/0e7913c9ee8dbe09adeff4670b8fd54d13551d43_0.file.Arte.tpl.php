<?php
/* Smarty version 3.1.38, created on 2021-04-13 15:59:43
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Arte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6075a3cf2d8046_71084389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e7913c9ee8dbe09adeff4670b8fd54d13551d43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Arte.tpl',
      1 => 1618322380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6075a3cf2d8046_71084389 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Arte</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Juegos">Juegos</a></li>
        <li><a href="?controller=User&method=Libros">Libros</a></li>
        <li><a href="?controller=User&method=Musica">Música</a></li>
        <li><a href="?controller=User&method=Peliculas">Peliculas/Series</a></li>
        <li><a href="?controller=User&method=Anterior">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>




    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Tema 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Tema 2</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Tema 3</a></li>
        <li class="tab col s3"><a href="#test4">Tema 4</a></li>
      </ul>
    </div>
  </div>



  <div class="carousel">
    <a class="carousel-item" href="#"><img src="http://3.bp.blogspot.com/-LJ_NjVDSbdg/UWxfJ1lDLaI/AAAAAAAAAN8/cB1RVaQMrDA/s1600/noche+estrellada.jpg"></a>
    <a class="carousel-item" href="#"><img src="http://www.theartwolf.com/articles/images/munch-scream-auction.jpg"></a>
    <a class="carousel-item" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Leonardo_da_Vinci_or_Boltraffio_%28attrib%29_Salvator_Mundi_circa_1500.jpg/180px-Leonardo_da_Vinci_or_Boltraffio_%28attrib%29_Salvator_Mundi_circa_1500.jpg"></a>
    <a class="carousel-item" href="#"><img src="https://iblismagazine.club/wp-content/uploads/2020/02/pintura-600x450.jpg"></a>
    <a class="carousel-item" href="#"><img src="https://cdni.rt.com/actualidad/public_images/2015.04/article/5528eb1dc461888f128b45a1.jpg"></a>
  </div>

    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
