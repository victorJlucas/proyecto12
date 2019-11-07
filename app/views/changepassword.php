<?php include_once 'header.php' ?>
	<div class="card p-4 bg-light">
		<div class="card-header">
			<h1 class="text-center"><?= $data['subtitle'] ?></h1>
		</div>
		<div class="card-body">
			<form action="<?= ROOT ?>login/changePassword/<?= $data['data'] ?>" method="POST">
				<div class="form-group text-left">
					<label for="password1">Contraseña:</label>
					<input type="password" name="password1" id="password1" class="form-control" required placeholder="Escriba su contraseña">
				</div>
				<div class="form-group text-left">
					<label for="password2">Repita su contraseña:</label>
					<input type="password" name="password2" id="password2" class="form-control" required placeholder="Repita su contraseña">
				</div>
				<div class="form-group text-left">
					<input type="submit" value="Cambiar contraseña" class="btn btn-success">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<div class="row">
				<a href="<?= ROOT ?>login" class="btn btn-info">Regresar</a>
			</div>
		</div>
	</div>
<?php include_once 'footer.php' ?>