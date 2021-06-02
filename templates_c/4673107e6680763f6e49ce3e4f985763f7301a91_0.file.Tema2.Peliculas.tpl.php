<?php
/* Smarty version 3.1.38, created on 2021-05-18 01:54:39
  from 'C:\MAMP\htdocs\Proyecto_Blog\View\Temas\Tema2.Peliculas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a31e5f65ea32_64646832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4673107e6680763f6e49ce3e4f985763f7301a91' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Proyecto_Blog\\View\\Temas\\Tema2.Peliculas.tpl',
      1 => 1621302855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60a31e5f65ea32_64646832 (Smarty_Internal_Template $_smarty_tpl) {
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

      <h2>Las Peliculas que se estrenana en el 2021</h2>

      <table>
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Datos</strong></td>
  <td><strong>Foto</strong></td>
</tr>

<tr>
  <td>THE MARKSMAN | 15 de enero</td>
  <td>Película de acción y suspenso protagonizada por Liam Neeson.
  <br>Se trama sigue a un ranchero que vive en Arizona y se 
  <br>convertirá en El Protector de una familia de migrantes que 
  <br>escapa de un cartel de drogas mexicano.</td>
  <td><img src="Recursos/Peliculas/b1.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>BORN A CHAMPION | 22 de enero</td>
  <td>Dennis Quaid y Sean Patrick Flanery protagonizan esta poderosa 
  <br>película de acción sobre artes marciales.
  <br>Tras comprobarse que hubo trampa en una pelea en la que había 
  <br>sido derrotado, la leyenda de la lucha Mickey Kelly regresa 
  <br>al ring muchos años después por una revancha.</td>
  <td><img src="Recursos/Peliculas/b2.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>WRONG TURN | 26 de enero</td>
  <td>Llegando al final del mes, se estrena una película de terror 
  <br>del subgénero slasher.
  <br>Cuando un grupo de amigos camina por la cordillera de los 
  <br>Apalaches, la aventura dará un giro inesperado al encontrarse }
  <br>con una extraña comunidad que ha habitado en las montañas 
  <br>durante cientos de años.</td>
  <td><img src="Recursos/Peliculas/b3.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>MINAMATA | 5 de febrero</td>
  <td>En la misma fecha una película dramática inspirada en la
  <br>novela del mismo nombre, protagonizada por Johnny Deep.
  <br>Sigue los pasos de un fotógrafo que regresa a Japón para 
  <br>documentar los efectos devastadores del envenenamiento por 
  <br>mercurio.</td>
  <td><img src="Recursos/Peliculas/b4.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>FEAR OF RAIN | 12 de febrero</td>
  <td>Una semana después llega un thriller de terror protagonizado 
  <br>por Katherine Heigl.
  <br>A causa de su esquizofrenia, una joven empieza a sufrir 
  <br>alucinaciones cuando cree que un niño fue secuestrado por su 
  <br>vecino.</td>
  <td><img src="Recursos/Peliculas/b5.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>FRENCH EXIT | 12 de febrero</td>
  <td>Llega una comedia surrealista protagonizada por Michelle 
  <br>Pfeiffer y Lucas Hedges.
  <br>Narra la historia de una mujer de 60 años que se muda junto a 
  <br>su hijo de Manhattan a Paris luego de haberse agotado la 
  <br>fortuna que había heredado de su marido.</td>
  <td><img src="Recursos/Peliculas/b6.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>LAND | 12 de febrero</td>
  <td>Se trata de una película dramática dirigida y protagonizado 
  <br>por Robin Wright.
  <br>Sobre una abogada de la ciudad que busca su lugar en el mundo, 
  <br>en un nuevo entorno natural luego de una gran pérdida personal.</td>
  <td><img src="Recursos/Peliculas/b7.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>NOMALAND | 19 de febrero</td>
  <td>Uno de los estrenos más anunciados es este drama estadounidense 
  <br>protagonizado por la multi-premiada actriz Frances McDormand.
  <br>A pesar de haber perdido su trabajo y a su esposo, Fern decide 
  <br>viajar por el país en busca de un nuevo empleo, descubriendo 
  <br>una nueva vida en una comunidad de nómades.</td>
  <td><img src="Recursos/Peliculas/b8.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>CHAOS WALKING | 5 de marzo</td>
  <td>n primer lugar de los estrenos en cine para Marzo 2021, una 
  <br>película de ciencia ficción basada en la trilogía del mismo 
  <br>nombre protagonizada por Daisy Ridley y Tom Holland.</td>
  <td><img src="Recursos/Peliculas/b9.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td>TOMB RIDER 2 | 19 de marzo</td>
  <td>Es la secuela de Tomb Rider basada en el popular video juego 
  <br>y protagonizada por Alicia Vikander.
  <br>Con el tiempo en su contra Lara deberá recuperar la mítica 
  <br>Daga de Xian.</td>
  <td><img src="Recursos/Peliculas/ba1.jpg" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td><img src="" width="160" height="200"></td>
</tr>

</table>

    
    
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
