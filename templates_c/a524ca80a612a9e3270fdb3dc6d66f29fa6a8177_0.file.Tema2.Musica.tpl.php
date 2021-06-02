<?php
/* Smarty version 3.1.38, created on 2021-05-20 22:24:50
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema2.Musica.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6e1b276f327_45375376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a524ca80a612a9e3270fdb3dc6d66f29fa6a8177' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema2.Musica.tpl',
      1 => 1621549466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a6e1b276f327_45375376 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

      <h2>Las canciones con mas vistas en YouTube</h2>

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
  <td>Baby Shark Dance <br>(Pinkfong Songs for Children) 
  <br>- 8.517.501.090 visualizaciones</td>
  <td>Es probable que haya gente en este planeta Tierra que no haya 
  <br>escuchado Baby Shark, una canción infantil sobre una familia 
  <br>de tiburones. Pero de lo que no hay duda es de que hay familias 
  <br>con niños pequeños en su seno que la han convertido en su 
  <br>banda sonora durante horas y horas. De ahí que recientemente 
  <br>alcanzara el número uno con más de 7.200 millones de visitas.</td>
  <td><img src="Recursos/Musica/b1.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Despacito (Luis Fonsi - ft. Daddy Yankee) 
  <br>- 7.338.670.297 visualizaciones</td>
  <td>Hubo un tiempo, no tan lejano, en el que la gente podía 
  <br>escuchar un tema en su ordenador, móvil o radio y 
  <br>posteriormente bailarlo en los bares y discotecas. Y en ellas, 
  <br>esta canción era la reina. La presentó el cantante puertorriqueño 
  <br>Luis Fonsi en 2017 y aún seguía escuchándose con fuerza antes 
  <br>de la pandemia</td>
  <td><img src="Recursos/Musica/b2.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Shape of You (Ed Sheeran) 
  <br>- 5.069.943.360 visualizaciones</td>
  <td>Escrita en un principio para que fuera interpretada por 
  <br>Rihanna, el cantante y compositor británico Ed Sheeran 
  <br>decidió quedársela para él mismo. Lo que no esperaba es que 
  <br>se convirtiese en una de las canciones más famosas de la 
  <br>década, líder en 34 países y todo un fenómeno en YouTube.</td>
  <td><img src="Recursos/Musica/b10.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>See You Again (Wiz Khalifa ft. Charlie Puth) 
  <br>- 4.821.058.067 visualizaciones</td>
  <td>La muerte de Paul Walker destrozó a todos los seguidores de la 
  <br>saga de películas de A todo gas. Para la despedida de su 
  <br>personaje, Brian O'Conner, en Fast & Furious 7, el sello 
  <br>Atlantic Records y el estudio Universal Pictures hicieron un 
  <br>llamamiento del que salió ganador Charlie Puth, quien junto a 
  <br>Wiz Khalifa rompieron todos los récords imaginables en 2013.</td>
  <td><img src="Recursos/Musica/b3.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Johny Johny Yes Papa (LooLoo Kids) 
  <br>- 4.245.028.767 visualizaciones</td>
  <td>A Johny su padre lo ha pillado comiendo azúcar. No hace falta 
  <br>saber más para quedar atrapado por esta canción de cuna 
  <br>originaria de Kenia, aunque otras fuentes sitúan su origen en 
  <br>India en los años 60.</td>
  <td><img src="Recursos/Musica/b4.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Uptown Funk (Mark Ronson ft. Bruno Mars) 
  <br>- 4.009.229.462 visualizaciones</td>
  <td>El músico, DJ, compositor y productor musical británico Mark 
  <br>Ronson fue a lo seguro y, para su cuarto álbum de estudio, 
  <br>recurrió a la colaboración de su amigo Bruno Mars. El 
  <br>resultado fue la pista más escuchada de todos los tiempos en 
  <br>el Reino Unido tras ser retransmitida 2,5 millones de veces 
  <br>en una sola semana. Y en cuanto a visitas en YouTube tampoco 
  <br>le ha ido mal.</td>
  <td><img src="Recursos/Musica/b5.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Gangnam Style (PSY) <br>- 3.860.837.574 visualizaciones</td>
  <td>Nadie dudaba que iba a ser un autor de "un sólo éxito", al 
  <br>menos a nivel mundial... ¡Pero vaya éxito! El rapero 
  <br>surcoreano PSY rompió todo los esquemas con un tema en el que 
  <br>parodiaba el lujoso estilo de vida de Gangnam, un distrito del 
  <br>sur de Seúl conocido por su alocada vida nocturna y por el 
  <br>alto nivel adquisitivo de sus vecinos. En su pico máximo de 
  <br>popularidad era reproducida 19 millones de veces al día en 
  <br>YouTube, lo que suponía unos 116 visionados al segundo.</td>
  <td><img src="Recursos/Musica/b6.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Sorry (Justin Bieber) <br>- 3.362.988.316 visualizaciones</td>
  <td>Color, diversión y optimismo. El cantante canadiense Justin 
  <br>Bieber se disculpaba seduciendo a la crítica y al público con 
  <br>una mezcla de house y ritmos tropicales que se convirtió en 
  <br>una de las canciones más populares de 2015.</td>
  <td><img src="Recursos/Musica/b7.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Sugar (Maroon 5) <br>- 3.325.566.664 visualizaciones</td>
  <td>Inspirada en la película De boda en boda, protagonizada por 
  <br>Owen Wilson y Vince Vaughn, el tercer sencillo del quinto 
  <br>álbum de la banda Maroon 5 muestra a sus integrantes 
  <br>apareciendo por sorpresa en distintos banquetes.</td>
  <td><img src="Recursos/Musica/b8.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Roar ( Katy Perry) <br>- 3.212.573.313 visualizaciones</td>
  <td>El salto a la madurez de Katy Perry lo escenificó este 
  <br>pegadiza canción que compuso tras someterse a terapia para 
  <br>superar el divorcio con Russell Brand y en la que acaba 
  <br>convertida en toda una reina de la selva.</td>
  <td><img src="Recursos/Musica/b9.jpg" width="200" height="200"></td>
</tr>

</table>

    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
