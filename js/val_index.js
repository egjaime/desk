document.oncontextmenu = function(){return false}

function sendForm(){
    camp1 = document.getElementById("camp1");
    camp2 = document.getElementById("camp2");
    document.getElementById('MsjError').style.display ='none';
    document.getElementById('bt1').disabled = true;
    $('#cp1').hide().html('<button type="button" id="bt1" onclick="javascript:sendForm();" class="btn btn-primary btn-block btn-flat"><img src="assets/img/gif-carga.gif" width="20" height="20"/></button>').fadeIn(10);
	var user = document.getElementById('user').value;
	var pass = document.getElementById('pass').value;
    
	if (user === "" || pass === "") {
		if (document.fvalida.user.value.length===0){
		   $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Error:</strong> Ingrese el usuario<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
		   camp1.className = "form-group has-error";
		   camp2.className = "form-group has-feedback";
		   document.fvalida.user.focus();
        }else{
		   $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Error:</strong> Ingrese el password<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
		   camp2.className = "form-group has-error";
		   camp1.className = "form-group has-feedback";
		   document.fvalida.pass.focus();
		}
		$('#cp1').hide().html('<button type="button" id="bt1" onclick="javascript:sendForm();" class="btn btn-primary btn-block btn-flat">Ingresar</button>').fadeIn(500);
	   document.getElementById('bt1').disabled = false;
	   return false;
    }else{
       var dataStringx = 'user=' + user + '&pass=' + pass;
	   $.ajax({
			type: 'POST',
			url: 'php/val_index.php',
			data: dataStringx,
			success: function(x){
			    document.getElementById('bt1').disabled = true;
			    $('#cp1').hide().html('<button type="button" id="bt1" onclick="javascript:sendForm();" class="btn btn-primary btn-block btn-flat">Ingresar</button>').fadeIn(500);
				if(x==1){
					$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Error:</strong> Usuario/password incorrectos<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
						camp1.className = "form-group has-error";
		                camp2.className = "form-group has-error";
		                document.getElementById('bt1').disabled = false;
				}else if(x==2){
				    camp1.className = "form-group has-feedback";
		            camp2.className = "form-group has-feedback";
		            document.getElementById('MsjError').style.display ='none';
				    window.location.href="seleccion.php"; 
				}else if(x==3){
						camp1.className = "form-group has-feedback";
		                camp2.className = "form-group has-feedback";
		                document.getElementById('bt1').disabled = false;
				    alert("Usuario bloqueado, contacte al administrador.");
				}
			}
		});
    }
	return false;
}



function validar_texto(e){
	    tecla = (document.all) ? e.keyCode : e.which;
		
    	//si es Enter=13 o Tab=0 pasa a Password
		if ((tecla===13)||(tecla===0))sendForm(); 
		
		//Permitir tecla de retroceso
		if (tecla===8) return true; 
		
		//Espacios
		if (tecla===32) return false; 

}

function confirmarCerrar(){
	 if (confirm("\xbfSeguro desea cerrar sesi\xf3n?")){
		self.location = "php/cerrarSesion.php";
	 } else{
		return 0;
	 }
}



function IrCorreo(){
	 window.open('https://impulsasc.com:2096/', '_blank');
}

function IrHboMax(){
	 window.open('http://www.vendehbomax.com/login', '_blank');
}

function closeError(){
	 $('#MsjError').fadeOut(500);
}

function closeError2(){
	 $('#MsjError0').fadeOut(500);
}

//aqui valido todo lo que es el menu principal

function ctrl_menu_admin_au(){
	$("#content1").load('menu/admin/adduser/adduser.php');
}

function ctrl_menu_user_gd(){
	$("#content1").load('menu/gestiondiaria/gestiondiaria.php');
}

function ctrl_menu_user_oculto(){
	$("#content1").load('6_OCULTO/gesion_diaria/gestiondiaria.php');
}

function gestion_asesores_transvial(){
	$("#content1").load('0_SUPERVISORES/Asesores/exp_gestionSA.php');
}

function sin_gestion_asesores_transvial(){
	$("#content1").load('0_SUPERVISORES/Asesores/sin_gestion.php');
}


function ctrl_menu_retencion(){
	$("#content1").load('5_ESPECIFICAS/carga_retencion/carga_retencion.php');
}

function ctrl_menu_user_voi(){
	$("#content1").load('menu/voi/voi.php');
}

function ctrl_menu_user_escalado(){
	$("#content1").load('menu/escalados/escalar_n2.php');
}

