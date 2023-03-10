<?php
include_once('session.php');
include "header.php";
include_once('../config/connection.php');
$stmt = $conectar->prepare('SELECT * FROM category');

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>


<form action="cat_insert.php" method="post" enctype="multipart/form-data">
    <div class="container pt-3 pb-3">
        <div>
            <h1>Inserir categoria:</h1>
        </div>
        <div class="container">
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>


                <tbody>
                    <?php foreach ($results as $post) : ?>
                        <tr>
                            <td scope="row">
                                <?= $post["id_cat"] ?>
                            </td>
                            <td scope="row">
                                <?= $post["name_cat"] ?>
                            </td>
                            <td class="actions">
                                <a href="deletar_cat.php?id=<?= $post["id_cat"] ?>">
                                    <ion-icon name="trash"></ion-icon>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <label for="newCat" class="form-label">Nova categoria</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="nova" id="nova" aria-describedby="basic-addon3" placeholder="Digite o título" required>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">ENVIAR</button>
        </div>
    </div>
</form>
<?php

include "footer.php";

?>