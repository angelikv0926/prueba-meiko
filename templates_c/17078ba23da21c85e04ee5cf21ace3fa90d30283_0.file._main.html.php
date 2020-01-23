<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 16:45:40
  from 'C:\xampp\htdocs\nuevo\templates\_main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e29bfa44cb024_47373350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17078ba23da21c85e04ee5cf21ace3fa90d30283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\templates\\_main.html',
      1 => 1579786038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29bfa44cb024_47373350 (Smarty_Internal_Template $_smarty_tpl) {
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
