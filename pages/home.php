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
        <div class="col text-start">
            <div class="animation-typing text-center p-2 w-100">Olá, meu nome é Christiano</div>
            <section id="conhecimentoWordpress">
                <div class="d-flex flex-row mb-3 align-items-center">
                    Meu conhecimento em <i class="bi bi-wordpress h2 p-1"></i>
                </div> 
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: 75%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"><i class="bi bi-wordpress"></i></div>
                </div>
            </section>
            <div class="offcanvas offcanvas-start show text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasDarkLabel">Offcanvas</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvasDark" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Place offcanvas content here.</p>
  </div>
</div>
        </div>
    </div>
</div>


<?php
include  __DIR__ . '/../templates/footer.php';
?>