<?php
  //sleep(1);
  session_start();
  include '../../../../php/conexion_bd.php';
  if(!empty($_SESSION['id'])){ 
  //valido si el usuario esta bloqueado
  		$trx="SELECT activo, usuario FROM usuarios WHERE id={$_SESSION['id']}";  
		$resB=mysqli_query($enlace,$trx);
		$filaB = mysqli_fetch_array($resB);
		if ($filaB['activo'] != 3){
?>


			<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>Motivos - Usuarios</title>
			  <!-- Tell the browser to be responsive to screen width -->
			  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			  <style>
				.loader2{
					position: fixed;
					left: 230px;
					top: 50px;
					width: 82%;
					height: 100%;
					z-index: 9999;
					background: url('assets/img/Preloader_2.gif') 50% 50% no-repeat rgb(249,249,249);
					opacity: .6;
				}
				</style> 

			<link rel="stylesheet"
				href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
			</head>
			<body class="hold-transition skin-blue sidebar-mini">
			    
			    <div class="loader2" id="loader2"></div>

				<section class="content-header">
				  <h1>
					Buscar caso a modificar - Transvial
				  </h1>
				</section>
				<form action="" method="post" enctype="multipart/form-data" name="addU" id="addU">
					<!-- Main content -->
					<section class="content" >
					
						<div class="row">
							<div class="col-md-3">&nbsp;</div>
							<div class="col-md-6">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<!-- /.columna izquierda -->
											<div class="col-md-6">
												<div class="form-group" id="us1">
													<label>*Búsqueda por:</label>
													<select id="mot_pr" class="form-control select2" style="width: 100%;">
												      <option selected="selected" value="" disabled>Seleccione..</option> 
												      <option value="1">Placa</option>
													  <option value="2">Citacion</option>
													  <option value="3">Cédula</option>
     												</select>
     												<div id="id1-1M"></div>
												</div>
											</div>
											<!-- /.columna derecha -->
											<div class="col-md-6">
											
											
												    <div id="us2" class="form-group">
    													<label>*Valor a buscar:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-edit"></i>
    													  </div>
    													  <input type="text" onKeyPress="return validar_texto(event)"  class="form-control"  id="valuebusqueda" data-mask tabindex="2" maxlength="15">
    													</div>
    													<div id="id2-2M"></div>
    												</div>
    											    
												

											</div>
											

											<div class="row">
												<div class="col-md-12">
													<div class="col-md-12">
														<div class="box-tools" id="MsjError0" align="center">
															<!–mensaje de error–> 
														</div>
													</div>
												</div>
											</div>
											<div style="padding-left:240px;"><button type="button" id="buscar1" onClick="find2Motivos();" class="btn btn-info pull-left" >Buscar</button></div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						
					  <!-- aqui cargo la tabla -->
					  <div style="display:none" id="mostra_tab1">
    					  <div class="row">
        				      <div class="col-md-12">
        				        <div class="box box-default">
                                    <div id="cargaX"></div>
                                </div>
                              </div>
                          </div>
                      </div>
					  
					</form>		
					</section>
					<!-- Bootstrap 3.3.7 -->

				<!-- InputMask -->
				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
				<!-- date-range-picker -->
            	<script src="assets/bower_components/moment/min/moment.min.js"></script>
            	<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


				<!-- Page script -->
				<script>
				
				function validar_texto(e){
            	    tecla = (document.all) ? e.keyCode : e.which;
                    //si es Enter=13 o Tab=0 pasa a Password
            		if ((tecla===13)||(tecla===0)){
            		    find2Motivos(); 
            		    return false;
            		 //Permitir tecla de retroceso
            		}else if (tecla===8){
            		    return true;
            		}else if (tecla===32){
            		    return true;
            		} 
                 }


				  $(function () {
					//Initialize Select2 Elements
					//$('.select2').select2()

					//Datemask dd/mm/yyyy
					$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
					//Datemask2 mm/dd/yyyy
					$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
					//Money Euro
					$('[data-mask]').inputmask()
					
					//$('#reservation').daterangepicker()
                    //Date range picker with time picker
                    
                    $('#reservation').daterangepicker({
                        "locale": {
                            "format": "YYYY-MM-DD",
                            "separator": " | ",
                            "applyLabel": "Aplicar",
                            "cancelLabel": "Cancelar",
                            "fromLabel": "Desde",
                            "toLabel": "Hasta",
                            "customRangeLabel": "Custom",
                            "daysOfWeek": [
                                "Do",
                                "Lu",
                                "Ma",
                                "Mi",
                                "Ju",
                                "Vi",
                                "Sa"
                            ], 
                            "monthNames": [
                                "Enero",
                                "Febrero",
                                "Marzo",
                                "Abril",
                                "Mayo",
                                "Junio",
                                "Julio",
                                "Agosto",
                                "Septiembre",
                                "Octubre",
                                "Noviembre",
                                "Diciembre"
                            ],
                            "firstDay": 1
                        }
                    })

					//Date picker
					$('#datepicker').datepicker({
					  autoclose: true
					})

					//iCheck for checkbox and radio inputs
					$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
					  checkboxClass: 'icheckbox_minimal-blue',
					  radioClass   : 'iradio_minimal-blue'
					})

					//Timepicker
					$('.timepicker').timepicker({
					  showInputs: false
					})
				  })
				  
					function soloNumeros(e){
						var key = window.Event ? e.which : e.keyCode
						return ((key >= 48 && key <= 57) || (key==8)) 
     				}


                    function find2Motivos(){
                        if(document.getElementById("mot_pr").value === ""){
                           document.getElementById("us1").className = "form-group has-error";
    					   $('#id1-1M').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione el tipo de búsqueda</span>').fadeIn(500);
                        }else{
                            document.getElementById("us1").className = "form-group has-feedback";
        					$('#id1-1M').hide().html('').fadeIn(500);
                        }
                        
                        if(document.getElementById("valuebusqueda").value === ""){
                           document.getElementById("us2").className = "form-group has-error";
    					   $('#id2-2M').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique el valor a buscar</span>').fadeIn(500);
                        }else{
                            document.getElementById("us2").className = "form-group has-feedback";
        					$('#id2-2M').hide().html('').fadeIn(500);
        				    //valido con que se esta buscando.. 1 es cuenta 2 es servicio
        				    if(document.getElementById("mot_pr").value === "1"){
        				        $('#MsjError0').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>&nbsp &nbspEspere... Consultando base de datos.</p>').fadeIn(500);
        				        var b = document.getElementById("valuebusqueda").value.replace(/ /g, "");
        				        $("#cargaX").load('0_SUPERVISORES/transvial_registros/modificar_multas/modificar_multas/exp_val_exp_gestionSA.php?a1='+b+'&a2='+ document.getElementById("mot_pr").value);
        				        document.getElementById('mostra_tab1').style.display = '';
        				        document.getElementById('MsjError0').style.display = 'none';
        				    }else if(document.getElementById("mot_pr").value === "2"){
        				        $('#MsjError0').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>&nbsp &nbspEspere... Consultando base de datos.</p>').fadeIn(500);
        				        var b = document.getElementById("valuebusqueda").value.replace(/ /g, "");
        				        $("#cargaX").load('0_SUPERVISORES/transvial_registros/modificar_multas/modificar_multas/exp_val_exp_gestionSA.php?a1='+b+'&a2='+ document.getElementById("mot_pr").value);
        				        document.getElementById('mostra_tab1').style.display = '';
        				        document.getElementById('MsjError0').style.display = 'none';
        				    }else if(document.getElementById("mot_pr").value === "3"){
        				        $('#MsjError0').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>&nbsp &nbspEspere... Consultando base de datos.</p>').fadeIn(500);
        				        var b = document.getElementById("valuebusqueda").value.replace(/ /g, "");
        				        $("#cargaX").load('0_SUPERVISORES/transvial_registros/modificar_multas/modificar_multas/exp_val_exp_gestionSA.php?a1='+b+'&a2='+ document.getElementById("mot_pr").value);
        				        document.getElementById('mostra_tab1').style.display = '';
        				        document.getElementById('MsjError0').style.display = 'none';
        				    }
                        }
                    }
                $('#loader2').fadeOut(1500);
				</script>
</body>
</html>


<?php
        }else{//else del validar si esta bloqueado.
		    session_destroy();
			echo '<script language =  javascript>  alert("Usuario Bloqueado, contacte al administrador"); self.location = "/../../../../index.php"; </script>';
		}
	}else{
	   echo '<script language =  javascript>  self.location = "../../../../index.php" </script>';
	}
	mysqli_close($enlace);
?>