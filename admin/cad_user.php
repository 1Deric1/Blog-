<?php
include "session.php";
include "header.php";
?>
<form action="cad_userOK.php" method="POST" class="pt-5 pb-5">
	<h1>Cadastro de usuários</h1>	
	<div class="mb-3">
  	  <label class="form-label">Digite o nome do usuario</label>
	  <input type="text" class="form-control" name="nome">
	</div>
	<div class="mb-3">
  	  <label class="form-label">Digite o login do usuario</label>
	  <input type="text" class="form-control" name="login">
	</div>
	<div class="mb-3">
  	  <label class="form-label">Digite a senha do usuario</label>
	  <input type="password" class="form-control" name="senha">
	</div>
<div class="mb-3">
		<button type="submit" class="btn btn-dark">Cadastrar Usuário</button>
	</div>
</form>

<?php include "footer.php";?>
Footer
© 2022 GitHub, Inc.
Footer navigation

    Terms
    Privacy
    Security