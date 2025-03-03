<footer class="bg-dark text-white text-center py-2 w-100">
    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <a href="https://github.com/ChristianoBourguignon/" class="text-white mx-3">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/christiano-bourguignon-228a37181/" class="text-white mx-3">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <div class="mb-3">
            <img src="<?php BASE_URL ?>img/dev-logo.png" alt="Logo" class="img-fluid" style="max-height: 50px; width: auto;">
        </div>
        <p class="mb-0">&copy; <?php print date("Y"); ?> Todos os direitos reservados.</p>
    </div>
</footer>

<?php
include __DIR__ . '/../templates/footer_scripts.php';
?>
</body>
</html>