<?php
// O uso de __DIR__ obtém o caminho absoluto do diretório atual (pages/)
// e o uso de '/../' volta um nível, permitindo incluir o arquivo no diretório templates/.
include __DIR__ . '/../templates/header_tags.php';
?>

<div class="container text-center py-2">
    <div class="row">
        <div class="col">
            <img src="<?= BASE_URL ?>img/person.jpeg" class="rounded img-fluid" alt="Pessoa">
        </div>
        <div class="col text-start">
            olá
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> </div>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
            <div class="progress-bar" style="width: 25%"></div>
        </div>
    </div>
</div>
</div>

<?php
include  __DIR__ . '/../templates/footer.php';
?>