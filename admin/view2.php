<?php
include_once('../config/connection.php');

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<?php
include('../config/connection.php');
include('session.php');
$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<?php

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>

<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 id="main-title">Meus Posts</h1>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $post) : ?>
                    <tr>
                        <td scope="row">
                            <?= $post["id"] ?>
                        </td>
                        <td scope="row">
                            <?= $post["title"] ?>
                        </td>
                        <td scope="row">
                            <?= $post["description"] ?>
                        </td>
                        <td class="actions">
                            <a href="viewBlog.php?id=<?= $post["id"] ?>">
                                <ion-icon name="eye">Ver</ion-icon>
                            </a>
                            <a href="editar.php?id=<?= $post["id"] ?>">
                                <ion-icon name="create">Editar</ion-icon>
                            </a>
                            <a href="delete.php?id=<?= $post["id"] ?>">
                                <ion-icon name="trash"></ion-icon>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
</div>
</div>

<?php include('footer.php'); ?>