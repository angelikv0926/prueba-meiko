<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 18:22:42
  from 'C:\xampp\htdocs\prueba-meiko\templates\_main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e29d6624b4836_19388553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea900482f58009b58bd21bb94fa1a17dcca3cdcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba-meiko\\templates\\_main.html',
      1 => 1579786038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29d6624b4836_19388553 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
	<form name="frm_listado">
		<br>
		<a href="creacion_usuarios.php" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Agregar usuario&nbsp;&nbsp;</a>
		<br><br><br>
		<table class="table">
			<thead>
				<tr>
					<th>Nombres</th>
					<th>E-mail</th>
					<th>Pais</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody id="tbody_listado">
				<?php echo utf8_encode($_smarty_tpl->tpl_vars['tbody']->value);?>

			</tbody>
		</table>
	</form>
</div><?php }
}
