{include file="Cabeceras/Header.tpl"}
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
  </div>
</nav>

    <div class="row" class="center-align">
    <form  method="post" action="?controller=Usr&method=UsuarioExistente" class="col s12">

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

  <ul class="pagination">
    <li class="active"><a href="?controller=User&method=IrLogin">Login</a></li>
    <li class="waves-effect"><a href="?controller=User&method=IrRegistro">Registro</a></li>
  </ul>

  
{include file="Cabeceras/Footer.tpl"}