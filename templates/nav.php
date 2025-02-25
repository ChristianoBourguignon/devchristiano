<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
<<<<<<< HEAD
            <img src="<?php BASE_URL ?>img/dev-logo.png" alt="Logo" width="50" height="44" class="d-inline-block align-text-top">
=======
            <img src="<?= BASE_URL ?>img/dev-logo.png" alt="Logo" width="50" height="44" class="d-inline-block align-text-top">
>>>>>>> 2005cf35f8d0bc353cc37adc524f268c2353ccd7
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] == BASE_URL ? 'active' : '') ?>" aria-current="home" href="<?= BASE_URL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] === BASE_URL . 'pages/sobre.php' ? 'active' : '') ?>" aria-current="Sobre mim" href="<?= BASE_URL ?>pages/sobre.php">Sobre mim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] === BASE_URL . 'pages/projetos.php' ? 'active' : '') ?>" aria-current="Meus projetos" href="<?= BASE_URL ?>pages/projetos.php">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] === BASE_URL . 'pages/contato.php' ? 'active' : '') ?>" aria-current="Contato" href="<?= BASE_URL ?>pages/contato.php">Contato</a>
                </li>
            </ul>
        <span class="navbar-text">
        Tenha sua solução na web!
        </span>
        </div>
    </div>
</nav>