<?php
/* Smarty version 3.1.38, created on 2021-06-03 17:41:04
  from 'C:\MAMP\htdocs\Tercer_Proyecto\View\Temas\Tema1.Musica.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60b91430a7cb70_89995303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc54f458797dd1472cdd989d9f05ec5f66f4c331' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Tercer_Proyecto\\View\\Temas\\Tema1.Musica.tpl',
      1 => 1621545058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60b91430a7cb70_89995303 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <h2>Los discos mas vendidos</h2>


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

<br><br><br><br><br><br><br>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos</strong></td>
  <td><strong>Foto</strong></td>
</tr>

<tr>
  <td>Thriller- Michael Jackson</td>
  <td>Michael Jackson se coronó definitivamente como el rey del pop 
  <br>con este álbum de 1982 que vendió más de 50 millones de copias. 
  <br>Era su 6º álbum, y las canciones más populares que lo componen 
  <br>son Thriller, Beat it, Billie Jean y Wanna be startin’ 
  <br>somethin’. El videoclip supuso un punto y aparte en la 
  <br>historia de la música y en la forma de hacer videoclips. 
  <br>Merecido su primer puesto como uno de los discos más vendidos.</td>
  <td><img src="Recursos/Musica/a1.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>The Dark Side of the Moon- Pink Floyd</td>
  <td>El 8º disco del Pink Floyd se lanzó en 1973 y fue un éxito 
  <br>inmediato. En solo una semana se trepó a las listas Billboard, 
  <br>permaneciendo meses en los primeros lugares. Fue el mayor 
  <br>éxito comercial de la banda. El disco muestra la cara más 
  <br>oscura y temerosa del ser humano, tratando temas como la 
  <br>enfermedad mental, la vejez o la avaricia. Se le considera 
  <br>uno de los mejores discos de la historia, con unas ventas 
  <br>estimadas de más de 47 millones.</td>
  <td><img src="Recursos/Musica/a2.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>El guardaespaldas- Whitney Houston</td>
  <td>La banda sonora de la película «El Guardaespaldas» con Whitney 
  <br>Houston a la cabeza, lanzado en 1996, vendió un millón de 
  <br>copias la primera semana. Ese mismo año arrasó con todos los 
  <br>premios, llevándose el galardón de Mejor álbum del Año. Fue 
  <br>disco de platino 17 veces y vendió unas 45 millones de copias 
  <br>convirtiéndose en la banda sonora más vendida de la historia.</td>
  <td><img src="Recursos/Musica/a3.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Back in Black- AC/DC</td>
  <td>El 7º disco de estudio de AC/DC se lanzó en 1980 y fue el que 
  <br>los consagró mundialmente tras la muerte de Bon Scott. El 
  <br>disco vendió más de 45 millones de copias y se convirtió en 
  <br>un clásico que marcó un punto de inflexión, no solo en la 
  <br>historia de la banda, sino en la del rock.</td>
  <td><img src="Recursos/Musica/a4.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Bat out of Hell- Meat Loaf</td>
  <td>La banda de rock lanzó tímidamente su segundo álbum sin 
  <br>pensar que se convertiría en uno de los más vendidos de la 
  <br>historia. El disco vendió unas 43 millones de copias y el 
  <br>título de disco de platino 14 veces consecutivas. Una de las 
  <br>canciones más conocidas del álbum es «You Took the Words 
  <br>Right out of My Mouth».</td>
  <td><img src="Recursos/Musica/a5.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Their Greatest Hits- Eagles</td>
  <td>El álbum recopilatorio de la banda reúne sus mayores éxitos 
  <br>entre los años 1971 y 1975. Se trata del disco más vendido de 
  <br>la historia de Estados Unidos según la Recording Industry 
  <br>Association of America con 43 millones de copias.</td>
  <td><img src="Recursos/Musica/a6.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Come On Over- Shania Twain</td>
  <td>Aunque parezca una extraña en esta lista, el éxito de la 
  <br>cantante con su tercer disco, es indiscutible. Lanzado en 1997, 
  <br>se convirtió en el disco más vendido por una artista femenina, 
  <br>el álbum country más vendido, y también en el más vendido de 
  <br>la década de los 90 con sus más de 40 millones de copias. 
  <br>Destacaba su tema «Man I feel like a woman».</td>
  <td><img src="Recursos/Musica/a7.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Fiebre del sábado noche</td>
  <td>Es la segunda banda sonora más vendidas de la historia con 
  <br>casi 40 millones de copias. No hay fiesta que se precie sin 
  <br>un momento «Stayin Alive» y alguien imitando a John Travolta. 
  <br>La película y el posterior lanzamiento de la BSO hicieron que 
  <br>la música de los Bee Gees siga evocando bolas de discoteca, 
  <br>luces y pantalones de campana.</td>
  <td><img src="Recursos/Musica/a8.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Rumours- Fleetwood Mac</td>
  <td>Rumours es el álbum más famoso y la obra maestra de la banda 
  <br>londinense a pesar de la dificultad que tuvieron para llevarlo 
  <br>a cabo. Se lanzó en 1976, alcanzó los 40 millones de copias y 
  <br>obtuvo muy buenas críticas por parte de la prensa especializada.</td>
  <td><img src="Recursos/Musica/a9.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Led Zeppelin IV- Led Zeppelin</td>
  <td>En 1971 la famosa e icónica banda inglesa lanzó su 4º álbum de 
  <br>estudio, producido por su guitarrista Jimmy Page. Muy bien 
  <br>recibido por la crítica, el disco fue un éxito absoluto y de 
  <br>él se desprenden varias de las canciones clásicas de la banda 
  <br>como Rock and Roll, Stairway to Heaven y Black Dog. Fue 
  <br>platino 23 veces y vendió más de 37 millones de copias.</td>
  <td><img src="Recursos/Musica/a10.jpg" width="200" height="200"></td>
</tr>

</table>

    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
