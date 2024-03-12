<?php include_once("validador.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAP - Área Restrita</title>
    <link rel="shortcut icon" href="images/logoIcone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../css/estilo-area-restrita.css">
    <link rel="icon" type="../images/logo-sistema.png" href="../images/logo-sistema.png" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="card border-0 shadow rounded-3">
                <div class="card-body p-4 p-sm-8">
                <img class="logo" src="../images/logo-sistema.png" width="60px">
                    <center>
                        <h2><?php echo ("Olá " . $_SESSION['login-sessao'] . "! Você acessou a área restrita."); ?></h2>
                        <br>      
                        <a  href="../logout.php" class="btn btn-outline-danger" role="button" aria-pressed="true" type='button'>Sair</a>
                        <a  href="../area-restrita/cadastro-aluno.php" class="btn btn-success" role="button" aria-pressed="true" type='button'>Cadastro de alunos</a>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>

</html>