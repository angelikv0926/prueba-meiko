<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Listado de usuarios</title>
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
                    <div class="col-sm-8"><h2>Listado de usuarios</h2></div>
                    <div class="col-sm-4">
                        <a href="creacion_usuario.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar usuario</a>
                    </div>
                </div>
            </div>
			
			<?php
				include ('conexion.php');
				$usuario = new Database();
				$lista = $usuario->consultarUsuarios();
			?>
			
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>E-mail</th>
                        <th>Pais</th>
						<th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
					<?php
						while ($row=mysqli_fetch_object($lista)){
						$id=$row->id;
						$nombres=$row->nomn_usu." ".$row->ape_usu;
						$email=$row->email;
						$pais=$row->pais;
					?>
					<tr>
						<td><?php echo $nombres;?></td>
						<td><?php echo $email;?></td>
						<td><?php echo $pais;?></td>
						<td>
							<a href="actualizar_usuario.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
							<a href="eliminar_usuario.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						</td>
					</tr>
					<?php
					}
					?>					
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>