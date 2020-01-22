<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creacion de usuarios</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar Usuario</h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php

				include ("conexion.php");
				$usuario = new Database();
				if(isset($_POST)){
					$nomn_usu = $usuario->limpiar($_POST['nomn_usu']);
					$ape_usu = $usuario->limpiar($_POST['ape_usu']);
					$email = $usuario->limpiar($_POST['email']);
					$pais = $usuario->limpiar($_POST['pais']);
					$pass_usu = $usuario->limpiar($_POST['pass_usu']);
					
					$res = $usuario->crearUsuario($nomn_usu, $ape_usu, $email, $pais, $pass_usu);
					if($res){
						$message = "Datos insertados";
					}else{
						$message = "Datos NO insertados";
					}
					?>
				<div class="info">
					<?php echo $message;?>
				</div>
					<?php
				}
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombres:</label>
					<input type="text" name="nomn_usu" id="nomn_usu" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Apellidos:</label>
					<input type="text" name="ape_usu" id="ape_usu" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-12">
					<label>E-Mail:</label>
					<input type="text" name="email" id="email" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-6">
					<label>Pais:</label>
					<input type="text" name="pais" id="pais" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-6">
					<label>Clave:</label>
					<input type="email" name="pass_usu" id="pass_usu" class='form-control' maxlength="64" required>
				
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>