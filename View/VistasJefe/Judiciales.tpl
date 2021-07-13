{include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Judiciales</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?controller=User&method=CrearJudiciales" class="col s12  center aling">
    <h5>Pagar los Judiciales</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsJud" type="text" class="validate" name="codUsJud" required=""/>
          <label for="codUsJud">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valJud" type="text" name="valJud" class="validate" requiered=""/>
     <label for="valJud">Valor de los Judiciales</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
{include file="Cabeceras/Footer.tpl"}