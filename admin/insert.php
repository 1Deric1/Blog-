<?php
include "session.php";
include "header.php";

$stmt = $conectar->prepare("SELECT * FROM category");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
    <main>
        <div class="container">
            <form method="post" action="envia.php" enctype="multipart/form-data">

                <div>
                    <label for="text">Título</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o titulo">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div>
                    <label for="text">Data </label>
                    <input type="date" class="form-control" name="data" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a data">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div>
                    <label for="text">Descrição</label>
                    <input type="text" class="form-control" name="description" id="Description" aria-describedby="emailHelp" placeholder="Digite a descrição">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                    <select class="form-control" name="category" id="category" aria-label="Default select example">
                        <option selected>Abra para selecionar a categoria...</option>
                        <?php foreach ($results as $category) : ?>
                            <option value="<?= $category['id_cat'] ?>">
                                <?= $category['name_cat'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="exampleFormControlFile1">Envia a imagem </label>
                    <input type="file" class="form-control-file" name="imagem" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Publicar</button>
            </form>
        </div>
    </main>
</body>

</html>