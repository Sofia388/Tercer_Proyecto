<?php
/* Smarty version 3.1.38, created on 2021-05-20 22:25:01
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema3.Juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6e1bd2ee069_37727265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58249f3dbbb26fe231be43a502b975ec3d1f81ea' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema3.Juegos.tpl',
      1 => 1621549418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a6e1bd2ee069_37727265 (Smarty_Internal_Template $_smarty_tpl) {
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

  <h2>Juegos de accion</h2>

    <table>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos</strong></td>
  <td><strong>Foto</strong></td>
</tr>



<tr>
  <td>BioShock</td>
  <td>BioShock es el primer juego de acción en primera persona donde todo 
  <br>es un arma. Ambientado en una utopía subacuática, BioShock otorga 
  <br>total libertad para convertir el entorno, los enemigos e, incluso, 
  <br>el agua y el fuego, en poderosos instrumentos contra tus enemigos.</td>
  <td><img src="Recursos/Juegos/c.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Ultima Underworld: The Stygian Abyss</td>
  <td>Ultima Underworld: The Stygian Abyss, desarrollado por Blue Sky 
  <br>Productions y distribuido por Origin Systems para PC, es un título
  <br>de rol y acción en primera persona que nos sitúa en el mundo de 
  <br>fantasía de la serie de Ultima, dentro del Gran Abismo Estigio, 
  <br>un gran sistema subterráneo de cuevas que contiene los restos de 
  <br>una utópica civilización fallida. El jugador asume el papel del 
  <br>Avatar, el protagonista de las series de Ultima, e intenta 
  <br>encontrar y rescatar la hija secuestrada de un barón a lo largo de
  <br>diferentes mazmorras.</td>
  <td><img src="Recursos/Juegos/c1.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Shadow of the Colossus</td>
  <td>El segundo proyecto de Team ICO tiene lugar en un mundo desolado 
  <br>habitado por enormes gigantes de piedra que caminan sin rumbo a 
  <br>los que deberás dar caza.</td>
  <td><img src="Recursos/Juegos/c2.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Half-Life</td>
  <td>Half-Life, diseñado por Valve y publicado por Sierra Online, es 
  <br>un título con una fuerte línea argumental e incorpora 
  <br>probablemente la más sofisticada inteligencia artificial vista en 
  <br>un juego hasta la fecha.</td>
  <td><img src="Recursos/Juegos/c3.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Halo Reach</td>
  <td>Experiencia de la trágica y heroica historia de Noble Team, un 
  <br>grupo de espartanos, que a través de un gran sacrificio y coraje, 
  <br>salvaron innumerables vidas frente a probabilidades imposibles. 
  <br>El planeta Reach es la última línea de defensa de la humanidad 
  <br>entre el Pacto invasor y su objetivo final, la destrucción de la 
  <br>Tierra. Si cae, la humanidad será empujada al borde de la 
  <br>destrucción. Lucha solo o con compañeros de escuadrón en Firefight
  <br>para sobrevivir contra interminables oleadas de enemigos que se 
  <br>despliegan con dificultad cada vez mayor. Halo Reach para PC y 
  <br>Xbox One como parte de Halo: The Master Chief Collection es un 
  <br>título de acción FPS a cargo de 343 Industries y Microsoft.</td>
  <td><img src="Recursos/Juegos/c4.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Deus Ex</td>
  <td>Warren Spector sigue demostrando su maestría con uno de los 
  <br>mejores juegos de rol y acción del año.</td>
  <td><img src="Recursos/Juegos/c5.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Castlevania: Symphony of the Night</td>
  <td>El mejor Castlevania jamás creado. La saga pega un giro y como 
  <br>protagonista tenemos a Alucard, hijo de Drácula, que aliado con 
  <br>los humanos decide acabar con la vida de su padre. El látigo 
  <br>inicial desaparece, dándonos la excusa perfecta para poder usar un 
  <br>buen número de armas y protecciones a lo largo del juego.</td>
  <td><img src="Recursos/Juegos/c6.jpg"" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>Red Dead Redemption 2</td>
  <td>Red Dead Redemption 2 es la secuela de la aventura de acción Red 
  <br>Dead Redemption a cargo de Rockstar Games para PlayStation 4, Xbox 
  <br>One, PC y Stadia que nos trae una historia épica sobre la vida en 
  <br>el despiadado corazón de América. Su vasto y evocador mundo 
  <br>sentará, a su vez, los cimientos para una experiencia multijugador 
  <br>online totalmente nueva. América, 1899. Con los representantes de 
  <br>la ley dando caza a las últimas bandas de forajidos, el fin del 
  <br>Salvaje Oeste es ya una realidad. Aquellos que no se rinden o 
  <br>sucumben son eliminados. Después de que un atraco se vaya al 
  <br>traste en la ciudad de Blackwater, Arthur Morgan y la banda de 
  <br>Van der Linde se ven obligados a huir. Con los agentes federales 
  <br>y los mejores cazarrecompensas de la nación pisándoles los talones,
  <br>deberán atracar, robar y abrirse camino a la fuerza por el 
  <br>implacable corazón de América para poder sobrevivir.</td>
  <td><img src="Recursos/Juegos/c7.jpg" 
  width="200" height="200" aling="center"></td>
</tr>

<tr>
<td>Cyberpunk 2077</td>
  <td>Basado en el famoso y alabado juego de rol clásico de lápiz, 
  <br>papel y dados, CD Projekt RED cambia la espada y brujería de The 
  <br>Witcher por los entornos futuristas, las armas de fuego y láser y 
  <br>los implantes biomecánicos de Cyberpunk 2077, un RPG de acción 
  <br>para PC, PlayStation 4, Xbox One y Stadia de mundo abierto basado 
  <br>en el universo del clásico juego de rol de Mike Pondsmith, 
  <br>Cyberpunk 2020.</td>
  <td><img src="Recursos/Juegos/c8.jpg" 
  width="240" height="190" aling="center"></td>
</tr>


<tr>
  <td>The Legend of Zelda: A Link to the Past</td>
  <td>Obra maestra incontestable de la historia del software de 
  <br>entretenimiento. Link to the Past trata sobre la gran aventura de 
  <br>Link en busca de la Tri-Force, que le lleva a recorrer Hyrule en 
  <br>todas sus direcciones, y dimensiones.</td>
  <td><img src="Recursos/Juegos/c9.jpg" 
  width="240" height="190" aling="center"></td>
</tr>

<tr>
  <td>Castlevania: Symphony of the Night</td>
  <td>Tomamos el papel de Alucard, vástago de Vlad Tepes, en una 
  <br>aventura con tintes roleros en la que nos enfrentaremos a peligros 
  <br>de toda clase en el mítico castillo Castlevania. Reedición en Xbox 
  <br>Live Arcade del más clásico Castlevania de la historia.</td>
  <td><img src="Recursos/Juegos/c10.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>SoulCalibur</td>
  <td>Si todavía te estás planteando la compra de la última consola de 
  <br>Sega, no sigas leyendo, porque te vamos a dar 10 razones para 
  <br>comprarla: 1ª.- Soul Calibur. 2ª.- Soul Calibur. 3ª.- ... y así 
  <br>hasta 10 veces, que curiosamente coincide con la calificación que 
  <br>recibirá al salir este monstruo de la diversión.</td>
  <td><img src="Recursos/Juegos/c11.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>The Legend of Zelda: Skyward Sword</td>
  <td>Nueva entrega de la laureada saga Zelda para Wii.</td>
  <td><img src="Recursos/Juegos/c12.jpg" 
  width="200" height="200" aling="center"></td>
</tr>


<tr>
  <td>The Elder Scrolls V: Skyrim</td>
  <td>The Elder Scrolls V: Skyrim es la quinta entrega de la saga RPG de 
  <br>acción The Elder Scrolls para Xbox 360, PlayStation 3 y PC</td>
  <td><img src="Recursos/Juegos/c13.jpg" 
  width="200" height="200" aling="center"></td>
</tr>

<tr>
<td>Unreal Tournament</td>
  <td>Vuelve Unreal más multijugador que nunca, nuevas armas, nuevos 
  <br>estilos de juego para reforzar de nuevo la acción y adicción del 
  <br>universo Unreal. Los gráficos como el engine han sido depurados 
  <br>para cometir mano a mano con Quake III, lo que han convertido a 
  <br>este juego en uno de los más jugados en todo el mundo.</td>
  <td><img src="Recursos/Juegos/c14.jpg" 
  width="240" height="190" aling="center"></td>
</tr>


<tr>
  <td>Grand Theft Auto III</td>
  <td>GTA vuelve por tercera vez con gráficos completamente en 3D, 
  <br>cientos de vehículos, 3 horas de todo tipo de música y un arsenal 
  <br>que asustaría a Rambo. Ser malo nunca había sido tan divertido.</td>
  <td><img src="Recursos/Juegos/c15.jpg" 
  width="240" height="190" aling="center"></td>
</tr>

    </table>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
