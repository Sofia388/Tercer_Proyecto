<?php
/* Smarty version 3.1.38, created on 2021-05-17 23:51:09
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Tabla.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3016d380969_15329012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e90474eb33436a9deb4ed802067ee7891ff3534' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Tabla.php',
      1 => 1621289591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3016d380969_15329012 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

    ';?>
$conexion=mysqli_connect('localhost','3307','root','root');

<?php echo '?>';?>



<!DOCTYPE html>
<html>
<header>

</header>
<body>

<table>
    <tr>
        <td>ID</td>
        <td>Contenido</td>
        <td>Imagen</td>
    </tr>

    <?php echo '<?php
    ';?>
$sql="SELECT * FROM blogtema";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result))
    {

    <?php echo '?>';?>


    <tr>
        <td> <?php echo '<?php ';?>
echo $mostrar['idBlogTema'] <?php echo '?>';?>
 </td>
        <td> <?php echo '<?php ';?>
echo $mostrar['Descripcion'] <?php echo '?>';?>
 </td>
        <td> <?php echo '<?php ';?>
echo $mostrar['Nombre'] <?php echo '?>';?>
 </td>

    </tr>
    <?php echo '<?php
        ';?>
}
    <?php echo '?>';?>





</table>

</body>
</html><?php }
}
