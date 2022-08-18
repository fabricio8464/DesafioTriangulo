<?php
//Organizando as requisições de classe
require "./Controllers/Triangulo.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/public/css/style.css">
    <title>Desafio Triangulo</title>
</head>

<body style="margin:0; padding: 0px;">
    <div>
        <form action="./index.php" method="POST">
            <Label>Insira o numero de linhas que deseja para o triângulo:</Label>
            <input type="number" name="numTriangulos" min=1>
            <input type="submit" value="Criar Triângulo">
        </form>
    </div>
    <div class="container">
        <?php
        if (!empty($_POST["numTriangulos"])) {
            $numero = $_POST["numTriangulos"];

            $triangulo = new Triangulo($numero);
            $resultado = $triangulo->gerarTriangulo($numero);
        }
        ?>
    </div>
</body>

</html>