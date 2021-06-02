<?php
/* Smarty version 3.1.38, created on 2021-03-23 15:57:03
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Cerrar.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_605a01bf30ee30_23699634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '849d8606e1a6507e055613fedb13bc5aeb077a76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Cerrar.php',
      1 => 1616511354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605a01bf30ee30_23699634 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php ';?>
session_start();
session_destroy();

$SESSION = array();

header('Location: Inicio.tpl');


<?php echo '?>';
}
}
