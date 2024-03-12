<?php include_once("validador.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAP - Cadastro Concluído</title>
    <link rel="shortcut icon" href="images/logoIcone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../css/estilo-cadastro-concluido.css">
    <link rel="icon" type="../images/logo-sistema.png" href="../images/logo-sistema.png" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card border-0 shadow rounded-3">
                <div class="card-body p-4 p-sm-4">
                    <img class="logo" src="../images/logo-sistema.png" width="60px">
                    <center>

                        <h1>Cadastro concluído com sucesso!</h1>
                        <?php
                        include_once("validador.php");
                        $nome = $_POST['txtNome'];
                        $cpf = $_POST['txtCpf'];
                        $rg = $_POST['txtRg'];
                        $email = $_POST['txtEmail'];
                        $turma = $_POST['slTurm'];

                        $vetorAluno = array(
                            'txtNome' => $nome,
                            'txtCpf' => $cpf,
                            'txtRg' => $rg,
                            'slTurm' => $turma,
                            'txtEmail' => $email
                        );

                        $day = date('d');
                        $month = date('m');
                        $Year = date('y');


                        switch ($turma) {
                            case 1:
                                $turma = "1º DS A";
                                break;
                            case 2:
                                $turma = "1º DS A";
                                break;
                            case 3:
                                $turma = "2º DS A";
                                break;
                            case 4:
                                $turma = "3º DS A";
                                break;
                        }

                        echo ("O Aluno(a) " . $nome . " da turma " . $turma . ", foi cadastrado com sucesso!");
                        echo ("<br> Registro concuído ás " . date("d/m/Y") . ", ás " . date("H:i:s"));
                        /*echo ("<br> TESTE: RG: " . $rg . "; CPF: " . $cpf . "; Email: " . $email . ". ");*/

                        ?>
                        <br>
                        <br>
                        <a style="margin-right: 75%;" href="../logout.php" class="btn btn-outline-danger" role="button" aria-pressed="true" type='button'>Sair</a>
                        <a href="../area-restrita/cadastro-aluno.php" value="Voltar" class="btn btn-warning">Voltar</a>


                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>