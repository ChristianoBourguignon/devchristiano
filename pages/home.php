<?php
// O uso de __DIR__ obtém o caminho absoluto do diretório atual (pages/)
// e o uso de '/../' volta um nível, permitindo incluir o arquivo no diretório templates/.
include __DIR__ . '/../templates/header_tags.php';
?>

<div class="container-fluid">
    <h1>Home</h1>
    <p>Aqui esta minha página principal</p>
</div>

<?php
include  __DIR__ .'/../templates/footer.php';
?>
