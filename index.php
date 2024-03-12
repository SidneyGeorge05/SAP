<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAP</title>
    <link rel="shortcut icon" href="images/logoIcone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/estilo.css">
    <link rel="icon" type="../images/logo-sistema.png" href="../2605/images/logo-sistema.png" />


</head>

<body>
    <!--<form method="post" action="autenticaSessao.php">
            <label>Login</label>
            <input type="text" name="txtlogin">
            <br>
            <label>Senha</label>
            <input type="password" name="txtsenha">
            <br>
            <input type="submit" value="Acessar">
        </form>-->

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-6 p-sm-5">
                        <center>
                            <img class="logo" src="images/logo-sistema.png" width="150px">
                            <h5>Sistema Acadêmico Público</h5>
                        </center>
                        <br>
                        <form method="post" action="autenticaSessao.php">
                            <div class="form-floating mb-3">
                                <input type="text" name="txtlogin" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Login</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="txtsenha" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Senha</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" value="Acessar">Entrar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <center>
                <footer>
                <span> Criado por Tech Inovações | <span class="far fa-copyright"></span>© 2022 Todos direitos reservados</span>
                </footer>
            </center>

        </div>
    </div>
</body>

</html>