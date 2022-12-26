<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
        body {
            background-color: #BAFFF1;
        }

        h2 {
            color: red;
        }

        #sidebarMenu {
            height: 100%;
        }

        nav {
            padding-bottom: 35%;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
        }

        nav .nav-item a {
            color: red;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        nav .nav-item:hover {
            color: orange;
        }

        h3 {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        p a {
            color: red;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        p a:hover {
            color: gold;
        }

        li a {
            text-decoration: none;
        }

        #main-title {
            color: red;
        }

        tr th {
            color: red;
        }

        tr td {
            color: blue;
        }

        tr td a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white" style="background-color: rgba(23, 0, 95, 0.8);">
                <h2>Bem vindo,</h2>
                <h3>
                    <?php echo $_SESSION['nome']; ?>
                </h3>
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <a href="view2.php" class="nav-item"><ion-icon name="analytics-outline"></ion-icon>Dashboard</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="insert.php" class="nav-item"><ion-icon name="add-circle-outline"></ion-icon>Inserir</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="cad_user.php" class="nav-item"><ion-icon name="add-outline"></ion-icon>Cadastrar
                            Usuário</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="cat_add.php" class="nav-item"><ion-icon name="duplicate-outline"></ion-icon>Adicionar categoria</a>
                    </li>
                </ul>
                <p><a href="?sair"><ion-icon name="exit-outline"></ion-icon>Deslogar</a></p>
            </nav>
            <main class="col-md-9 col-lg-10 pt-5 pb-5">
                <div class="container">