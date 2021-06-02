<?php
/* Smarty version 3.1.38, created on 2021-05-20 22:25:04
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema2.Libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6e1c073ef18_59155957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2986adcca7dbf3d565aff002f27a2e747a2054' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema2.Libros.tpl',
      1 => 1621549472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a6e1c073ef18_59155957 (Smarty_Internal_Template $_smarty_tpl) {
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

    <h2>Los mejores libros para Jovenes</h2>

          <table>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos</strong></td>
  <td><strong>Foto</strong></td>
</tr>

<tr>
  <td>La historia como nunca antes <br>te la habían contado</td>
  <td>“La historia como nunca antes te la habían contado”, de Javier
<br>Donzé, es el salto a papel de los populares vídeos de historia 
<br>del popular canal de Youtube Academia Play. Una forma diferente, 
<br>esquemática y llamativa de contarnos algunos de los sucesos 
<br>históricos más importantes. Esta obra gráfica es uno de los 
<br>libros para adolescentes más apropiados, pero también lo es 
<br>para adultos. Es de la editorial La Esfera de los Libros.</td>
<td><img src="Recursos/Libros/b.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>La Historia Interminable</td>
  <td>Esta obra maestra de Michael Ende es muy conocida por todos 
  <br>por haber sido llevada también a la televisión. Sin embargo, 
  <br>el libro es una lectura imprescindible que enamora y engancha 
  <br>tanto a adolescentes como a adultos. Un libro lleno de 
  <br>fantasía, imaginación y aventuras sorprendentes. En esta 
  <br>historia aparecen también temas como el acoso escolar. Uno de 
  <br>los libros recomendados para adolescentes que más nos gustan. 
  <br>¡Perfecta para empezar a leer y no parar!</td>
<td><img src="Recursos/Libros/b1.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td> El bucanero de Bombay</td>
  <td>El lector viajará junto a los protagonistas del libro por los 
  <br>diferentes parajes de La India, conociendo sus costumbres y 
  <br>la diversidad de culturas. Una novela que cuenta relatos 
  <br>policiacos, cargada de imaginación, humor e inteligencia. Su 
  <br>autor es Satyajit Ray. ¡Este libro para adolescentes no deja 
  <br>indiferente!</td>
<td><img src="Recursos/Libros/b2.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Saga “Algo tan sencillo”</td>
  <td>Blue Jeans es el pseudónimo del autor que tiene enganchado a 
  <br>miles de adolescentes en toda España. Comenzó con la trilogía 
  <br>“Canciones para Paula”, continuó con “El club de los 
  <br>incomprendidos” y siguió sorprendiendo con “Algo tan sencillo”. 
  <br>La tercera parte de esta trilogía, “Algo tan sencillo como 
  <br>estar contigo” mantiene alerta hasta el último capítulo. Esta 
  <br>saga de libros para adolescentes se ha hecho muy popular.</td>
<td><img src="Recursos/Libros/b3.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>El Diario de Anna Frank</td>
  <td>Otro clásico entre los clásicos. Muchos pueden dudar si leerlo 
  <br>en la adolescencia es lo más adecuado, pero su edad recomendada 
  <br>es entre los 12 y los 15 años aproximadamente. Un testimonio 
  <br>duro, sobrecogedor e impactante recogido en el diario de Anne, 
  <br>una niña judía que trata, junto a su familia, de huir del 
  <br>Holocausto. Es un relato realista y estremecedor sobre los 
  <br>horrores del nazismo. Es un libro recomendado para adolescentes, 
  <br>aunque es igualmente impactante para cualquier adulto.</td>
<td><img src="Recursos/Libros/b4.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>El retrato de Dorian Gray</td>
  <td>Este clásico de Oscar Wilde en una lectura popular en la edad 
  <br>adolescente. El carácter misterioso y tenebroso de esta obra 
  <br>engancha rápidamente con el público adolescente. La pugna 
  <br>entre la moral y el hedonismo, el bien y el mal, el temor 
  <br>ante lo desconocido, el poder del subconsciente…todos estos 
  <br>temas están presentes en esta gran obra.</td>
<td><img src="Recursos/Libros/b5.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Viaje al Centro de la Tierra</td>
  <td>Es otro de los clásicos que nunca fallan si buscamos libros para 
  <br>adolescentes. Esta obra de Julio Verne es todo un referente 
  <br>para las novelas de aventuras. En ella el lector puede sumergirse 
  <br>en el mundo de la paleontología, los animales prehistóricos y 
  <br>las maravillosas experiencias que viven un grupo de intrépidos 
  <br>aventureros.</td>
<td><img src="Recursos/Libros/b6.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>La Metamorfosis de Kafka</td>
  <td>Para muchos puede ser una sorpresa recomendar la lectura de 
  <br>esta obra maestra de Franz Kafka, sin embargo, lleva atrayendo 
  <br>y sorprendiendo a los adolescentes desde hace años, por eso 
  <br>es uno de los libros recomendados para adolescentes que no 
  <br>queríamos dejar fuera de esta selección. Ya sea por su variedad 
  <br>de interpretaciones, la naturaleza misteriosa de esta obra que 
  <br>hace reflexionar, analizar realidad y ficción y que, sin duda, 
  <br>les hará debatir sobre el significado de la misma.</td>
<td><img src="Recursos/Libros/b7.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>Los 100</td>
  <td>Tres siglos después de la catástrofe termonuclear, los únicos 
  <br>supervivientes habitan en naves espaciales que giran alrededor 
  <br>de la órbita terrestre. “Día 21” es la segunda parte de esta 
  <br>saga que tiene una continuación en su tercera parte “Homecoming”. 
  <br>Su autor es Kass Morgan. </td>
<td><img src="Recursos/Libros/b8.jpg" width="200" height="200"></td>
</tr>

<tr>
  <td>El Principito</td>
  <td>No podemos olvidar que El Principito es toda una obra maestra 
  <br>y uno de los libros más leídos de la historia. Es perfecto 
  <br>para leerlo en la adolescencia, pero también en la edad adulta, 
  <br>ya que es toda una lección de vida: valores, profundas reflexiones, 
  <br>la importancia de la constancia, de valorar el pasado, de echar 
  <br>una mirada atrás y recordar que todos fuimos niños…Una obra 
  <br>imprescindible con la que su autor Antoine de Saint-Exupéry 
  <br>alcanzó fama a nivel mundial. Uno de los libros recomendados 
  <br>para adolescentes que, sin embargo, es un placer leer a cualquier edad.</td>
<td><img src="Recursos/Libros/b9.jpg" width="200" height="200"></td>
</tr>

</table>

    
    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
