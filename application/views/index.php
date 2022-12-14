<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'], "Symbian");
if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
    $mobile_view = 1;
} else {
    $mobile_view = 0;
}
?>


<link media rel="stylesheet" href="<?php echo base_url('resources/css/'); ?>style.css">

<style>
    .carousel-caption {
        bottom: 82px !important;
    }

    .cards {
        border-radius: 5px;
        box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
        transition: all 0.3s ease-out;
        border: 0;
    }

    .cards:hover {
        transform: translateY(-5px);
    }

    .card p {
        color: gray;
        font-size: 14px;
        text-align: center;
    }

    .image-card {
        max-width: 50%;
        height: auto;
    }

    .title {
        /* text-align: center; */
        font-size: 25px;
        color: black;
    }

    .sub-title {
        text-align: center;
        font-size: 20px;
        color: black;
    }

    .image {
        max-width: 50%;
        height: auto;
    }

    .text-about {
        font-size: medium;
    }

    .background-about {
        width: 100%;
    }

    .title-text {
        font-size: 30px;
        color: black;
    }

    .img-fluid {
        max-width: 80%;
    }
</style>


<main style="position: relative; background: white;">
    <div class="section-content">
        <div class="container-fluid p-3">
            <div class="row justify-content-center pt-5">

                <div class="row w-100 p-5 m-5 background-about">
                    <div class="col-md-4">
                        <img class="img-fluid" src="<?php echo base_url('imagens/logo/l7.png') ?>">
                    </div>
                    <div class="col-md-8 row align-items-center">
                        <h4 class="title-text float-left">Conhe??a a editora:</h4>
                        <p class="text-about float-left">
                            Katana Editora ?? uma empresa familiar que teve origem na necessidade de publicar seus livros de forma que os autores/escritores se sentissem valorizados e pertencentes ?? fam??lia Katana.
                            Esse acolhimento ocorre desde os primeiros contatos, passando os escritores a fazer parte da fam??lia, logo todas as a????es e movimenta????es da Katana Editora com seus clientes se torna pessoal e visa o benef??cio de todos.
                            Assim, fa??a parte da fam??lia Katana, a Editora que cuida dos seus clientes e investe na cultu
                        </p>
                    </div>
                </div>.

                <div class="row w-100 p-5">
                    <div class="col-md-4">
                        <div class="card cards h-100">
                            <div class="card-body">
                                <h4 class="card-title">Miss??o:</h4>
                                <p class="card-text">
                                    A Katana Editora tem como miss??o facilitar o processo de publica????o de uma obra aumentando a intera????o entre o autor e a Editora. Al??m de valorizar os autores, fazendo uma parceria onde ambas as partes se beneficiam financeiramente desde o in??cio do processo, ou seja, valorizando o tempo e dedica????o que o autor desprendeu para a cria????o de sua obra.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card cards h-100">
                            <div class="card-body">
                                <h4 class="card-title">Vis??o:</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card cards h-100">
                            <div class="card-body">
                                <h4 class="card-title">Valores:</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="title">Adquira nosso livro:</h3>
                <div class="row w-100 p-5">
                    <?php foreach ($destaques as $row) { ?>
                        <div class="col-md-3">
                            <div class="card zoom h-100">
                                <div class="card-body">
                                    <a href="<?php echo base_url('e9b8ed001f1726b0385dcfec2dbe2ea1/') . $row['servico_id'] ?>">
                                        <div class="text-center">
                                            <div class="text-center col-md-12">
                                                <img class="image-card" src="<?php echo base_url($row['servico_imagem']) ?>">
                                            </div>
                                            <h4 class="m-4 p-0 title text-center">
                                                <?php echo ucfirst($row['servico_nome']) ?>
                                            </h4>
                                            <p class="card-text text-justify w-75 mx-auto">
                                                <?php echo ucfirst($row['servico_resumo']) ?>
                                            </p>
                                            <h6 class="card-text sub-title">
                                                <?php echo ucfirst($row['servico_subtitulo']) ?>
                                                | R$ <?php echo number_format($row['servico_valor'], 2, ',', '.') ?>
                                            </h6>
                                            <button class="btn btn-primary w-75 mx-auto text-uppercase">
                                                <span>Comprar</span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>