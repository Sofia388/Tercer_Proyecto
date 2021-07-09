{include file="Cabeceras/Header.tpl"}
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Dpto. de Administracion</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=Regreso">Regresar</a></li>
      </ul>
    </div>
  </nav>

   <form method="post" action="?controller=User&method=Sueldo" class="col s12  center aling">
    <h5>Sueldo</h5>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
  </form>

{include file="Cabeceras/Footer.tpl"}