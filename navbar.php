<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.jpg" class="d-inline-block align-top" alt="">
        </a>
    </nav>  

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Enlaces</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Desarrollo Web</a>
                    <a class="dropdown-item" href="#">Diseño</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Servidores</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Area Cliente</a>
            </li>
        </ul>
    </div>
    <!-- Button trigger modal -->
    <div class="div-navbar-button">
        <button type="button" class="btn btn-secondary bt-navbar-custom" data-toggle="modal" data-target="#loginModal">
            Login
        </button>
    </div>
    <!-- Button trigger modal -->
    <div class="div-navbar-button">
        <button type="button" class="btn btn-secondary bt-navbar-custom" data-toggle="modal" data-target="#registerModal">
            Registro
        </button>
    </div>
</nav>