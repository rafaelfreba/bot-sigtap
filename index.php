<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--SweetAlert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Arquivos customizados-->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

    <title>Web Scraping SIGTAP</title>

</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        <h5 class="card-title">Web Scraping SIGTAP</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Tabela de Procedimentos do SUS</h6>
                        <p class="card-text">Rotina automatizada que realiza o download do arquivo ZIP inerente à última competência disponível do SIGTAP</p>
                    </div>
                    <div class="card-footer">
                        <!--loading-->
                        <h6 class="text-center" style="display:none;" id="loading">
                            <div class="lds-ellipsis">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </h6>
                        <!--button-->
                        <div class="d-grid gap-2 text-center">
                            <a href="#" class="btn btn-outline-primary" id="start">start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>