<?php
/* Smarty version 3.1.38, created on 2021-05-20 22:24:47
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema3.Musica.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6e1afcd9231_22910400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e882dae1ae7db6f23d17d838af8064bc3994361' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema3.Musica.tpl',
      1 => 1621549443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a6e1afcd9231_22910400 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Musica</a>
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
        <a href="?controller=User&method=Musica" class="breadcrumb">Primer Tema</a>
        <a href="?controller=Temas&method=Musica_Temas2" class="breadcrumb">Segundo Tema</a>
        <a href="?controller=Temas&method=Musica_Temas3" class="breadcrumb">Tercer Tema</a>
      </div>
    </div>
  </nav>

      <h2>Artistas que solo tuvieron un exito</h2>


      <table border=1>
        <tr>
          <td><strong>Titulo</strong></td>
          <td><strong>Datos</strong></td>
          <td><strong>Foto</strong></td>
        </tr>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cont']->value, 'Cnt');
$_smarty_tpl->tpl_vars['Cnt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Cnt']->value) {
$_smarty_tpl->tpl_vars['Cnt']->do_else = false;
?>
        
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['Cnt']->value['Titulo'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['Cnt']->value['Contenido'];?>
</td>
          <td> <?php echo $_smarty_tpl->tpl_vars['Cnt']->value['Foto'];?>
</td>
        </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>





      <table>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos</strong></td>
  <td><strong>Foto</strong></td>
</tr>

<tr>
  <td>Vanilla Ice – Ice Ice baby</td>
  <td>En 1989, el rapero más famoso del mundo lanzó el tema Ice Ice <br>baby, haciendo cantar y bailar a muchos. Su primer single de <br>hip-hip lo hizo llegar al número 1 de ventas en Estados <br>Unidos, Reino Unido y otros países.</td>
  <td><img src="Recursos/Musica/c1.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>James Blunt – You’re beautiful</td>
  <td>Lanzada con su álbum debut Back to bedlam, Blunt lideró las <br>listas de éxitos de medio mundo en 2004. En Estados Unidos <br>como en el Reino Unido, alcanzó el puesto número 1 del <br>ranking musical.</td>
  <td><img src="Recursos/Musica/c2.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Los Del Río – La Macarena 1993</td>
  <td>Considerada como la séptima canción más exitosa de todos los <br>tiempos según Billboard, el tema sigue animando las fiestas <br>de viejas y nuevas generaciones. El famoso baile que acompaña <br>a la música, la hizo aún más exitoso a nivel mundial.</td>
  <td><img src="Recursos/Musica/c3.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Chumbawamba – Tubthumping</td>
  <td>¡Todos la hemos escuchado! Esta banda británica saltó a la <br>fama en 1997 después de 8 discos y quince años intentando ser <br>reconocidos. Tubthumping llegó al número 2 de las listas en <br>Reino Unido y al 6 en Estados Unidos, además de escucharse en <br>partidos del Mundial de Fútbol de Francia.</td>
  <td><img src="Recursos/Musica/c4.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>4 Non Blondes – What’s up? (1993)</td>
  <td>La banda originaria de San Francisco alcanzó el éxito en <br>1993, cuando lanzaron su canción ‘What’s up?, parte de su <br>único álbum Bigger, better, faster, more!. El tema se <br>convirtió en un grito de guerra y alcanzó el número 14 más <br>vendido en Estados Unidos.</td>
  <td><img src="Recursos/Musica/c5.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Meredith Brooks – Bitch (1997)</td>
  <td>Una de las mujeres rockeras que impactaron las listas con sus <br>canciones y estilos diferentes al resto. La cantante logró el <br>puesto número 2 en Estados Unidos y al 6 en la británica en <br>1997 con Bitch. Además, fue nominada al Grammy como mejor <br>intérprete femenina de rock.</td>
  <td><img src="Recursos/Musica/c6.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Mickey – Toni Basil</td>
  <td>La cantante Antonia Christina Basilotta lanzó el tema en 1982 <br>con un video sobre porristas que todos querían imitar. Aunque <br>llenaba las pistas de baile, su éxito no escaló a más, pues <br>prefirió dedicarse a la danza, el cine y otras actividades. <br>Actualmente, la intérprete tiene 76 años.</td>
  <td><img src="Recursos/Musica/c7.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Gnarls Barkley – Crazy</td>
  <td>El tema hecho por diversión lideró listas de todo el mundo en <br>el año 2006. En el Reino Unido fue un éxito con ventas por <br>descargas, pues fue editado en digital una semana antes que <br>en formato físico.</td>
  <td><img src="Recursos/Musica/c8.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>The White Stripes – Seven nation army</td>
  <td>En 2003, el grupo lanzó un tema que sería himno en miles de <br>estadios de fútbol y otros deportes. Integrado por Jack y Meg <br>White, ganaron dos Grammy por Mejor Álbum. Aunque tienen otra <br>álbumes buenos, realmente ninguno fue tan exitoso como este.</td>
  <td><img src="Recursos/Musica/c9.jpg" width="200" height="200"></td>
</tr>
 
<tr>
  <td>Mambo N°5 – Lou Bega</td>
  <td>El cantante Lou Bega se volvió una de las voces más escuchada <br>de los 90’s. El ritmo, baile y video de este tema, lo ha <br>vuelto un tema indispensable en las fiestas. El éxito que le <br>permitió ser número uno en todo el mundo, solo le dió fama <br>pasajera pues hasta el momento ya no se ha escuchado otro <br>tema de este cantante.</td>
  <td><img src="Recursos/Musica/c10.jpg" width="200" height="200"></td>
</tr>

</table>

    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
