<?php
// O uso de __DIR__ obtém o caminho absoluto do diretório atual (pages/)
// e o uso de '/../' volta um nível, permitindo incluir o arquivo no diretório templates/.
include __DIR__ . '/../templates/header_tags.php';
?>

<div class="container text-center py-2">
    <div class="row">
        <div class="col">
            <img src="img/person.jpeg" class="rounded img-fluid" alt="Pessoa">
        </div>
        <div class="col text-center">
            <div class="animation-typing p-2 w-100">Olá, meu nome é Christiano</div>
            <section class="mb-5">
                <div class="d-flex flex-row mb-3 align-items-center">
                    Meu conhecimento em <i class="bi bi-wordpress h2 p-1"></i>
                </div> 
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </section>
            <section class="mb-5">
                <div class="d-flex flex-row mb-3 align-items-center">
                    Meu conhecimento em <i class="bi bi-mortarboard-fill h2 p-1"></i> (Criação de Cursos)</i>
                </div> 
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: 81%" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">81%</div>
                </div>
            </section>
            <section class="mb-5">
                <div class="d-flex flex-row mb-3 align-items-center">
                    Meu conhecimento em <i class="bi bi-filetype-php h2 p-1"></i></i>
                </div> 
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: 81%" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">81%</div>
                </div>
            </section>
        </div>
    </div>
</div>


<?php
include  __DIR__ . '/../templates/footer.php';
?>