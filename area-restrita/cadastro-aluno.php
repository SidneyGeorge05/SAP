<?php include_once("validador.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAP - Cadastro Aluno</title>
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
                    <a style="margin-left: 90%; margin-top:0%" href="../logout.php" class="btn btn-outline-danger" role="button" aria-pressed="true" type='button'>Sair</a>
                    
                    <center>
                        <h1>Cadastro Aluno</h1>
                        <form action="cadastro-concluido.php" method="post">
                            <input class="form-control" type="text" name="txtNome" id="txtNome" placeholder="Nome">
                            <br>
                            <input class="form-control" type="text" name="txtCpf" id="txtCpf" placeholder="CPF">
                            <br>
                            <input class="form-control" type="text" name="txtRg" id="txtRg" placeholder="RG">
                            <br>
                            <input class="form-control" type="email" name="txtEmail" id="txtEmail" placeholder="Email">
                            <br>
                            <select class="form-select" aria-label="Default select example" name="slTurm" id="slTurm">
                                <option selected>Selecione a turma</option>
                                <option value="1">1º DS B</option>
                                <option value="2">1º DS B</option>
                                <option value="3">2º DS A</option>
                                <option value="4">3º DS A</option>
                            </select>
                            <br>
                            <a href="../area-restrita/index-restrita.php"  value="Voltar" class="btn btn-warning">Voltar</a>
 
                            <button type="submit" value="Cadastrar" class="btn btn-success">Cadastrar</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>