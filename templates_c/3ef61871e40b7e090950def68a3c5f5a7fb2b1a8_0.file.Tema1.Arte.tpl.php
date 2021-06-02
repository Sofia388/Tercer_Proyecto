<?php
/* Smarty version 3.1.38, created on 2021-05-20 22:27:04
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema1.Arte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6e238263039_42634495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef61871e40b7e090950def68a3c5f5a7fb2b1a8' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema1.Arte.tpl',
      1 => 1621549588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a6e238263039_42634495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h2>Las pinturas mas Caras</h2>

  <table border=1>
        <tr>
          <td><strong>Titulo</strong></td>
          <td><strong>Contenido</strong></td>
          <td><strong>Foto</strong></td>
        </tr>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Contido']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
        
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['C']->value['Titulo'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['C']->value['Contenido'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['C']->value['Foto'];?>
</td>
        </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;

<?php }
}
