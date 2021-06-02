<?php
/* Smarty version 3.1.38, created on 2021-04-21 16:30:43
  from 'C:\xampp\htdocs\Proyecto_Blog\View\Temas\Tema2.Arte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_608037135ab744_85136951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98370c8aa6fa799132203d1b07c92d9d91afdd27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema2.Arte.tpl',
      1 => 1618441870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_608037135ab744_85136951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Arte</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Juegos">Juegos</a></li>
        <li><a href="?controller=User&method=Libros">Libros</a></li>
        <li><a href="?controller=User&method=Musica">Música</a></li>
        <li><a href="?controller=User&method=Peliculas">Peliculas/Series</a></li>
        <li><a href="?controller=User&method=Arte">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

      <nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="?controller=Temas&method=Arte_Temas1" class="breadcrumb">Primer Tema</a>
        <a href="?controller=Temas&method=Arte_Temas2" class="breadcrumb">Segundo Tema</a>
        <a href="?controller=Temas&method=Arte_Temas3" class="breadcrumb">Tercer Tema</a>
      </div>
    </div>
  </nav>

   <h2>Las pinturas mas Famosas</h2>

    <table>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos extras</strong></td>
  <td><strong>Sobre la pintura</strong></td>
  <td><strong>Foto</strong></td>
</tr>

<tr>
  <td>Mona Lisa</td>
  <td>Artista: Leonardo da Vinci
  <br>Fecha estimada: 1503 a 1519
  <br>Dónde verlo: Museo del Louvre (París)</td>
  <td>Antes del siglo XX, los historiadores decían que la Mona Lisa 
  <br>era poco conocida fuera de los círculos artísticos. Pero en 1911, 
  <br>un exempleado del Louvre robó el retrato y lo escondió durante 
  <br>dos años.Ese robo ayudó a cimentar el lugar de la pintura en la 
  <br>cultura popular desde entonces y expuso a millones de personas 
  <br>al arte renacentista.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/most-famous-paintings-mona-lisa.jpg" 
  width="240" height="190" aling="center"></td>
</tr>


<tr>
<td>La última cena</td>
  <td>Artista: Leonardo da Vinci
    <br>Fecha estimada: 1495 a 1498
    <br>Dónde verlo: Santa Maria delle Grazie (Milán, Italia)</td>
  <td>El fresco ha sobrevivido a dos amenazas de guerra: las tropas de 
  <br>Napoleón usaron la pared del refectorio en el que se pintó el 
  <br>fresco como práctica de tiro. También estuvo expuesto al aire 
  <br>durante varios años cuando los bombardeos durante la Segunda 
  <br>Guerra Mundial destruyeron el techo del convento dominico de 
  <br>Santa Maria delle Grazie en Milán.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/02-most-famous-paintings-last-supper.jpg" 
  width="240" height="190" aling="center"></td>
</tr>


<tr>
  <td>La noche estrellada</td>
  <td>Artista: Vincent van Gogh
    <br>Fecha: 1889
    <br>Dónde verlo: Museo de Arte Moderno (Nueva York)</td>
  <td>Van Gogh vivía en un manicomio en Saint-Rémy, Francia, en 
  <br>tratamiento por enfermedad mental, cuando pintó «La noche 
  <br>estrellada». Se inspiró en la vista desde la ventana de su 
  <br>habitación.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/03-most-famous-paintings-starry-night-restricted.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>El Grito</td>
  <td>Artista: Edvard Munch
<br>Fecha: 1893
<br>Dónde verlo: Museo Nacional en Oslo, Noruega </td>
  <td>La figura andrógina en la vanguardia de la pintura de estilo 
  <br>Art Nouveau no está dando un grito, sino que está tratando de 
  <br>bloquear un grito penetrante que proviene de la naturaleza. 
  <br>Se inspiró en una experiencia real que Munch tuvo mientras daba 
  <br>un paseo al atardecer en Oslo cuando un tono rojo dramático 
  <br>abrumaba sus sentidos.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/04-most-famous-paintings-the-scream-restricted.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Guernica</td>
  <td>Artista: Pablo Picasso
    <br>Fecha: 1937
    <br>Dónde verlo: Museo Reina Sofía en Madrid</td>
  <td>El «Guernica» fue trasladado al Museo Metropolitano de Arte 
  <br>Moderno de Nueva York durante la Segunda Guerra Mundial para su 
  <br>custodia. Picasso solicitó que se extienda la estancia hasta que
  <br>la democracia regrese a España. Finalmente regresó a Madrid en
  <br>1981, seis años después de la muerte del dictador español, el 
  <br>general Francisco Franco.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/05-most-famous-paintings-guernica.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>El beso</td>
  <td>Artista: Gustav Klimt
    <br>Fecha estimada: 1907 a 1908
    <br>Dónde verlo: museo Upper Belvedere en Viena, Austria</td>
  <td>Si bien «The Kiss» no está a la venta, otras obras de Klimt se 
  <br>compran y venden por grandes sumas. Oprah Winfrey se quedó con 
  <br>la obra de arte de 1907, «Retrato de Adele Bloch-Bauer II», por 
  <br>$ 150 millones en 2016, con una ganancia de $ 60 millones.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/06-most-famous-paintings-the-kiss-restricted.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>La joven de la perla</td>
  <td>Artista: Johannes Vermeer
    <br>Fecha estimada: 1665
    <br>Dónde verlo: Mauritshuis en La Haya, Países Bajos</td>
  <td> Mientras que los Mauritshuis fueron renovados de 2012 a 2014, 
  <br>esta obra de arte hizo una gira en Estados Unidos, Italia y 
  <br>Japón. Atrajo a grandes multitudes, reforzando aún más su 
  <br>estatus como una de las obras de arte más famosas del mundo.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/07-most-famous-paintings-girl-with-a-pearl-earring-restricted.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>El nacimiento de Venus</td>
  <td>Artista: Sandro Botticelli
    <br>Fecha estimada: 1485
    <br>Dónde verlo: Le Gallerie Degli Uffizi (Florencia, Italia)</td>
  <td> «Venus» de Botticelli presenta dos desviaciones significativas 
  <br>de la mayoría de las otras obras de sus contemporáneos.
  <br>Primero, pintó sobre lienzo en lugar de la madera, que era más 
  <br>popular. En segundo lugar, la desnudez era rara en este momento, 
  <br>por lo que era atrevido que Venus estuviera completamente 
  <br>expuesta menos su cabello largo y suelto y una mano (apenas) 
  <br>cubriendo las partes más íntimas de su cuerpo.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/08-most-famous-paintings-birth-of-venus.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Las Meninas</td>
  <td>Artista: Diego Velázquez
    <br>Fecha: 1656
    <br>Dónde verlo: Museo del Prado (Madrid)</td>
  <td>«Las Meninas» fue encargada por el rey Felipe IV de España, 
  <br>que gobernó desde 1621 hasta 1665. Permaneció en el palacio 
  <br>real hasta 1819, cuando fue al Museo del Prado.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/09-most-famous-paintings-las-meninas.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Creación de Adán</td>
  <td>Artista: Miguel Ángel
    <br>Fecha: 1508 a 1512
    <br>Dónde verlo: Capilla Sixtina (Ciudad del Vaticano)</td>
  <td> El techo de la Capilla Sixtina había sido opacado por siglos de 
  <br>exposición al humo de las velas, entre muchas otras cosas. 
  <br>Después de una limpieza larga y extensa que terminó en 1989, la 
  <br>gente se sorprendió al ver los colores brillantes y vibrantes 
  <br>que Miguel Ángel usó originalmente.</td>
  <td><img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/11/10-most-famous-paintings-creation-of-adam-restricted.jpg" 
  width="200" height="200" aling="center"></td>
</tr>





<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
