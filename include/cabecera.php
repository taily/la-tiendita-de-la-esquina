<header id="cabecera">
   <div class="navbar">
      <div class="container">
         <a class="brand" href="#"><img src="img/logo.png" alt="Logo" id="imgLogo"/></a>
         <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <div class="pull-right nav-collapse collapse" style="">
            <ul class="nav span4" id="barraNavegacion" style="margin-right: -30px;">
               <li><a href="index.php?pag=loginRegist" class=""><i class ="icon-pencil pull-left" style="padding-right: 3px;"></i>Registrarse/Acceder</a></li>
               <li><a href="index.php?pag=car" class=""><i class ="icon-shopping-cart pull-left" style="padding-right: 3px;"></i>Carrito</a></li>
               <li><a href="index.php?pag=help" class=""><i class ="icon-info-sign pull-left" style="padding-right: 3px;"></i>Ayuda</a></li>
            </ul>
         </div>
         <div id="formularioSuperiorBusqueda" class="span5 pull-right">
            <form action="" method="post" class="form-search pull-right">
               <select id="categoriasBusqueda" class="span2">
                  <option value="libre">Categor&iacute;as</option>
                  <option value="abarrotes">Abrarrotes</option>
                  <option value="bebidas">Bebidas</option>
                  <option value="cuidado">Cuidado Personal</option>
                  <option value="desayuno">Desayuno</option>
                  <option value="embutidos">Embutidos</option>
                  <option value="enlatados">Enlatados</option>
                  <option value="gg">Galletas y golosinas</option>
                  <option value="licores">Licores</option>
                  <option value="limpieza">Limpieza</option>
                  <option value="sp">Snacks y Piqueos</option>
               </select>
               <input type="text" class="input-medium search-query span2 row" name="textoBusquedaPrincipal" placeholder="Búsqueda" id="buscon"></input>
               <a href="#" class="btn btn-danger"><i class ="icon-search pull-left" id="icBus"></i></a>
            </form>
         </div>
         <!-- /.nav-collapse -->
      </div>
   </div>
</header>