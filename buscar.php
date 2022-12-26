<?php
include_once('config/connection.php');

$buscar = $_POST['buscar'];
$stmt = $conectar->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'");
$stmt->execute();
$search = $stmt->fetchAll();

?>

<?php include "nav.php";?>
<style>
	body{
		background-color: black;
	}
</style>
<div class="container pt-5">
	<h2 style="color: white;">Resultado da busca:</h2>
	<hr class="divider">
	<?php foreach($search as $key => $value): ?>
		<h5 class="card-title mb-3 pt-3">
		<a href="viewPost.php?id=<?= $value["id"] ?>">
			<?= $value["title"] ?>
		</a>
		</h5>
		<p style="color: white;"><?=$value['description']?></p>
	<?php endforeach; ?>
</div>

<?php include "footer.php";?>