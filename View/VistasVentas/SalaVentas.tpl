{include file="Cabeceras/Header.tpl"}
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Sala de Ventas</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoVentas">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

  <form method="post" action="?controller=User&method=VerSueldoVen" class="col s12  center aling">
    <h5>Ver Sueldo</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

  <form method="post" action="?controller=User&method=VerBoniVen" class="col s12  center aling">
    <h5>Ver Bonificacion</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

{include file="Cabeceras/Footer.tpl"}