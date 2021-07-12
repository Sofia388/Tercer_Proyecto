{include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Beneficio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?controller=User&method=CrearBeneficio" class="col s12  center aling">
    <h5>Pagar Beneficio</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsBene" type="text" class="validate" name="codUsBene" required=""/>
          <label for="codUsBene">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valbene" type="text" name="valbene" class="validate" requiered=""/>
     <label for="valbene">Valor del Beneficio</label>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="motivo" type="text" name="motivo" class="validate" requiered=""/>
    <label for="motivo">Motivo del Beneficio</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
{include file="Cabeceras/Footer.tpl"}