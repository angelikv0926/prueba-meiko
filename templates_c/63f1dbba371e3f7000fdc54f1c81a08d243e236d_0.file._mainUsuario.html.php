<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 17:47:36
  from 'C:\xampp\htdocs\nuevo\templates\_mainUsuario.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e29ce28e92393_03317767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63f1dbba371e3f7000fdc54f1c81a08d243e236d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\templates\\_mainUsuario.html',
      1 => 1579798055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29ce28e92393_03317767 (Smarty_Internal_Template $_smarty_tpl) {
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
