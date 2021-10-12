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
					Actualizar datos
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li><a>Escalar</a></li>
					<li class="active">Actualizar</li>
				  </ol>
				</section>
				<form action="" method="post" enctype="multipart/form-data" name="addU" id="addU">
					<!-- Main content -->
					<section class="content" >
					  <!-- SELECT2 EXAMPLE -->
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-5">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
	
										<div class="row">
											<!-- /.columna izquierda -->
											<div class="col-md-6">

												<div id="id1" class="form-group">
													<label>*% TMO:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-clock-o"></i>
													  </div>
													  <input type="text" class="form-control" id="tmo" onBlur="pro_1();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="1" >
													</div>
													<div id="id1-1"></div>
												</div>	

												<div id="id2" class="form-group">
													<label>*% Nivel de Servicio:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="ion ion-stats-bars"></i>
													  </div>
													  <input type="text" class="form-control" id="ns" onBlur="pro_2();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="3" >
													</div>
													<div id="id2-2"></div>
												</div>
												
												<div id="id3" class="form-group">
													<label>*% Adherencia:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="ion ion-ios-people-outline"></i>
													  </div>
													  <input type="text" class="form-control" id="ad" onBlur="pro_3();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="5" >
													</div>
													<div id="id3-3"></div>
												</div>
												
												<div id="id4" class="form-group">
													<label>*% Convertibilidad:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-pie-chart"></i>
													  </div>
													  <input type="text" class="form-control" id="co" onBlur="pro_4();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="7" >
													</div>
													<div id="id4-4"></div>
												</div>
												
												<div id="id5" class="form-group">
													<label>*% Participación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-user"></i>
													  </div>
													  <input type="text" class="form-control" id="pa" onBlur="pro_5();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="9" >
													</div>
													<div id="id5-5"></div>
												</div>
												
												<div id="id6" class="form-group">
													<label>*% Cierre de llamadas:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-phone"></i>
													  </div>
													  <input type="text" class="form-control" id="cl" onBlur="pro_6();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="11" >
													</div>
													<div id="id6-6"></div>
												</div>
												
												<div class="form-group">
                                                   <p class="help-block">* Campos Obligatorios.</p>
                                                </div>

									        </div>
	
											<!-- /.columna derecha -->
											<div class="col-md-6">

												<div id="id7" class="form-group">
													<label>*% Meta TMO:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-line-chart"></i>
													  </div>
													  <input type="text" class="form-control" id="meta_tmo" onBlur="pro_7();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="2" >
													</div>
													<div id="id7-7"></div>
												</div>	

												<div id="id8" class="form-group">
													<label>*% Meta Nivel de Servicio:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-line-chart"></i>
													  </div>
													  <input type="text" class="form-control" id="meta_ns" onBlur="pro_8();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="4" >
													</div>
													<div id="id8-8"></div>
												</div>
												
												<div id="id9" class="form-group">
													<label>*% Meta Adherencia:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-line-chart"></i>
													  </div>
													  <input type="text" class="form-control" id="meta_ad" onBlur="pro_9();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="6" >
													</div>
													<div id="id9-9"></div>
												</div>
												
												<div id="id10" class="form-group">
													<label>*% Meta Convertibilidad:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-line-chart"></i>
													  </div>
													  <input type="text" class="form-control" id="meta_co" onBlur="pro_10();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="8" >
													</div>
													<div id="id10-10"></div>
												</div>
												
												<div id="id11" class="form-group">
													<label>*% Meta Participación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-line-chart"></i>
													  </div>
													  <input type="text" class="form-control" id="meta_pa" onBlur="pro_11();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="10" >
													</div>
													<div id="id11-11"></div>
												</div>
												
												<div id="id12" class="form-group">
													<label>*% Meta Cierre de llamadas:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-line-chart"></i>
													  </div>
													  <input type="text" class="form-control" id="meta_cl" onBlur="pro_12();" onKeyPress="return soloNumeros(event)" maxlength="4" data-mask tabindex="12" >
													</div>
													<div id="id12-12"></div>
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
													</td>
													<td width="2%">	
													<button type="button" data-mask tabindex="13" id="save" onClick="addcase();" class="btn btn-info pull-left" >Actualizar</button>
													</td>
													<td width="49%">
													</td>
												</tr>
											</table>
								</div>
								
							</div>
							


				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		    	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		    	

				<script>
				
					function soloNumeros(e){
						var key = window.Event ? e.which : e.keyCode
						return ((key >= 48 && key <= 57) || (key==8) || key==46) 
     				}

				    var a = 0;
				    var b = 0;
				    var c = 0;
				    var d = 0;
				    var e = 0;
				    var f = 0;
				    
				    var g = 0;
				    var h = 0;
				    var i = 0;
				    var j = 0;
				    var k = 0;
				    var l = 0;

    				var camp1 = document.getElementById("tmo");
    			    var camp2 = document.getElementById("ns");
    			    var camp3 = document.getElementById("ad");
    			    var camp4 = document.getElementById("co");
    			    var camp5 = document.getElementById("pa");
    			    var camp6 = document.getElementById("cl");
    			    var camp7 = document.getElementById("meta_tmo");
    			    var camp8 = document.getElementById("meta_ns");
    			    var camp9 = document.getElementById("meta_ad");
    			    var camp10 = document.getElementById("meta_co");
    			    var camp11 = document.getElementById("meta_pa");
    			    var camp12 = document.getElementById("meta_cl");
    			    
    			    var c1 = document.getElementById("id1");
    			    var c2 = document.getElementById("id2");
    			    var c3 = document.getElementById("id3");
    			    var c4 = document.getElementById("id4");
    			    var c5 = document.getElementById("id5");
    			    var c6 = document.getElementById("id6");
    			    var c7 = document.getElementById("id7");
    			    var c8 = document.getElementById("id8");
    			    var c9 = document.getElementById("id9");
    			    var c10 = document.getElementById("id10");
    			    var c11 = document.getElementById("id11");
    			    var c12 = document.getElementById("id12");
    			    
    			    var dataString1 = 'a1=1';
    			    $.ajax({
    					type: 'POST',
    					url: 'php/nivel4/buscar.php', 
    					data:  dataString1, 
    					success: function(x){
							document.getElementById('tmo').value = x.split('$$')[1];
							document.getElementById('meta_tmo').value = x.split('$$')[2];
							document.getElementById('ns').value = x.split('$$')[3];
							document.getElementById('meta_ns').value = x.split('$$')[4];
							document.getElementById('ad').value = x.split('$$')[5];
							document.getElementById('meta_ad').value = x.split('$$')[6];
							document.getElementById('co').value = x.split('$$')[7];
							document.getElementById('meta_co').value = x.split('$$')[8];
							document.getElementById('pa').value = x.split('$$')[9];
							document.getElementById('meta_pa').value = x.split('$$')[10];
							if(x.split('$$')[11] == 0){
							    document.getElementById('cl').value = "0.0";
							}else{
							    document.getElementById('cl').value = x.split('$$')[11];
							}
							if(x.split('$$')[12] == 0){
							    document.getElementById('meta_cl').value = "0.0";
							}else{
							    document.getElementById('meta_cl').value = x.split('$$')[12];
							}
    					}
    						
    				});


                    function pro_1(){
    		        	if(camp1.value === ""){
    					   c1.className = "form-group has-error";
    					   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   a = 1;
    					}else if(!/^[0-9\.]+$/.test(camp1.value)){
    				       c1.className = "form-group has-error";
    				       $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   a = 1;
    					}else{
    					   c1.className = "form-group has-feedback";
    					   $('#id1-1').hide().html('').fadeIn(500);
    					   a = 0;
    					}
				    }
				    
				    function pro_2(){
    		        	if(camp2.value === ""){
    					   c2.className = "form-group has-error";
    					   $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   b = 1;
    					}else if(!/^[0-9\.]+$/.test(camp2.value)){
    				       c2.className = "form-group has-error";
    				       $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   b = 1;
    					}else{
    					   c2.className = "form-group has-feedback";
    					   $('#id2-2').hide().html('').fadeIn(500);
    					   b = 0;
    					}
				    }
				    
				    function pro_3(){
    		        	if(camp3.value === ""){
    					   c3.className = "form-group has-error";
    					   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   c = 1;
    					}else if(!/^[0-9\.]+$/.test(camp3.value)){
    				       c3.className = "form-group has-error";
    				       $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   c = 1;
    					}else{
    					   c3.className = "form-group has-feedback";
    					   $('#id3-3').hide().html('').fadeIn(500);
    					   c = 0;
    					}
				    }
				    
				    function pro_4(){
    		        	if(camp4.value === ""){
    					   c4.className = "form-group has-error";
    					   $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   d = 1;
    					}else if(!/^[0-9\.]+$/.test(camp4.value)){
    				       c4.className = "form-group has-error";
    				       $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   d = 1;
    					}else{
    					   c4.className = "form-group has-feedback";
    					   $('#id4-4').hide().html('').fadeIn(500);
    					   d = 0;
    					}
				    }
				    
				    function pro_5(){
    		        	if(camp5.value === ""){
    					   c5.className = "form-group has-error";
    					   $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   e = 1;
    					}else if(!/^[0-9\.]+$/.test(camp5.value)){
    				       c5.className = "form-group has-error";
    				       $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   e = 1;
    					}else{
    					   c5.className = "form-group has-feedback";
    					   $('#id5-5').hide().html('').fadeIn(500);
    					   e = 0;
    					}
				    }
				    
				    function pro_6(){
    		        	if(camp6.value === ""){
    					   c6.className = "form-group has-error";
    					   $('#id6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   f = 1;
    					}else if(!/^[0-9\.]+$/.test(camp6.value)){
    				       c6.className = "form-group has-error";
    				       $('#id6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   f = 1;
    					}else{
    					   c6.className = "form-group has-feedback";
    					   $('#id6-6').hide().html('').fadeIn(500);
    					   f = 0;
    					}
				    }
				    
				    function pro_7(){
    		        	if(camp7.value === ""){
    					   c7.className = "form-group has-error";
    					   $('#id7-7').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   g = 1;
    					}else if(!/^[0-9\.]+$/.test(camp7.value)){
    				       c7.className = "form-group has-error";
    				       $('#id7-7').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   g = 1;
    					}else{
    					   c7.className = "form-group has-feedback";
    					   $('#id7-7').hide().html('').fadeIn(500);
    					   g = 0;
    					}
				    }
				    
				    function pro_8(){
    		        	if(camp8.value === ""){
    					   c8.className = "form-group has-error";
    					   $('#id8-8').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   h = 1;
    					}else if(!/^[0-9\.]+$/.test(camp8.value)){
    				       c8.className = "form-group has-error";
    				       $('#id8-8').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   h = 1;
    					}else{
    					   c8.className = "form-group has-feedback";
    					   $('#id8-8').hide().html('').fadeIn(500);
    					   h = 0;
    					}
				    }
				    
				    function pro_9(){
    		        	if(camp9.value === ""){
    					   c9.className = "form-group has-error";
    					   $('#id9-9').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   i = 1;
    					}else if(!/^[0-9\.]+$/.test(camp9.value)){
    				       c9.className = "form-group has-error";
    				       $('#id9-9').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   i = 1;
    					}else{
    					   c9.className = "form-group has-feedback";
    					   $('#id9-9').hide().html('').fadeIn(500);
    					   i = 0;
    					}
				    }
				    
				    function pro_10(){
    		        	if(camp10.value === ""){
    					   c10.className = "form-group has-error";
    					   $('#id10-10').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   j = 1;
    					}else if(!/^[0-9\.]+$/.test(camp10.value)){
    				       c10.className = "form-group has-error";
    				       $('#id10-10').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   j = 1;
    					}else{
    					   c10.className = "form-group has-feedback";
    					   $('#id10-10').hide().html('').fadeIn(500);
    					   j = 0;
    					}
				    }
				    
				    function pro_11(){
    		        	if(camp11.value === ""){
    					   c11.className = "form-group has-error";
    					   $('#id11-11').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   k = 1;
    					}else if(!/^[0-9\.]+$/.test(camp11.value)){
    				       c11.className = "form-group has-error";
    				       $('#id11-11').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   k = 1;
    					}else{
    					   c11.className = "form-group has-feedback";
    					   $('#id11-11').hide().html('').fadeIn(500);
    					   k = 0;
    					}
				    }
				    
				    function pro_12(){
    		        	if(camp12.value === ""){
    					   c12.className = "form-group has-error";
    					   $('#id12-12').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   l = 1;
    					}else if(!/^[0-9\.]+$/.test(camp12.value)){
    				       c12.className = "form-group has-error";
    				       $('#id12-12').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Dato incompleto</span>').fadeIn(500);
    					   l = 1;
    					}else{
    					   c12.className = "form-group has-feedback";
    					   $('#id12-12').hide().html('').fadeIn(500);
    					   l = 0;
    					}
				    }
				   
				    function addcase(){
				        pro_1();
                        pro_2();
                        pro_3();
                        pro_4();
                        pro_5();
                        pro_6();
                        pro_7();
                        pro_8();
                        pro_9();
                        pro_10();
                        pro_11();
                        pro_12();


                        if (a === 0 && b === 0 && c === 0 && d === 0 && e === 0 && f === 0 && g === 0 && h === 0 && i === 0 && j === 0 && k === 0 && l === 0){
                            if (confirm("\xbfContinuar y Actualizar?")){
                                var dataString = 'a1=' + camp1.value + '&a2=' + camp2.value + '&a3=' + camp3.value + '&a4=' + camp4.value + '&a5=' + camp5.value + '&a6=' + camp6.value + '&a7=' + camp7.value + '&a8=' + camp8.value + '&a9=' + camp9.value + '&a10=' + camp10.value + '&a11=' + camp11.value + '&a12=' + camp12.value;
                                $('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando...</p>').fadeIn(500);
        						save.enabled = false;
    							$.ajax({
    								type: 'POST',
    								url: 'php/nivel4/val_actualizar.php', 
    								data:  dataString, 
    								success: function(x){
    									if(x==1){
    										$('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Datos actualizados.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
    						            	save.enabled = true;
    									    $('#MsjError').fadeOut(10000);
    									}else if(x==2){
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