function ctrl_menu_user_escaladovt(){
	$("#content1").load('menu/escalados/escalar_vt.php');
}

function ctrl_menu_user_escaladoCNTPlay(){
	$("#content1").load('menu/escalados/escalarcntplay.php');
}

function ChangePass(){
	$("#content1").load('menu/password/changepass.php'); 
}
function ctrl_menu_admin_mu(){
	$("#content1").load('menu/admin/moduser/moduser.php');
}

function ctrl_menu_admin_du(){
	$("#content1").load('menu/admin/deleteuser/deleteuser.php');
}

function ctrl_menu_admin_bu(){
	$("#content1").load('menu/admin/blockuser/blockuser.php');
}


function ctrl_menu_admin_cp(){
	$("#content1").load('menu/admin/chpassuser/chpassuser.php');
}

function ctrl_menu_admin_ci(){
	$("#content1").load('menu/admin/chargeimg/chargeimg.php');
}

function ctrl_menu_admin_ci(){
	$("#content1").load('menu/admin/chargeimg/chargeimg.php');
}

function ctrl_menu_sup_escalado2nv(){
	$("#content1").load('0_SUPERVISORES/php/SOPORTE_DTH/LIGA_PRO_CONSULTAS/exp_gestionSVA2.php');
}

function ctrl_menu_trasnvial(){
	$("#content1").load('0_SUPERVISORES/Descargas/exp_gestionECDF.php');
}

function ctrl_menu_sup_oculto(){
	$("#content1").load('0_SUPERVISORES/oculto/Descargas/exp_gestionECDF.php');
}

function ctrl_menu_sup_escaladovt(){
	$("#content1").load('0_SUPERVISORES/php/SOPORTE_DTH/FINAL_LIGA_PRO/exp_gestionSVA2.php');
}

function ctrl_menu_online(){
	$("#content1").load('php/asesores/des_motivos.php');
}

function ctrl_menu_sup_escaladocntplay(){
	$("#content1").load('2_1800lojusto/php/des_cntplay.php');
}

function ctrl_menu_sup_export_gestionVT(){
	$("#content1").load('php/supervision/exp_gestionVT.php');
}

function ctrl_menu_sup_export_gestionSA(){
	$("#content1").load('php/supervision/exp_gestionSA.php');
}

function ctrl_menu_sup_export_gestionGE(){
	$("#content1").load('php/supervision/exp_gestionGE.php');
}

function ctrl_menu_n4_actualizar(){
	$("#content1").load('menu/nivel4/actualizar.php');
}

function ctrl_menu_sup_export_gestionGE1(){
	$("#content1").load('php/asesores/exp_gestionGE.php');
}

function ctrl_menu_sup_export_gestionRET(){
	$("#content1").load('5_ESPECIFICAS/descargas/exp_gestionGE.php');
}

function ctrl_menu_sup_export_gestionCO1(){
	$("#content1").load('4_COLEGA/php/asesores/exp_gestionCO.php');
}

function ctrl_menu_sup_export_gestionSA1(){
	$("#content1").load('php/asesores/exp_gestionSA.php');
}

function ctrl_menu_sup_export_gestionSVA1(){
	$("#content1").load('php/asesores/act_sva/exp_gestionSVA.php');
}

function ctrl_menu_sup_export_gestionPPV8(){
	$("#content1").load('php/asesores/ECDF_PPV/exp_gestionECDF.php');
}

function ctrl_menu_sup_export_gestionSVA2(){
	$("#content1").load('0_SUPERVISORES/php/SOPORTE_DTH/DTH/exp_gestionSVA.php');
}

function ctrl_menu_anadir_multa(){
	$("#content1").load('0_SUPERVISORES/transvial_registros/anadir_multas/anadir_multas/des_motivos2.php');
}

function ctrl_menu_modificar_multa(){
	$("#content1").load('0_SUPERVISORES/transvial_registros/modificar_multas/modificar_multas/des_motivos2.php');
}

function ctrl_menu_eliminar_multa(){
	$("#content1").load('0_SUPERVISORES/transvial_registros/eliminar_registro/eliminar_multas/des_motivos2.php');
}

function ctrl_menu_unidas(){
	$("#content1").load('0_SUPERVISORES/transvial_registros/unidos/gestiones/des_motivos2.php');
}

function ctrl_menu_sup_export_gestionECDF(){
	$("#content1").load('0_SUPERVISORES/php/SOPORTE_DTH/ECDF/exp_gestionECDF.php');
}

function descarga_ECDF_cnt(){
	$("#content1").load('3_fidelizacion_HBO/Descargas/exp_gestionECDF.php');
}

