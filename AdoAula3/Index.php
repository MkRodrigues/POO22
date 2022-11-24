<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ADO Aula 3 - Classes </title>
</head>

<body>
    <center>
        <form action="index.php" method="post" enctype="multipart/form-data" class="container">

            <div class="">
                <label for="">Peso</label>
                <input type="text" class="form-control" name="peso">
            </div>
            <div class="">
                <label for="">Altura</label>
                <input type="text" class="form-control" name="altura">
            </div>

            <div class="">
                <label for="">IMC</label>
                <input type="text" class="form-control" name="imc">
            </div>
            <div class="">
                <button class="btn btn-success btn-lg">Confirmar</button>
                <button class="btn btn-danger btn-mg">Limpar</button>
            </div>
            <div class="">
                <?php
                require_once("imc.php");
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];

                $imc = new Imc;
                $imc->getImc($peso, $altura);
                $resultado = $imc->getStatus();
                ?>
            </div>
        </form>
    </center>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>