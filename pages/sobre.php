<?php
// O uso de __DIR__ obtém o caminho absoluto do diretório atual (pages/)
// e o uso de '/../' volta um nível, permitindo incluir o arquivo no diretório templates/.
include '../templates/header_tags.php';
?>

<div class="container-fluid">
    <h1>Sobre Mim</h1>
    <p>Esta é a página sobre mim.</p>
</div>

<?php
include '../templates/footer.php';
?>