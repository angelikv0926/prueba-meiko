/**
*	ARCHIVO:	validacion.js
*	FECHA:		Marzo 3 de 2007
*	AUTOR:		Uriel Alejandro Moreno alejandregolas@gmail.com
*	DESCRIPCION:Validacion de eventos complementaria a validacion pre envio
*/
/**	
*	FUNCION DE VALIDACION DE MULTIPLES EXPRESIONES REGULARES CUANDO SE PRESIONA UNA TECLA EN UN INPUT
*	@param	e: evento recibido desde el html
*	@param	expresion: expresion regular a ser verificada
*/
function CampoVacio(campo,mensaje){
	if(campo.value==null || campo.value==""){
		alert("Campo Vacio\n"+mensaje);
		campo.focus();
		campo.className="falta";
		return true;
	}
	return false;
}
/**
*	FUNCION DE VALIDACION ANTES DEL ENVIO DE CAMPOS DE FORMULARIO POR MEDIO DE EXPRESIONES REGULARES
*	@param:	campo: nombre del campo a validar <html object>
*	@param:	expresion: expresion regular a validar sobre el campos
*	@param:	mesaje de informacion cuando falla la validacion
*/
function PreEnvio(campo,expresion,mensaje){
	numcheck=new RegExp(expresion);
	if(!numcheck.test(campo.value) && campo.value!=null && campo.value!=""){
		alert(mensaje);
		campo.focus();
		campo.className="falta";
		return false;
	}
	return true;
}
/**
*	FUNCION DE VALIDACION DE TECLAS PRESIONADAS SOBRE EXPRESIONES REGULARES
*	@param	e:Evento a validar
*	@param	expresion: expresion regular que indica los caracteres permitidos en un campo
*/
function Pulsacion(e,expresion){
	var keynum=null;
	if(window.event){//IE
		keynum = e.keyCode;
	}else if(e.which){//FRFX Moz
		keynum = e.which;
	}
	if(keynum==8 || keynum==null){
		return true;
	}
	numcheck = new RegExp(expresion);
	return numcheck.test(String.fromCharCode(keynum));
}
/**
*	FUNCION PARA LA VALIDACION DE CAMPOS DE FORMULARIO QUE SOLO DEBEN MANTENER DIRECCIONES DE CORREO
*	@param	campo: objeto input sobre el cual se va validar si su contenido corresponde a una direccion de correo electronico valido
*/
function CorreoCorrecto(campo){
	correo=/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	if(!correo.test(campo.value)){
			alert("Correo incorrecto");
			campo.focus();
			campo.className="falta";
			return false;
	}
	return true;
}
/**
*	FUNCION PARA LA VALIDACION DE LISTAS OBLIGATORIAS EN FORMAuLARIOS
*	@param	campo: objeto input de un formulario
*	@param	noValido: Valor a verificar para indicar que la validacion fallo
*	@param	mensaje: alert a mostrar si la validacion fallo
*/
function ListaValida(campo,noValido,mensaje){
	if(campo.value==noValido){
			alert("Lista no seleccionada\n"+mensaje);
			campo.className="falta";
			campo.focus();
			return false;
	}
	return true;
}
/**
*	FUNCION PARA VALIDAR EL NUMERO DE CARACTERES
*	PRESIONADOS EN UN AREA DE TEXTO
*/
function ContarCaracteres(field,countfield,maxlimit){
	if (field.value.length > maxlimit) // if too long...trim it!
	field.value = field.value.substring(0, maxlimit);
	// otherwise, update 'characters left' counter
else
	countfield.value = maxlimit - field.value.length;
}
function OcultarCapa(id){document.getElementById(id).style.display='none';}
function MostrarCapa(id){document.getElementById(id).style.display='';}
function addSrcToDestList(destList,srcList) {
	var len = destList.length;
	for(var i = 0; i < srcList.length; i++) {
	if ((srcList.options[i] != null) && (srcList.options[i].selected)) {
	//Check if this value already exist in the destList or not
	//if not then add it otherwise do not add it.
	var found = false;
	for(var count = 0; count < len; count++) {
		if (destList.options[count] != null) {
			if (srcList.options[i].text == destList.options[count].text) {
				found = true;
				break;
			}
		}
	}
	if (found != true) {
	destList.options[len] = new Option(srcList.options[i].text,srcList.options[i].value);
	len++;
		 }
	  }
   }
}
	
function deleteFromDestList(destList) {
	var len = destList.options.length;
	for(var i = (len-1); i >= 0; i--) {if((destList.options[i] != null) && (destList.options[i].selected == true)){destList.options[i] = null;}}
}
	
function limpiarSrcList(srcList){
	var len = srcList.options.length;
	for(var i = (len-1); i >= 0; i--){srcList.options[i] = null;}
}
/*
funcion javascript para la comparacion de dos fechas
*/	
function compararFechasJS2(Obj1,Obj2){
	/*Compara dos fechas de entrada en formato dd/mm/aaaa, convirtiendolas a formato mm/dd/aaaa*/
	fec1string=Obj1.split("-");
	fec2string=Obj2.split("-");
	auxfec1=Date.parse(fec1string[1]+"/"+fec1string[0]+"/"+fec1string[2]);
	auxfec2=Date.parse(fec2string[1]+"/"+fec2string[0]+"/"+fec2string[2]);
	if(auxfec1>auxfec2){return 1;}else{return 0;}
}
function cambiaClase(obj,clase1,clase2){if(obj.className==clase1){obj.className=clase2;}else{obj.className=clase1;}}
function cambiaClaseGrid(obj,clase1){if(obj.className==clase1){obj.className='gridC';}else{obj.className=clase1;}}