<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 18:13:49
  from 'C:\xampp\htdocs\prueba-meiko\templates\_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e29d44d6badd9_70642034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17e9c607761f11c43bf5773331359e79314f125d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba-meiko\\templates\\_login.html',
      1 => 1579746688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29d44d6badd9_70642034 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row-fluid" id="contenido-interno">
	<div class="row">
		<div class="span11 offset1">
			<div class="row">
				<h4>Ingreso</h4>
					<form class="form-signin" method="POST" action="validar.php">
						<div class="form-group">
							<label for="usuario">Usuario:</label>
							<input type="text" id="idusuario" name="usuario" class="form-control" placeholder="Ingrese su nombre de usuario" required >
						</div>
						<div class="form-group">
							<label for="pwd">Clave:</label>
							<input type="password" id="idclave" name="clave" class="form-control" placeholder="Ingrese su clave" required>
						</div>
						<button type="submit" class="btn btn-primary">&nbsp;&nbsp;Ingresar&nbsp;&nbsp;</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
