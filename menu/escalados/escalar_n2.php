<?php
  //sleep(1);
  session_start();
  date_default_timezone_set("America/Guayaquil"); 
  include '../../php/conexion_bd.php';
  
  
  if(!empty($_SESSION['id'])){ 
  //valido si el usuario esta bloqueado
  		$trx="SELECT activo FROM usuarios WHERE id={$_SESSION['id']}";  
		$resB=mysqli_query($enlace,$trx);
		$filaB = mysqli_fetch_array($resB);
		if ($filaB['activo'] != 3){
		    
?>


			<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>Formularios - Escalar N2</title>
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
			<!-- Bootstrap time Picker -->
		     <link rel="stylesheet" href="assets/plugins/timepicker/bootstrap-timepicker.min.css">
		     <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
		     <!-- DataTables -->
            <script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            
            

			</head>
			<body class="hold-transition skin-blue sidebar-mini">

				<div class="loader2" id="loader2"></div>

				<section class="content-header">
				  <h1>
					Escalar a N2
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li><a>Escalar</a></li>
					<li class="active">Nivel 2</li>
				  </ol>
				</section>
				<form action="" method="post" enctype="multipart/form-data" name="addU" id="addU">
					<!-- Main content -->
					<section class="content" >
					  <!-- SELECT2 EXAMPLE -->
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
	
										<div class="row">
											<!-- /.columna izquierda -->
											<div class="col-md-6">

												<div id="id1" class="form-group">
													<label>*Cédula/RUC del cliente:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-list-alt"></i>
													  </div>
													  <input type="text" class="form-control" id="cedula" onBlur="pro_ced();" onKeyPress="return soloNumeros(event)" maxlength="13" data-mask tabindex="1" >
													</div>
													<div id="id1-1"></div>
												</div>	

												<div id="id3" class="form-group">
													<label>*Ticket Omnicanal:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-share-alt"></i>
													  </div>
													  <input type="text" class="form-control" id="omni" onBlur="pro_omni();" onKeyPress="return soloNumeros(event)" maxlength="7" data-mask tabindex="3" >
													</div>
													<div id="id3-3"></div>
												</div>	
												
												<div id="id5" class="form-group">
													<label>*Teléfono 1:</label>
													<div class="input-group">
													  <div class="input-group-addon">
														<i class="fa fa-phone"></i>
													  </div>
													  <input type="text" class="form-control" id="telf1" onBlur="pro_telf1();" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="5" >
													</div>
													<div id="id5-5"></div>
												</div>

									        </div>
	
											<!-- /.columna derecha -->
											<div class="col-md-6">

												<div id="id2" class="form-group">
													<label>*Virtual:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-share-alt"></i>
													  </div>
													  <input type="text" class="form-control" id="virtual" data-mask tabindex="2" onBlur="pro_vir();" onKeyPress="return soloNumeros(event)" maxlength="10">
													</div>
													<div id="id2-2"></div>
												</div>
										
											
												<div id="id4" class="form-group">
													<label>*Nombre del Cliente:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-user"></i>
													  </div>
													  <input type="text" class="form-control" id="nom" onBlur="pro_nom();" onKeyPress="return soloLetras(event)" maxlength="50" data-mask tabindex="4" >
													</div>
													<div id="id4-4"></div>
												</div>
											
												<div id="id6" class="form-group">
													<label>Teléfono 2:</label>
													<div class="input-group">
													  <div class="input-group-addon">
														<i class="fa fa-mobile-phone (alias)"></i>
													  </div>
													  <input type="text" class="form-control" id="telf2" onBlur="pro_telf2();" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="6" >
													</div>
													<div id="id6-6"></div>
												</div>
											</div>
											
											

										</div>
                                       	<div id="id7" class="form-group">
											 <label>Observación:</label>
											 <textarea class="form-control" rows="2" id="dir" placeholder="..." style="resize: none; " data-mask tabindex="7" maxlength="245"></textarea>
										     <div id="id7-7"></div>
										</div>
										<div id="o_id1">	
    										<div class="form-group">
                                                <p class="help-block">* Campos Obligatorios.</p>
                                            </div>
                                        </div>
										<div class="row">
												<div class="col-md-12">
													<div class="col-md-12">
														<div class="box-tools" id="MsjError" align="center">
															<!–mensaje de error–> 
														</div>
													</div>
												</div>
											</div>
											
											<table class="table text-center">
												<tr>
													<td width="49%">
														<button type="button" id="cancel" data-mask tabindex="9" onClick="clean();" class="btn btn-info pull-right">Cancelar</button>
													</td>
													<td width="2%">	
													</td>
													<td width="49%">
														<button type="button" data-mask tabindex="8" id="save" onClick="addcase();" class="btn btn-info pull-left" >Guardar</button>
													 </td>
												</tr>
											</table>
								</div>
								
							</div>
							


				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		    	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		    	

				<script>
				
                    $(function () {
    					//Datemask dd/mm/yyyy
    					$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    					//Datemask2 mm/dd/yyyy
    					$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    					//Money Euro
    					$('[data-mask]').inputmask()
  				    })
  				    
  				    val1 = 0;
  				    val2 = 0;
  				    
  				    var a = 0;
  				    var b = 0;
  				    var c = 0;
  				    var d = 0;
  				    var e = 0;
  				    var f = 0;
  				    
				  
    				var camp1 = document.getElementById("cedula");
    			    var camp2 = document.getElementById("virtual");
    			    var camp3 = document.getElementById("omni");
    			    var camp4 = document.getElementById("nom");
    			    var camp5 = document.getElementById("telf1");
    			    var camp6 = document.getElementById("telf2");
    			    var camp7 = document.getElementById("dir");
    			    
    			    var c1 = document.getElementById("id1");
    			    var c2 = document.getElementById("id2");
    			    var c3 = document.getElementById("id3");
    			    var c4 = document.getElementById("id4");
    			    var c5 = document.getElementById("id5");
    			    var c6 = document.getElementById("id6");
    			    var c7 = document.getElementById("id7");

					function soloNumeros(e){
						var key = window.Event ? e.which : e.keyCode
						return ((key >= 48 && key <= 57) || (key==8)) 
     				}
     				
                    function soloLetras(e) {
                        tecla = (document.all) ? e.keyCode : e.which;
                        if (tecla==8) return true;
                        patron =/[A-Za-z\s]/;
                        te = String.fromCharCode(tecla);
                        return patron.test(te);
                    }
                    
                    function pro_ced(){
    					if(camp1.value === ""){
    					   c1.className = "form-group has-error";
    					   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   a = 1;
    					}else if(camp1.value.length < 10){
    				       c1.className = "form-group has-error";
    				       $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Cédula incompleta</span>').fadeIn(500);
    					   a = 1;
    					}else{
    					   c1.className = "form-group has-feedback";
    					   $('#id1-1').hide().html('').fadeIn(500);
    					   a = 0;
    					}
				    }
				    
				   function pro_omni(){
    					if(camp3.value === ""){
    					   c3.className = "form-group has-error";
    					   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   b = 1;
    					}else{
    					   c3.className = "form-group has-feedback";
    					   $('#id3-3').hide().html('').fadeIn(500);
    			           b = 0;
    					}
				    }
				    
				    function pro_vir(){
    					if(camp2.value === ""){
    					   c2.className = "form-group has-error";
    					   $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   c = 1;
    					}else{
    					   c2.className = "form-group has-feedback";
    					   $('#id2-2').hide().html('').fadeIn(500);
    			           c = 0;
    					}
				    }
				    
				    function pro_nom(){
    					if(camp4.value === ""){
    					   c4.className = "form-group has-error";
    					   $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   d = 1;
    					}else{
    					   c4.className = "form-group has-feedback";
    					   $('#id4-4').hide().html('').fadeIn(500);
    			           d = 0;
    					}
				    }
				    
				    function pro_telf1(){
				        for (var i = 0; i < 14; i++) {
                           if (camp5.value.charAt(i) == "_"){
                               val1 = 1;
                           }
                        }
    					if(camp5.value === ""){
    					   c5.className = "form-group has-error";
    					   $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   e = 1;
    					}else if(val1 == "1" ){
    				       c5.className = "form-group has-error";
    				       $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Teléfono incompleto</span>').fadeIn(500);
    					   e = 1;
    					}else{
    					   c5.className = "form-group has-feedback";
    					   $('#id5-5').hide().html('').fadeIn(500);
    					   e = 0;
    					}
    					val1 = 0;
				    }
				    
				    function pro_telf2(){
				        for (var y = 0; y < 14; y++) {
                           if (camp6.value.charAt(y) == "_"){
                               val2 = 1;
                           }
                        }
    					if(val2 == "1"){
    				       c6.className = "form-group has-error";
    				       $('#id6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Teléfono incompleto</span>').fadeIn(500);
    					   f = 1;
    					}else{
    					   c6.className = "form-group has-feedback";
    					   $('#id6-6').hide().html('').fadeIn(500);
    					   f = 0;
    					}
    					val2 = 0;
				    }
				    
				    function clean(){
				        document.getElementById("addU").reset();
				        
				       c1.className = "form-group has-feedback";
					   $('#id1-1').hide().html('').fadeIn(500);
					   
					   c2.className = "form-group has-feedback";
					   $('#id2-2').hide().html('').fadeIn(500);
					   
					   c3.className = "form-group has-feedback";
					   $('#id3-3').hide().html('').fadeIn(500);
					   
					   c4.className = "form-group has-feedback";
					   $('#id4-4').hide().html('').fadeIn(500);
						
					   c5.className = "form-group has-feedback";
					   $('#id5-5').hide().html('').fadeIn(500);
					   
					   c6.className = "form-group has-feedback";
					   $('#id6-6').hide().html('').fadeIn(500);
					   
					   c7.className = "form-group has-feedback";
					   $('#id7-7').hide().html('').fadeIn(500);
					   
					   camp1.focus();
				    }
				    
				    function addcase(){
				        pro_ced();
                        pro_omni();
                        pro_vir();
                        pro_nom();
                        pro_telf1();
                        pro_telf2();
                        

                        if (a === 0 && b === 0 && c === 0 && d === 0 && e === 0 && f === 0){
                            if (confirm("\xbfContinuar y enviar?")){
                                var dataString = 'a1=' + camp1.value + '&a2=' + camp2.value + '&a3=' + camp3.value + '&a4=' + camp4.value + '&a5=' + camp5.value + '&a6=' + camp6.value + '&a7=' + camp7.value;
                                $('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando...</p>').fadeIn(500);
        						cancel.enabled = false;
        						save.enabled = false;
    							$.ajax({
    								type: 'POST',
    								url: 'php/user/escalarn2/val_escalan2.php', 
    								data:  dataString, 
    								success: function(x){
    									if(x==1){
    										$('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Caso enviado al supervisor.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
    									    cancel.enabled = true;
    						            	save.enabled = true;
    									    clean();
    									    camp1.focus();
    									    $('#MsjError').fadeOut(10000);
    									}
    									else if(x==2){
    										$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Complete todos los campos obligatorios (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
    									}
    								}
    							});
                            }else{
        					    return 0;
        				    }
                        }
				    }

    				$('#loader2').fadeOut(1500);
    				camp1.focus();
    			</script>

			</body>
			</html>


<?php
        }else{//else del validar si esta bloqueado.
		    session_destroy();
			echo '<script language =  javascript>  alert("Usuario Bloqueado, contacte al administrador"); self.location = "index.php"; </script>';
		}
	}else{
	   echo '<script language =  javascript>  self.location = "index.php" </script>';
	}
	mysqli_close($enlace);
?>