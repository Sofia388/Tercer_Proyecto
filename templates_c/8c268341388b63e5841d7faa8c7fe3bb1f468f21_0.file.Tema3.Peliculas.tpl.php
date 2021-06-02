<?php
/* Smarty version 3.1.38, created on 2021-05-18 01:54:41
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema3.Peliculas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a31e61bab6e7_94939697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c268341388b63e5841d7faa8c7fe3bb1f468f21' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema3.Peliculas.tpl',
      1 => 1621302865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a31e61bab6e7_94939697 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Peliculas</a>
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
        <a href="?controller=User&method=Peliculas" class="breadcrumb">Primer Tema</a>
        <a href="?controller=Temas&method=Peliculas_Temas2" class="breadcrumb">Segundo Tema</a>
        <a href="?controller=Temas&method=Peliculas_Temas3" class="breadcrumb">Tercer Tema</a>
      </div>
    </div>
  </nav>

      <h2>Las series mas vistas</h2>

      <table>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos</strong></td>
  <td><strong>Foto</strong></td>
</tr>

<tr>
  <td>Breaking Bad</td>
  <td>Altamente aclamado por la crítica, este drama televisivo 
  <br>escrito y producido por Vince Gilligan ('Expediente X') nos 
  <br>muestra la vida de Walter White (Bryan Cranston 'Malcolm'), 
  <br>un genio en el campo...</td>
  <td><img src="Recursos/Peliculas/c.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Juego de Tronos</td>
  <td>HBO, desde la calidad que caracteriza a la cadena, nos brinda 
  <br>una vez más una magistral adaptación televisiva de la serie 
  <br>de novelas 'Canción de hielo y fuego' del escritor 
  <br>estadounidense George R...</td>
  <td><img src="Recursos/Peliculas/c1.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Peaky Blinders</td>
  <td>Peaky Blinders es un drama de BBC que narra la historia de la 
  <br>familia gitana Shelby y su banda de gángsters, un grupo de 
  <br>personas características por sus boinas con cuchillas y dueñas 
  <br>de los ...</td>
  <td><img src="Recursos/Peliculas/c2.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Love is in the air</td>
  <td>Love is in the air (Sen Çal Kapımı) es una telenovela turca 
  <br>que gira en torno a Eda, una chica con el sueño de convertirse 
  <br>en una arquitecta paisajista. Tras perder a sus padres cuando 
  <br>era muy ...</td>
  <td><img src="Recursos/Peliculas/c3.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Chernobyl</td>
  <td>El 26 de abril de 1986, una de las peores catástrofes humanas 
  <br>se cierne sobre la faz de la tierra. La planta nuclear de 
  <br>Chernobyl, que por aquel entonces pertenecía a la República 
  <br>Socialista ...</td>
  <td><img src="Recursos/Peliculas/c4.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Vikingos</td>
  <td>Este nuevo drama histórico de History Channel está centrado en 
  <br>Ragnar Lothbrok, figura mítica que aseguraba que era el 
  <br>descendiente de Odín, el dios principal de la mitología 
  <br>nórdica. En ...</td>
  <td><img src="Recursos/Peliculas/c5.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Los Soprano</td>
  <td>'Los Soprano' es un reconocidísimo drama de la HBO en el que el 
  <br>mayor capo de la mafia es un hombre de familia que no confía 
  <br>en nadie más que en su psiquiatra. Se trata de una serie que 
  <br>cuenta las ...</td>
  <td><img src="Recursos/Peliculas/c6.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Sherlock</td>
  <td>De manos de Steven Moffat ('Doctor Who', 'Jekyll') y Mark 
  <br>Gatiss ('Casi Humanos', 'Pétalo carmesí, flor blanca') para 
  <br>BBC nos llega esta versión contemporánea del detective más 
  <br>famoso de todos ...</td>
  <td><img src="Recursos/Peliculas/c7.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Hijos de la anarquía</td>
  <td>Aclamado drama muy a la americana creado por Kurt Sutter 
  <br>('The Shield'), que se colocó rápidamente en lo más alto de 
  <br>la cadena FX en lo que a series de ficción se refiere. Narra 
  <br>las aventuras de ...</td>
  <td><img src="Recursos/Peliculas/c8.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>Los Originales</td>
  <td>'The Originals' es un spin off de 'Crónicas Vampíricas', 
  <br>exitosa serie basada en las novelas homónimas de la escritora 
  <br>L.J. Smith. Está centrada en los vampiros originales y tiene 
  <br>como principal ...</td>
  <td><img src="Recursos/Peliculas/c9.jpg" width="160" height="200"></td>
</tr>

</table>

    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
