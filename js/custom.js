jQuery(document).ready(function(){
	if (jQuery('#sp-hora_legal').length > 0) {
		jQuery('#sp-hora_legal').append('<hr class="separate-line">');
	}
	jQuery('#sp-entidades-del-sector-wrapper').prepend('<h3 class="header"><span>Entidades del Sector</span></h3>');
});