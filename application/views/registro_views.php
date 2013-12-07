<html>
	<head>
		
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title></title>
	</head>

	<body>
		<h1>Registrar Usuario</h1>
		<?php if(isset($mensaje)):?>
		<h2><?= $mensaje;?></h2>
		<form name="form_reg" action="<? = base_url().'usuario/registro_very'?>" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?= @set_value('nombre') ?>" /><br />

			<label for="correo">Correo</label>
			<input type="text" name="correo" value="<?= @set_value('correo') ?>/><br />

			<label for="usurio">Usuario</label>
			<input type="text" name="usuario" value="<?= @set_value('user') ?>/><br />

			<label for="contraseña">contraseña</label>
			<input type="password" name="contraseña" value="<?= @set_value('pass') ?>/><br />

			<input type="submit" value="Registrar" name="submit_reg" />
			<a href='usuario/' title="Iniciar Sesion">Iniciar Sesión</a>
			
			</form>	
			<hr />
			<? = validation_errors(); ?>;
	</body>
</html>