function AMBIENTE_PRUEBA(){
	$("#content1").load('3_fidelizacion_HBO/php/desarrollo/mis_pendientes.php');
}

function descarga_ges_oculto_des(){
	$("#content1").load('6_OCULTO/Descargas/exp_gestionECDF.php');
}

function ctrl_menu_sup_export_gestionRETENCION_CONSULTA(){
	$("#content1").load('5_ESPECIFICAS/consultas/CONTACTOS/des_motivos2.php');
}

//HBO INICIO

function ctrl_menu_hbo_va1(){
	$("#content1").load('3_fidelizacion_HBO/menu/gestion_consulta.php');
}


function ctrl_menu_hbo_va(){
	$("#content1").load('3_fidelizacion_HBO/menu/gestion_ventas.php');
}

function ctrl_menu_hbo_v(){
	$("#content1").load('3_fidelizacion_HBO/php/supervision/tablageneral.php');
}

function ctrl_agend_hbo(){
	$("#content1").load('3_fidelizacion_HBO/php/supervision/agendados/agendados_hbo.php');
}

function ctrl_menu_ret_new(){
	$("#content1").load('0_SUPERVISORES/php/RETENCIONES/GESTION_RETENCIONES/exp_gestionSVA2.php');
}

function ctrl_menu_cie_new(){
	$("#content1").load('8_ESPECIFICAS_INT/supervision/descargas/exp_gestion2.php');
}

function ctrl_menu_bit_new(){
	$("#content1").load('8_ESPECIFICAS_INT/supervision/bitacora_entrante/exp_gestion2.php');
}

function ctrl_menu_tmp_ecdf(){
	$("#content1").load('0_SUPERVISORES/php/TEMPORAL_ECDF/ECDF/exp_gestionECDF.php');
}

function ctrl_menu_vir_new(){
	$("#content1").load('0_SUPERVISORES/php/RETENCIONES/VIRTUALES/exp_gestionSVA2.php');
}

function ctrl_menu_car_new(){
	$("#content1").load('0_SUPERVISORES/php/RETENCIONES/CARTERIZADOS/exp_gestionSVA2.php');
}

//HBO FN




function enviar_colega(){
	window.open('https://impulsasc.com/desk/menu4.php',"_self");
}

function enviar_retencion(){
	window.open('https://impulsasc.com/desk/menu5.php',"_self");
}

function enviar_ret_int(){
	window.open('https://impulsasc.com/desk/menu8.php',"_self");
}

function enviar_oculto(){
	window.open('https://impulsasc.com/desk/menu6.php',"_self");
}

function enviar_informacion(){
	window.open('https://impulsasc.com/desk/menu7.php',"_self");
}

function enviar_dth(){
	window.open('https://impulsasc.com/desk/menu.php',"_self");
}

function enviar_manager(){
	window.open('https://impulsasc.com/desk/supervisor.php',"_self");
}

function enviar_1800lojusto(){
    window.open('https://impulsasc.com/desk/menu2.php',"_self");
}  

function enviar_fidelizacion_hbo(){
    window.open('https://impulsasc.com/desk/menu3.php',"_self");
}  

function enviar_seleccion(){
     if (confirm("\xbfIr a cambio de campa√±a?")){
		window.open('https://impulsasc.com/desk/seleccion.php',"_self");
	 } else{
		return 0;
	 }
    
} 

function ctrl_menu_user_charge_d(){
	$("#content1").load('2_1800lojusto/menu/cargarDenuncia/cargarDenuncia.php');
}

function ctrl_menu_sup_1800LoJusto(){
	$("#content1").load('2_1800lojusto/php/des_1800_2.php');
}

function ctrl_menu_cumples(){
	$("#content1").load('php/cumples/cumples.php');
}

//COLEGA

function ctrl_menu_user_CGD(){
	$("#content1").load('4_COLEGA/gestiondiaria/gestiondiaria.php');
}

  function IrCitrix(){
             //validar primero que ya no tenga una cuenta asignada. De ser asè´ø mostrar Modal con datos de cuenta sin preguntar.
        if(confirm("\xbfSolicitar datos de cuenta Citrix?")){
             alert("Modal");
             //sino tiene, mostrar datos de cuenta, en BD asignar datos, preguntar si funciona
             //Si funciona queda asi.. listo.
             //sino funciona, preguntar el motivo.. seguido en BD esa cuenta marcar como bloqueada y mostrar a sup
             //asignar una nueva y hacer proceso..
        }
  }
  
  

