<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADO Aula 13</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="container">
    <h1 class="h1 mt-5">Média de Aluno</h1>
    <form class="row mb-6 mt-5" name="FRM" action="index.php" method="post" enctype="multipart/form-data">
        <div class="col">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nomeAluno" value="<?= $aluno ?? ''?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nota 1</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nota1" value="<?= $nota1 ?? ''?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nota 2</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nota2" value="<?= $nota2 ?? ''?>">
            </div>
            <button type="submit" class="btn btn-primary container mb-5" name="btnEnviar">Enviar</button>
        </div>

        <div class="container">
        <?php

        require_once("MediaG.php");
        require_once("MediaA.php");

        if(isset($_POST['btnEnviar'])) {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $aluno = $_POST['nomeAluno'];

            $mg = new MediaG;
            $mg->setDados($nota1, $nota2, $aluno);
            $mediaG = $mg->calcularMediaGeometrica();
            echo "O aluno: $aluno, com as notas $nota1 e $nota2 teve as médias: <br> ";
            echo "<span> Média Geométrica é: {$mediaG} </span> <br>";

            $ma = new MediaA;
            $ma->setDados ( $nota1, $nota2, $aluno);
            $mediaA = $ma->calcularMediaAritmetica();
            echo "<span> Média Aritmética é: {$mediaA} </span>";
        }
        ?>
        </div>  

      </form>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>