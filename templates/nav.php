<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
            <img src="<?= BASE_URL ?>img/dev-logo.png" alt="Logo" width="50" height="44" class="d-inline-block align-text-top">
        </a>
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