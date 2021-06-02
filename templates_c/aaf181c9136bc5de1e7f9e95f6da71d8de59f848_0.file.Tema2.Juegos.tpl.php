<?php
/* Smarty version 3.1.38, created on 2021-05-20 22:25:00
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema2.Juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6e1bc27c598_41182760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaf181c9136bc5de1e7f9e95f6da71d8de59f848' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema2.Juegos.tpl',
      1 => 1621549415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a6e1bc27c598_41182760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        <a href="?controller=User&method=Juegos" class="breadcrumb">Primer Tema</a>
        <a href="?controller=Temas&method=Juegos_Temas2" class="breadcrumb">Segundo Tema</a>
        <a href="?controller=Temas&method=Juegos_Temas3" class="breadcrumb">Tercer Tema</a>
      </div>
    </div>
  </nav>  

  <h2>Juegos de terror</h2>

    <table>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos</strong></td>
  <td><strong>Foto</strong></td>
</tr>



<tr>
  <td>Alan Wake</td>
  <td>El ya mítico Alan Wake es una de esas aventuras por las que 
  <br>siempre suspiraremos por una secuela. La historia de este 
  <br>escritor y su particular descenso a los infiernos se convirtió 
  <br>en uno de los mejores juegos de la pasada generación.</td>
  <td><img src="Recursos/Juegos/b.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Alien Isolation</td>
  <td>Alien Isolation no sólo es un juego magnífico que ya deberías 
  <br>haber probado, el retorno  de los bichos de Giger (o mejor dicho, 
  <br>el bicho) poco tiene que ver con  los desvaríos de Prometheus y 
  <br>es una obra maestra que maneja la tensión y el miedo ante la 
  <br>muerte  de una forma tan bestial que conseguirá hacértelas pasar 
  <br>canutas durante  toda la noche.</td>
  <td><img src="Recursos/Juegos/b1.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Amnesia: A Machine for Pigs</td>
  <td>Hay algo que da más miedo que encontrarte con un peligro de 
  <br>frente, y  es saber que está constantemente acechándote y nunca 
  <br>aparece ante tus  ojos. Si hay algo que domina la saga Amnesia 
  <br>es esa sensación de terror orquestada a base de cambios de música, 
  <br>puertas que se cierran solas y silencios incómodos.</td>
  <td><img src="Recursos/Juegos/b2.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Dead by Daylight</td>
  <td>Lo malo de enfrentarte a juegos en los que el terror está apoyado 
  <br>por un guión y una IA es que tarde o temprano acabarás cogiéndole 
  <br>el truco a  sus giros de miedo, pero si llevas toda esa idea hasta 
  <br>un multijugador la cosa cambia por completo. Aquí el susto vendrá 
  <br>de la mano de un  asesino controlado por ti u otro jugador, así 
  <br>que verlas venir no será  nunca una opción.</td>
  <td><img src="Recursos/Juegos/b3.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Dead Space</td>
  <td>Otro juego mítico que abrazaba el terror de forma magistral era 
  <br>Dead Space. Después la saga se fue un poco por las ramas y centró 
  <br>su odisea más en la acción que en el terror psicológico, pero 
  <br>pese a ello sigue siendo una franquicia que siempre vale la pena 
  <br>recomendar.</td>
  <td><img src="Recursos/Juegos/b4.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Fatal Frame II: Crimson Butterfly</td>
  <td>La idea de ir por ahí fotografiando fantasmas es de lo más alentadora, 
  <br>hasta que alguno de ellos te pega un susto de muerte y vas con 
  <br>más miedo de que se te echen encima que con ganas de sacar tu 
  <br>artista interior. La saga tiene juegazos, pero este siempre ha 
  <br>sido el más laureado.</td>
  <td><img src="Recursos/Juegos/b5.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Five Night’s at Freddy's VR: Help Wanted</td>
  <td>Puede que la explotación de la gallina de los huevos de oro en la 
  <br>que se ha convertido la franquicia le haya restado algo de fuerza  
  <br>a la idea, pero no olvidemos que si sigue ahí cosechando buenas 
  <br>críticas y cifras de ventas es porque sigue acojonándonos a base 
  <br>de bien. Con este la saga entrega un recopilatorio magnífico cargado 
  <br>de grandes momentos.</td>
  <td><img src="Recursos/Juegos/b6.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Layers of Fear</td>
  <td>Terror psicológico, una gran forma de aprovechar la banda sonora
  <br>y  multitud de sustos de los que quitan el hipo, nos hacen olvidar 
  <br>que Layers of Fear es uno de esos juegos en los que uno pasea más 
  <br>que juega y que su  duración es bastante limitada. Eso no significa 
  <br>que vayáis a superarlo  como por arte de magia, los puzles y cambios 
  <br>que se  irán produciendo en el escenario os tendrán pegados a la
  <br>pantalla con  ganas de que la tarjeta de sonido se vaya al carajo.</td>
  <td><img src="Recursos/Juegos/b7.jpg" 
  width="200" height="200" aling="center"></td>
</tr>

<tr>
<td>Outlast 2</td>
  <td>Seguro que más de una vez te has cabreado al ver una película 
  <br>porque  el protagonista bajaba al sótano o salía de un escondite 
  <br>donde debería  haberse quedado hasta que saliesen las letras de 
  <br>créditos. Pues bien,  aquí el protagonista vas a ser tú, y te 
  <br>aseguro que en más de una  ocasión vas querer hacer eso mismo 
  <br>para intentar evitar que otro susto  más te obligue a ponerte a 
  <br>ver dibujos animados antes de ir a dormir.</td>
  <td><img src="Recursos/Juegos/b8.jpg" 
  width="240" height="190" aling="center"></td>
</tr>


<tr>
  <td>Phasmophobia</td>
  <td>Phasmophobia es un juego en cooperativo para cuatro con una 
  <br>propuesta verdaderamente terrorífica. La actividad paranormal 
  <br>está subiendo en distintos lugares y tú y tu equipo deberéis ir 
  <br>a investigar y recopilar pruebas sobre la existencia de 
  <br>fantasmas. Miedo asegurado.</td>
  <td><img src="Recursos/Juegos/b9.jpg" 
  width="240" height="190" aling="center"></td>
</tr>

<tr>
  <td>Resident Evil 2</td>
  <td>Este es trampa, lo sé, pero ya que Capcom nos da la  oportunidad 
  <br>de retomar una joya de este calibre como si fuese un juego  
  <br>nuevo, no la vamos a desaprovechar. Menos aún sabiendo que los 
  <br>cambios  incluidos dan para una segunda vuelta más que recomendable 
  <br>y que los  sustos del juego original siguen siendo igual o más 
  <br>tremendos que antaño  en este Resident Evil 2.</td>
  <td><img src="Recursos/Juegos/b10.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Resident Evil 7</td>
  <td>Tenía cero esperanzas de ver a la saga recuperarse, pero debo 
  <br>reconocer que lo conseguido por Resident Evil 7 invita al optimismo. 
  <br>Ni es una vuelta a los orígenes, ni un refrito, ni  la ida de 
  <br>olla que se aventuraba iba a ser el futuro de la franquicia,  
  <br>sólo un juego que domina la ambientación y el terror de forma 
  <br>magistral  que encuentra otro camino para que los zombis vuelvan 
  <br>a ser apetecibles.</td>
  <td><img src="Recursos/Juegos/b11.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Silent Hill 2</td>
  <td>Otro clásico que siempre nos vendrá a la cabeza cuando hablamos 
  <br>de terror en videojuegos. Silent Hill 2 alcanzó una maestría que 
  <br>la saga no supo remontar en posteriores entregas y, con su 
  <br>particular historia, es difícil no caer en la tentación de darle 
  <br>una oportunidad.</td>
  <td><img src="Recursos/Juegos/b12.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>SOMA</td>
  <td>Imagina por un momento que a los creadores de Amnesia les da por 
  <br>olvidarse de la ambientación clásica de los castillos  
  <br>medievales y la Revolución Industrial y saltan directamente a la 
  <br>ciencia  ficción de una estación submarina al más puro estilo 
  <br>Bioshock, pues  eso es precisamente SOMA, uno de los juegos de 
  <br>terror más laureados y aplaudidos de los últimos años.</td>
  <td><img src="Recursos/Juegos/b13.jpg" 
  width="200" height="200" aling="center"></td>
</tr>

    </table>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
