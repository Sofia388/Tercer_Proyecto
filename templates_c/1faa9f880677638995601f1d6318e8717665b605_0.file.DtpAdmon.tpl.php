<?php
/* Smarty version 3.1.38, created on 2021-07-13 19:32:49
  from 'C:\wamp64\www\Tercer_Proyecto\View\VistasAdmon\DtpAdmon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60edea610dbca7_95820243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1faa9f880677638995601f1d6318e8717665b605' => 
    array (
      0 => 'C:\\wamp64\\www\\Tercer_Proyecto\\View\\VistasAdmon\\DtpAdmon.tpl',
      1 => 1626204611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60edea610dbca7_95820243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Dpto. de Administracion</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoAdmin">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

   <form method="post" action="?controller=User&method=VerSueldo" class="col s12  center aling">
    <h5>Ver Sueldo</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

  <form method="post" action="?controller=User&method=VerBoniAd" class="col s12  center aling">
    <h5>Ver Bonificacion</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

  <form method="post" action="?controller=User&method=VerBenAd" class="col s12  center aling">
    <h5>Ver Beneficio</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

  <form method="post" action="?controller=User&method=HorasExtrasAd" class="col s12  center aling">
    <h5>Ver Horas Extras</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

  <form method="post" action="?controller=User&method=JudicialesAd" class="col s12  center aling">
    <h5>Ver Judiciales</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
