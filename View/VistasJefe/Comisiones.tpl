{include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Comisiones</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?controller=User&method=CrearComision" class="col s12  center aling">
    <h5>Crear Codigo Personal</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsComi" type="text" class="validate" name="codUsComi" required=""/>
          <label for="codUsComi">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valcomi" type="text" name="valcomi" class="validate" requiered=""/>
     <label for="valcomi">Valor de la Comision</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
{include file="Cabeceras/Footer.tpl"}