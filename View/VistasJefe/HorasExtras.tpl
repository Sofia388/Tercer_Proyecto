{include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Horas Extras</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?controller=User&method=CrearHorasExtras" class="col s12  center aling">
    <h5>Pago de las Horas Extras</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsHrs" type="text" class="validate" name="codUsHrs" required=""/>
          <label for="codUsHrs">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valHrs" type="text" name="valHrs" class="validate" requiered=""/>
     <label for="valHrs">Valor del Horas Extras</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
{include file="Cabeceras/Footer.tpl"}