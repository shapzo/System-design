<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <a class="navbar-brand" href="../../Admin.php">Inico</a>
            <li class="nav-item active">
                <a class="nav-link" href="'.$activa.'"></a>
        </li>
          
          <li class=" nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Menu Autores
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="frmCrearAutor.php">Crear</a>
                        <a class="dropdown-item" href="frmModificarAutor.php">Editar</a>
                        <!--<a class="dropdown-item" href="listarMenufrmUsu.php">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="frmAltaUsu.php">Dar de alta</a>
                        <a class="dropdown-item" href="frmBajaUsu.php">Dar de baja</a>-->
                    </div>
            </li>
        </ul>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Busqueda" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
</nav>