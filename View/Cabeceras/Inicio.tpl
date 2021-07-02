{include file="Cabeceras/Header.tpl"}
    
  <nav>

    <div class="nav-wrapper">
      <a href="#"  class="brand-logo center">Paguina para el Pago</a>
    </div>
  </nav>


    <div class="row">
    <form  method="post" action="?controller=Usr&method=UsuarioExistente" class="col s12">

    <div>
    <h1 align="center">Login</h1>
    </div>

      <div class="row" class="center-align">
         <div class="input-field col s5 s3 row offset-s2 center aling">
             <input id="NombreUser" type="text" class="validate" required="" name="NombreUser"/>
             <label for="NombreUser">Nombre de usuario</label>
            </div>
      </div>

      <div class="row" class="center-align">
         <div class="input-field col s5 s3 row offset-s2 center aling">
             <input id="password" type="password" class="validate" required="" name="password"/>
             <label for="password">Contraseña</label>
            </div>
      </div>


      <div class="row" class="center-align">
            <div class="input-field col s5 s3 row offset-s2 center aling">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>

</div>


{include file="Cabeceras/Footer.tpl"}