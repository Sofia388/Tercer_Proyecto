
{include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenido Jefe</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

    <form method="post" action="?controller=User&method=CodigoNew" class="col s12  center aling">
        <h5>Crear Codigo</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>

    <form method="post" action="?controller=User&method=Sueldo" class="col s12  center aling">
        <h5>Pago de Sueldo</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>

    <form method="post" action="?controller=User&method=Boni" class="col s12  center aling">
        <h5>Pago de Bonificacion</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>


{include file="Cabeceras/Footer.tpl"}