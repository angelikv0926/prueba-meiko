<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 18:05:06
  from 'C:\xampp\htdocs\nuevo\templates\_crearUsuario.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e29d242e254b8_75178359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0db0220d69b25bf4495389359acc2f4ec78ecc04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\templates\\_crearUsuario.html',
      1 => 1579799096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29d242e254b8_75178359 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
	<form>
		<h2>Agregar Usuario</h2>
		<a href="main_admin.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Regresar&nbsp;&nbsp;</a>
		<br><br><br>
	</form>
	
	<form method="post" action="crearUsuario.php">
		<div class="col-md-12">
			<label>Nombres:</label>
			<input type="text" name="nomn_usu" id="nomn_usu" class='form-control' maxlength="100" required >
		</div>
		<div class="col-md-12">
			<label>Apellidos:</label>
			<input type="text" name="ape_usu" id="ape_usu" class='form-control' maxlength="100" required>
		</div>
		<div class="col-md-12">
			<label>E-Mail:</label>
			<input type="email" name="email" id="email" class='form-control' maxlength="64" required>
		</div>
		<div class="col-md-12">
			<label>Pais:</label>
			<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

		</div>
		<div class="col-md-12">
			<label>Clave:</label>
			<input type="password" name="pass_usu" id="pass_usu" class='form-control' maxlength="10" required>
		</div>
		<div class="col-md-12">
			<button type="submit" id="btn_grabar" class="btn btn-success">&nbsp;&nbsp;Guardar&nbsp;&nbsp;</button>	
		</div>
	</form>
</div>

<?php }
}
