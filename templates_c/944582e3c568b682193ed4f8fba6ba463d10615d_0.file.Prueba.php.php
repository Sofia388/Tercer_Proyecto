<?php
/* Smarty version 3.1.38, created on 2021-05-10 01:10:12
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Prueba.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609887f4bbb2d5_90669601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '944582e3c568b682193ed4f8fba6ba463d10615d' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Prueba.php',
      1 => 1620609006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_609887f4bbb2d5_90669601 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
    ';?>
$servidor="localhost";
    $pass="root";
    $user="root";
    $BaseDatos="blogtablas";
    $port = 3307;
$conexion= new mysqli($servidor,$pass,$user,$BaseDatos,$port);

$usuarios ="SELECT * FROM blogusuario";
$resUsuarios=$conexion->query($usuarios);
<?php echo '?>';?>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table>
    <th>Correo</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Contraseña</th>

    <?php echo '<?php
    ';?>
while($Registro =$resUsuarios->fetch_array(MYSQLI_BOTH))

    {
        echo '<tr>
        <td> '.$Registro['Correo'].'</td>
        <td> '.$Registro['Nombre'].'</td>
        <td> '.$Registro['Apellido'].'</td>
        <td> '.$Registro['Pass'].'</td>
        <tr>';
    }
   <?php echo '?>';?>

</table>



<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
