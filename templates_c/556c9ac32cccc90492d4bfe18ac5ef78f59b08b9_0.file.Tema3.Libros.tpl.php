<?php
/* Smarty version 3.1.38, created on 2021-05-20 22:25:05
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema3.Libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6e1c148a404_92827272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556c9ac32cccc90492d4bfe18ac5ef78f59b08b9' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema3.Libros.tpl',
      1 => 1621549449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a6e1c148a404_92827272 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Libros</a>
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
        <a href="?controller=User&method=Libros" class="breadcrumb">Primer Tema</a>
        <a href="?controller=Temas&method=Libros_Temas2" class="breadcrumb">Segundo Tema</a>
        <a href="?controller=Temas&method=Libros_Temas3" class="breadcrumb">Tercer Tema</a>
      </div>
    </div>
  </nav> 

    <h2>Los libros de mas importantes de la historia</h2>

      <table>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos</strong></td>
  <td><strong>Foto</strong></td>
</tr>

<tr>
  <td>Diálogos</td>
  <td>Diálogos, de Platón (siglo IV a.C.). Uno de los cimientos de 
  <br>la cultura occidental. Toda la filosofía posterior en Europa 
  <br>surge de esta obra del discípulo de Sócrates, aunque llamar 
  <br>"libro" a los Diálogos no es exacto: son 36 textos publicados 
  <br>habitualmente en nueve volúmenes. Tuvo una influencia decisiva 
  <br>en Aristóteles, San Agustín y también en la psicología, la 
  <br>ética, la estética, la política o la ciencia.</td>
  <td><img src="Recursos/Libros/c.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>La Biblia</td>
  <td>La Biblia (750 a.C.-110). Entre los libros religiosos –con 
  <br>permiso del Corán, cuya influencia hoy día es tan notable–, 
  <br>este es el que más ha cambiado la faz del planeta. Base de dos 
  <br>de las grandes iglesias monoteístas (judaísmo y cristianismo), 
  <br>acabó con el paganismo del Imperio Romano y fue el primer libro 
  <br>impreso –Biblia de Gutenberg (1454)– y el más traducido y 
  <br>vendido (6 000 millones de copias).</td>
  <td><img src="Recursos/Libros/c1.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Carta Magna</td>
  <td>Carta Magna, de Juan I de Inglaterra (1215). Resulta asombroso 
  <br>que la piedra fundacional de la democracia moderna y el 
  <br>constitucionalismo sea un documento de la Inglaterra medieval 
  <br>que los nobles obligaron a firmar al rey –Juan sin Tierra– para 
  <br>limitar su poder. Es en este libro donde surge el habeas corpus 
  <br>(para evitar arrestos arbitrarios), la separación de Iglesia y 
  <br>Estado, etc.</td>
  <td><img src="Recursos/Libros/c2.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>El Príncipe</td>
  <td>El Príncipe, de Nicolás Maquiavelo (1532). El tratado de teoría 
  <br>política por excelencia del Renacimiento, su influencia iría 
  <br>mucho más allá de su época y hoy sigue siendo reconocido como 
  <br>una obra fundamental sobre la naturaleza del poder, la oposición 
  <br>entre autoritarismo y liberalismo, etc.</td>
  <td><img src="Recursos/Libros/c3.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Obras completas</td>
  <td>Obras completas, de William Shakespeare (1594-1634). El bardo 
  <br>de Stratford-upon-Avon es considerado el escritor más importante 
  <br>en lengua inglesa y uno de los más influyentes de la literatura 
  <br>universal. Sus obras dramáticas –entre las más famosas, Macbeth, 
  <br>Hamlet, Otelo, Julio César o Romeo y Julieta– han sido escenificadas, 
  <br>estudiadas, adaptadas y redescubiertas en multitud de ocasiones.</td>
  <td><img src="Recursos/Libros/c4.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Principia</td>
  <td>Principios matemáticos de filosofía natural, de Isaac Newton 
  <br>(1687). Conocido como Principia, es considerado por muchos la 
  <br>obra científica más importante de la historia. Contiene las 
  <br>tres famosas leyes del movimiento ‒base de la mecánica clásica‒, 
  <br>la ley de la gravitación universal y una derivación de las 
  <br>leyes de Kepler sobre el movimiento de los planetas. Su 
  <br>influencia llegó a finales del siglo XVIII.</td>
  <td><img src="Recursos/Libros/c5.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>La riqueza de las naciones</td>
  <td>La riqueza de las naciones, de Adam Smith (1776). Este libro 
  <br>fundó la economía moderna y puso las bases del capitalismo y 
  <br>también del pensamiento liberal. De él emanan conceptos como 
  <br>la división del trabajo, el libre mercado, la acumulación de 
  <br>capital... Situada en el contexto del nacimiento de la Revolución 
  <br>Industrial, la obra de Smith marcó la teoría económica de los 
  <br>siglos XIX, XX y hasta XXI.</td>
  <td><img src="Recursos/Libros/c6.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Crítica de la razón pura</td>
  <td>Crítica de la razón pura, de Immanuel Kant (1781). Una indagación 
  <br>trascendental, cuyo objetivo central es lograr una respuesta 
  <br>definitiva sobre si la metafísica puede ser considerada una 
  <br>ciencia, así como fundamentar la validez tanto de la experiencia 
  <br>ordinaria como de las ciencias matemáticas y físicas. Cambió 
  <br>el concepto de la filosofía y sin ella no habrían existido 
  <br>Hegel ni Marx.</td>
  <td><img src="Recursos/Libros/c7.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Los derechos del hombre</td>
  <td>Los derechos del hombre, de Thomas Paine (1791). Precisamente 
  <br>muy influido por la Carta Magna, el intelectual Paine publicó 
  <br>este ensayo capital en el desarrollo de los derechos humanos 
  <br>y los conceptos de libertad e igualdad, y en la abolición de 
  <br>la esclavitud. Le valió la expulsión de Gran Bretaña; se refugió 
  <br>en la Francia revolucionaria, pero allí acabó en la cárcel 
  <br>por oponerse al Terror de Robespierre.</td>
  <td><img src="Recursos/Libros/c8.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Manifiesto Comunista</td>
  <td>Manifiesto Comunista, de Karl Marx y Friedrich Engels (1848). 
  <br>Uno de los tratados políticos más influyentes, para bien y 
  <br>para mal, de la historia. El marxismo dio lugar a la lucha 
  <br>obrera que en Occidente dotó de derechos a los trabajadores 
  <br>frente a la explotación capitalista, pero también fue el 
  <br>germen de la Revolución Soviética de 1917 y de muchos 
  <br>regímenes socialistas dictatoriales.</td>
  <td><img src="Recursos/Libros/c9.jpg" width="200" height="200"></td>
</tr>

</table>

    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
