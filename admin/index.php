<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style-index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Painel Administrativo</title>

</head>

<body class="text-center">
    <main class="form-login">
        <form method="post" action="logar.php">
            <img class="mb-4" src="../images/icon.png" alt="" width="70" height="70">
            <h3 class="h3">Painel Administrativo</h3>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Login</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="login" placeholder="Login">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Logar</button>
            </div>

        </form>
    </main>
   <!-- <main class="form-login">
        <form method="post" action="logar.php">
            <img class="mb-4" src="../images/logo.png" alt="" width="70" height="70">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Login</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="login" placeholder="Login">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Logar</button>
            </div>
        </form>

    </main>-->

</body>

</html>