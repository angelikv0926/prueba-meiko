<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 18:23:07
  from 'C:\xampp\htdocs\prueba-meiko\templates\_mainUsuario.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e29d67b044ac6_73481842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd11216fd383b0d24d8363a87875f5ac04e67bcec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba-meiko\\templates\\_mainUsuario.html',
      1 => 1579798055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29d67b044ac6_73481842 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
	<form name="frm_datos">
		<table class="table">
			<thead>
				<tr>
					<th>Nombres</th>
					<th>E-mail</th>
					<th>Pais</th>
				</tr>
			</thead>
			<tbody id="tbody_listado">
				<?php echo utf8_encode($_smarty_tpl->tpl_vars['tbody']->value);?>

			</tbody>
		</table>
	</form>
</div><?php }
}
