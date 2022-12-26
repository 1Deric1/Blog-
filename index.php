<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deric</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: gray;
        }

        .img-card {
            max-height: 800px;
            height: 100%;
        }

        #cards h1 {
            margin-bottom: 50px;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('nav.php'); ?>
    <!--Carrosel de imagens-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/i1.jpg" class="d-block w-100" alt="imagem blog">
            </div>
            <div class="carousel-item">
                <img src="images/i2.png" class="d-block w-100" alt="imagem blog">
            </div>
            <div class="carousel-item">
                <img src="images/i3.jpg" class="d-block w-100" alt="imagem blog" width="50">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--Cards-->
    <!-- início card -->
    <div class="container" id="cards">
        <h1 style="margin-top: 40px;">Posts</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($results as $post) : ?>
                <div class="col gy-5">
                    <div class="card">
                        <img src="<?= $post["image"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $post["title"] ?>
                            </h5>
                            <p class="card-text">
                                <?= $post["description"] ?>
                            </p>
                            <a href="viewPost.php?id=<?= $post["id"] ?>">
                                <ion-icon name="eye-outline" size="large"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- fim card -->


        <!-- footer -->
        <?php include "footer.php"; ?>

</body>

</html>