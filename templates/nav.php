<?php include  __DIR__ . '/../templates/config.php' ?> 
<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/dev-christiano/img/dev-logo.png" alt="Logo" width="50" height="44" class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="home" href="<?= BASE_URL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="Sobre mim" href="<?= BASE_URL ?>pages/sobre.php">Sobre mim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="Meus projetos" href="<?= BASE_URL ?>pages/projetos.php">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="Contato" href="<?= BASE_URL ?>pages/contato.php">Contato</a>
                </li>
            </ul>
        <span class="navbar-text">
        Tenha sua solução na web!
        </span>
        </div>
    </div>
</nav>