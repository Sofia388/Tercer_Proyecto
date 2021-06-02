<?php
/* Smarty version 3.1.38, created on 2021-05-18 00:53:04
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Categorias\Juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a30ff00b0744_94133410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4109807b93f87317fe8bc6c6c1ac88b81048f599' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Categorias\\Juegos.tpl',
      1 => 1621299178,
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
function content_60a30ff00b0744_94133410 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Juegos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php echo $_smarty_tpl->tpl_vars['Tema']->value[0]['Nombre'];?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tema']->value, 'T');
$_smarty_tpl->tpl_vars['T']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['T']->value) {
$_smarty_tpl->tpl_vars['T']->do_else = false;
?>
        <li><a href="?controller=User&method=<?php echo $_smarty_tpl->tpl_vars['T']->value['Nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['T']->value['Nombre'];?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
