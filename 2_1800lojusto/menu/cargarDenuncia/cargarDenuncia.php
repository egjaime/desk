<?php
  //sleep(1);
  session_start();
  date_default_timezone_set("America/Guayaquil"); 
  include '../../../php/conexion_bd.php';
  
  
  if(!empty($_SESSION['id'])){ 
  //valido si el usuario esta bloqueado
  		$trx="SELECT activo FROM usuarios WHERE id={$_SESSION['id']}";  
		$resB=mysqli_query($enlace,$trx);
		$filaB = mysqli_fetch_array($resB);
		if ($filaB['activo'] != 3){
		    
		  $user1 = mysqli_query($enlace, "SELECT usuario FROM usuarios WHERE id={$_SESSION['id']}");
          mysqli_data_seek ($user1, 0);
          $res22=mysqli_fetch_array($user1);
?>


			<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>Formularios - Cargar Denuncia</title>
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

                #modal-default{
                  margin: 0;
                  margin-right: auto;
                  margin-left: auto;
                  width: 100%;
                }

				</style> 

			<!-- Bootstrap time Picker -->
		     <link rel="stylesheet" href="assets/plugins/timepicker/bootstrap-timepicker.min.css">
		     <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">

            

			</head>
			<body class="hold-transition skin-blue sidebar-mini">

				<div class="loader2" id="loader2"></div>

				<section class="content-header">
				  <h1>
					Cargar Denuncia 1800LoJusto
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li class="active">Cargar Denuncia</li>
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
													<label>*Producto/Servicio Afectado:</label>
													<select id="producto" onchange="pro_producto();" onBlur="pro_producto();" class="form-control select2" style="width: 100%;" data-mask tabindex="1">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="PRODUCTO BASICO">Producto Básico</option>
													  <option value="HIDROCARBURO">Hidrocarburo</option>
													  <option value="MEDICAMENTOS">Medicamentos</option>
													  <option value="PASAJES">Pasajes</option>
													  <option value="OTROS">Otros..</option>
													</select>
													<div id="id1-1"></div>
												</div>
												
												
											
											    <div id="id3" class="form-group">
    													<label>*Denunciado:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-user-times"></i>
    													  </div>
    													  <input type="text" class="form-control" id="denunciado" data-mask tabindex="3" onkeypress="pro_denunciado();" onBlur="pro_denunciado();" maxlength="100">
    													</div>
    													<div id="id3-3"></div>
    											</div>
											
											
												<div id="id5" class="form-group">
													<label>*Provincia:</label>
													<select id="provincia" onchange="OnClickCombo();" onBlur="pro_provincia();"  class="form-control select2" style="width: 100%;" data-mask tabindex="5">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="1">PICHINCHA</option>
													  <option value="2">GUAYAS</option>
													  <option value="3">MANABI</option>
    												  <option value="4">AZUAY</option>
													  <option value="5">BOLIVAR</option>
													  <option value="6">CAÑAR</option>
													  <option value="7">CARCHI</option>
													  <option value="8">COTOPAXI</option>
													  <option value="9">CHIMBORAZO</option>
													  <option value="10">EL ORO</option>
													  <option value="11">ESMERALDAS</option>
													  <option value="12">IMBABURA</option>
													  <option value="13">LOJA</option>
													  <option value="14">LOS RIOS</option>
													  <option value="15">MORONA SANTIAGO</option>
													  <option value="16">NAPO</option>
													  <option value="17">PASTAZA</option>
													  <option value="18">TUNGURAHUA</option>
													  <option value="19">ZAMORA CHINCHIPE</option>
													  <option value="20">GALAPAGOS</option>
													  <option value="21">SUCUMBIOS</option>
													  <option value="22">ORELLANA</option>
													  <option value="23">SANTO DOMINGO DE LOS TSACHILAS</option>
													  <option value="24">SANTA ELENA</option>
													</select>
													<div id="id5-5"></div>
												</div>


    											<div id="id6" class="form-group">
        											<label>*Cánton:</label>
        											<div id="charge_select2">
        											<select id="localidad" onblur="pro_localidad();" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
        											      <option selected="selected" value="" disabled>Seleccione provincia..</option>
        											</select>
        											</div>
        											<div id="id6-6"></div>
        										</div>
        										
        										
        										<div id="id8" class="form-group">
													<label>*Denunciante:</label>
													<select id="denunciante" onchange="pro_denunciante();" onblur="pro_denunciante();" class="form-control select2" style="width: 100%;" data-mask tabindex="8">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="ANONIMO">Anonimo</option>
													  <option value="DATOS DEL USUARIO">Datos del Usuario</option>
													</select>
													<div id="id8-8"></div>
												</div>
												
												<div id="DN2" style="display: none">	
            										<div id="id10" class="form-group">
    													<label>Teléfono:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    														<i class="fa fa-phone"></i>
    													  </div>
    													  <input type="text" class="form-control" id="telf1" onBlur="pro_telf1();" onkeypress="pro_telf1();" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="10" >
    													</div>
    													<div id="id10-10"></div>
    												</div>
    												
    											<div id="o_id98" style="display: none">	
												<div class="form-group">
                                                  <p class="help-block">* Campos Obligatorios.</p>
                                                </div>
                                            </div>
    												
												</div>
												
									</div>

											<!-- /.columna derecha -->
											<div class="col-md-6">
											    

											    
											    
											    <div id="id2" class="form-group">
													<label>*Tipo de Denuncia:</label>
													<select id="tipo_denuncia" onchange="pro_tipo();" onBlur="pro_tipo();" class="form-control select2" style="width: 100%;" data-mask tabindex="2">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="ALZA DE PRECIOS">Alza de Precios</option>
													  <option value="CONTRABANDO">Contrabando</option>
													  <option value="DISTRIBUCION">Distribución</option>
													  <option value="NO HAY PRODUCTO">No hay Producto</option>
													</select>
													<div id="id2-2"></div>
												</div>
										
											
											
												<div id="id4" class="form-group">
													 <label>*Denuncia:</label>
													 <textarea class="form-control" rows="2" id="detail_denuncia" onkeypress="pro_denuncia();" onBlur="pro_denuncia();" placeholder="..." style="resize: none;" data-mask tabindex="4" maxlength="500"></textarea>
												     <div id="id4-4"></div>
												</div>
											
											
											
												<div id="id7" class="form-group">
													 <label>*Dirección:</label>
													 <textarea class="form-control" rows="2" id="dir" onkeypress="pro_dir();" onBlur="pro_dir();" placeholder="..." style="resize: none;" data-mask tabindex="7" maxlength="500"></textarea>
												     <div id="id7-7"></div>
												</div>
												
											<div id="o_id99">	
												<div class="form-group">
                                                  <p class="help-block">* Campos Obligatorios.</p>
                                                </div>
                                            </div>
												
												<div id="DN1" style="display: none">
    												<div id="id3" class="form-group">
        													<label>Nombre del Denunciante:</label>
        													<div class="input-group">
        													  <div class="input-group-addon">
        													<i class="fa fa-user"></i>
        													  </div>
        													  <input type="text" class="form-control" id="name_denunciante"  onKeyPress="return soloLetras(event)" data-mask tabindex="9" onBlur="pro_denunciante();" maxlength="100">
        													</div>
        													<div id="id3-3"></div>
        											</div>
        											
            										<div id="d5" class="form-group">
                    							        <label for="exampleInputEmail1">Correo Eléctronico:</label>
                    							        <div class="input-group">
                        							        <div class="input-group-addon">
            													<i class="fa fa-envelope-o"></i>
            												</div>
                    							            <input type="email" class="form-control" id="email" onkeypress="pro_mail(email.value);" onBlur="pro_mail(email.value);" placeholder="correo@dominio.com" data-mask tabindex="11">
                    						             </div>	
                    						             <div id="id22-22"></div>
                						             </div>
        											
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
														<button type="button" id="cancel" data-mask tabindex="15" onClick="clean2();" class="btn btn-info pull-right">Cancelar</button>
													</td>
													<td width="2%">	
													</td>
													<td width="49%">
														<button type="button" data-mask tabindex="14" id="save" onClick="addDenuncia();" class="btn btn-info pull-left" >Guardar</button>
													 </td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>

					</section>

				</form>
                  


				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		    	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		    	
                <script>
                    var camp1 = document.getElementById("producto");
                    var camp2 = document.getElementById("tipo_denuncia");
                    var camp3 = document.getElementById("denunciado");
                    var camp4 = document.getElementById("detail_denuncia");
                    var camp5 = document.getElementById("provincia");
                    var camp6 = document.getElementById("localidad");
                    var camp7 = document.getElementById("dir");
                    var camp8 = document.getElementById("denunciante");
                    var camp9 = document.getElementById("name_denunciante");
                    var camp10 = document.getElementById("telf1");
                    var camp11 = document.getElementById("email");
                    var m_id_1 = 0;
                    var m_id_2 = 0;
                    var m_id_3 = 0;
                    var m_id_4 = 0;
                    var m_id_5 = 0;
                    var m_id_6 = 0;
                    var m_id_7 = 0;
                    var m_id_8 = 0;
                    var m_id_10 = 0;
                    var m_id_11 = 0;

                    
                    $(function () {
    					//Datemask dd/mm/yyyy
    					$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    					//Datemask2 mm/dd/yyyy
    					$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    					//Money Euro
    					$('[data-mask]').inputmask()
  				    })
  				    
  				    function pro_producto() {
                        if(camp1.value === ""){
    					   document.getElementById("id1").className = "form-group has-error";
    					   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
    					   m_id_1 = 1;
                        }else{
    					   document.getElementById("id1").className = "form-group has-feedback";
        				   $('#id1-1').hide().html('').fadeIn(500);
        				   m_id_1 = 0;
    					}
                    }
                    
                    function pro_tipo() {
                        if(camp2.value === ""){
    					   document.getElementById("id2").className = "form-group has-error";
    					   $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
                           m_id_2 = 1;  
                        }else{
    					   document.getElementById("id2").className = "form-group has-feedback";
        				   $('#id2-2').hide().html('').fadeIn(500);
                           m_id_2 = 0; 
    					}
                    }
                    
                    function pro_denunciado() {
                        if(camp3.value === ""){
    					   document.getElementById("id3").className = "form-group has-error";
    					   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
                           m_id_3 = 1; 
     					}else{
    					   document.getElementById("id3").className = "form-group has-feedback";
        				   $('#id3-3').hide().html('').fadeIn(500);
        				   m_id_3 = 0; 
    					}
                    }
                    
                    function pro_denuncia() {
                        if(camp4.value === ""){
    					   document.getElementById("id4").className = "form-group has-error";
    					   $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    					   m_id_4 = 1;
                        }else{
    					   document.getElementById("id4").className = "form-group has-feedback";
        				   $('#id4-4').hide().html('').fadeIn(500);
    					   m_id_4 = 0;
                        }
                    }
                    
                    
                    function pro_provincia() {
                        if(camp5.value === ""){
    					   document.getElementById("id5").className = "form-group has-error";
    					   $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione la provincia</span>').fadeIn(500);
    					   m_id_5 = 1;
                        }else{
    					   document.getElementById("id5").className = "form-group has-feedback";
        				   $('#id5-5').hide().html('').fadeIn(500);
    					   m_id_5 = 0;
                        }
                    }
                    
                    
                    function pro_localidad() {
                        var combo2 = document.getElementById("localidad");
                        var selectedProv2 = combo2.options[combo2.selectedIndex].text;
                        if(camp5.value != ""){
                            if(selectedProv2 === "Seleccione.."){
        					   document.getElementById("id6").className = "form-group has-error";
        					   $('#id6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione Cánton</span>').fadeIn(500);
        					   m_id_6 = 1;
                            }else{
        					   document.getElementById("id6").className = "form-group has-feedback";
            				   $('#id6-6').hide().html('').fadeIn(500);
                               m_id_6 = 0;
        					}
                        }
                      }
                      
                     function pro_dir() {
                        if(camp7.value === ""){
    					   document.getElementById("id7").className = "form-group has-error";
    					   $('#id7-7').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    				       m_id_7 = 1;
    					}else{
    					   document.getElementById("id7").className = "form-group has-feedback";
        				   $('#id7-7').hide().html('').fadeIn(500);
    					   m_id_7 = 0;
    					}
                    }
                    
                    
                    function pro_denunciante(){
                        if (document.getElementById("denunciante").value === "DATOS DEL USUARIO"){
                            document.getElementById('DN1').style.display = '';
                            document.getElementById('DN2').style.display = '';
                            document.getElementById('o_id99').style.display = 'none';
                            document.getElementById('o_id98').style.display = '';
                        }else{
                            document.getElementById('DN1').style.display = 'none';
                            document.getElementById('DN2').style.display = 'none';
                            document.getElementById('o_id99').style.display = '';
                            document.getElementById('o_id98').style.display = 'none';
                            
                        }
                        if(camp8.value === ""){
    					   document.getElementById("id8").className = "form-group has-error";
    					   $('#id8-8').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
    					   m_id_8 = 1;
                        }else{
    					   document.getElementById("id8").className = "form-group has-feedback";
        				   $('#id8-8').hide().html('').fadeIn(500);
        				   m_id_8 = 0;
    					}
                    }
                    
                    
                    function pro_telf1(){
                        if(camp10.value != "" ){
                            val1 = 0;
    				        for (var i = 0; i < 14; i++) {
                               if (camp10.value.charAt(i) == "_"){
                                   val1 = 1;
                               }
                            }
        					if(val1 == "1" ){
        				       document.getElementById("id10").className = "form-group has-error";
        				       $('#id10-10').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Teléfono incompleto</span>').fadeIn(500);
        					   m_id_10 = 1;
        					}else{
        					   document.getElementById("id10").className = "form-group has-feedback";
        					   $('#id10-10').hide().html('').fadeIn(500);
        					   m_id_10 = 0;
        					}
        					val1 = 0;
                        }else{
                            document.getElementById("id10").className = "form-group has-feedback";
        					$('#id10-10').hide().html('').fadeIn(500);
        					m_id_10 = 0;
                        }
				    }
                    
  				    
  				    function pro_mail(valor){
    					if(camp11.value != ""){
    					    re=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/     //minusculas y mayusculas
    					    //re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/       //solo minusculas
                        	if(!re.exec(valor)){
                        	   document.getElementById("d5").className = "form-group has-error";
        					   $('#id22-22').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Formato incorrecto</span>').fadeIn(500);
                        	   m_id_11 = 1;
                        	}else{
                               document.getElementById("d5").className = "form-group has-feedback";
        					   $('#id22-22').hide().html('').fadeIn(500);
        					   m_id_11 = 0;
                        	}

    					}else{
    					       document.getElementById("d5").className = "form-group has-feedback";
        					   $('#id22-22').hide().html('').fadeIn(500);
        					   m_id_11 = 0;
    					}
    					
				    }
				    

                    $('#charge_select2').hide().html('<select id="localidad" onchange="pro_localidad();" onblur="pro_localidad();" class="form-control select2" style="width: 100%;" data-mask tabindex="6"><option selected="selected" value="" disabled>Seleccione provincia..</option></select>').fadeIn(1);
                
                
                    function OnClickCombo(){
				        var dataString = 'a1=' + camp5.value;
				        $.ajax({
    						type: 'POST',
    						url: 'php/user/escalarvt/cargar_list.php', 
    						data:  dataString, 
    						success: function(x){
    						    $('#charge_select2').hide().html(x).fadeIn(1);
    						}
						});
				    }
				    
				    
				    function soloLetras(e) {
                        tecla = (document.all) ? e.keyCode : e.which;
                        if (tecla==8) return true;
                        patron =/[A-Za-z\s]/;
                        te = String.fromCharCode(tecla);
                        return patron.test(te);
                    }
                    
                           function clean(){
                                camp1.value = "";
                                camp2.value = "";
                                camp3.value = "";
                                camp4.value = "";
                                camp5.value = "";
                                $('#charge_select2').hide().html('<select id="localidad" onchange="pro_localidad();" onblur="pro_localidad();" class="form-control select2" style="width: 100%;" data-mask tabindex="6"><option selected="selected" value="" disabled>Seleccione provincia..</option></select>').fadeIn(1);
                                camp7.value = "";
                                camp8.value = "";
                                camp9.value = "";
                                camp10.value = "";
                                camp11.value = "";
                                document.getElementById('DN1').style.display = 'none';
                                document.getElementById('DN2').style.display = 'none';
                                document.getElementById('o_id99').style.display = '';
                                document.getElementById('o_id98').style.display = 'none';
                                
                                document.getElementById("d5").className = "form-group has-feedback";
                                $('#id22-22').hide().html('').fadeIn(500);
                                
                                document.getElementById("id1").className = "form-group has-feedback";
        				        $('#id1-1').hide().html('').fadeIn(500);
        				        
                                document.getElementById("id2").className = "form-group has-feedback";
        				        $('#id2-2').hide().html('').fadeIn(500);
        				        
                                document.getElementById("id3").className = "form-group has-feedback";
        				        $('#id3-3').hide().html('').fadeIn(500);       
        				        
        				        document.getElementById("id4").className = "form-group has-feedback";
        				        $('#id4-4').hide().html('').fadeIn(500); 
        				        
        				        document.getElementById("id5").className = "form-group has-feedback";
        				        $('#id5-5').hide().html('').fadeIn(500); 
        				        
        					   document.getElementById("id6").className = "form-group has-feedback";
            				   $('#id6-6').hide().html('').fadeIn(500);
        				        
        					   document.getElementById("id7").className = "form-group has-feedback";
            				   $('#id7-7').hide().html('').fadeIn(500);
            				   
        					   document.getElementById("id8").className = "form-group has-feedback";
            				   $('#id8-8').hide().html('').fadeIn(500);
            				   
                			   document.getElementById("id9").className = "form-group has-feedback";
        					   $('#id9-9').hide().html('').fadeIn(500);
        					   
        					   val1 = 0;
                			   document.getElementById("id10").className = "form-group has-feedback";
        					   $('#id10-10').hide().html('').fadeIn(500);
                               pro_telf1();
        					   
                			   document.getElementById("id11").className = "form-group has-feedback";
        					   $('#id11-11').hide().html('').fadeIn(500);
        					   $('#MsjError').fadeOut(500);
        					   window.scrollTo(500, 0);
                        }
                
                    function clean2(){
                        if(camp1.value != "" || camp2.value != "" || camp3.value != "" || camp4.value != "" || camp5.value != "" ||  camp6.value != "" ||  camp7.value != "" ||  camp8.value != "" ||  camp9.value != "" ||  camp10.value != "" ||  camp11.value != ""){
                            if (confirm("\xbfBorrar información de campos?")){
                                camp1.value = "";
                                camp2.value = "";
                                camp3.value = "";
                                camp4.value = "";
                                camp5.value = "";
                                $('#charge_select2').hide().html('<select id="localidad" onchange="pro_localidad();" onblur="pro_localidad();" class="form-control select2" style="width: 100%;" data-mask tabindex="6"><option selected="selected" value="" disabled>Seleccione provincia..</option></select>').fadeIn(1);
                                camp7.value = "";
                                camp8.value = "";
                                camp9.value = "";
                                camp10.value = "";
                                camp11.value = "";
                                document.getElementById('DN1').style.display = 'none';
                                document.getElementById('DN2').style.display = 'none';
                                document.getElementById('o_id99').style.display = '';
                                document.getElementById('o_id98').style.display = 'none';
                                
                                document.getElementById("d5").className = "form-group has-feedback";
                                $('#id22-22').hide().html('').fadeIn(500);
                                
                                document.getElementById("id1").className = "form-group has-feedback";
        				        $('#id1-1').hide().html('').fadeIn(500);
        				        
                                document.getElementById("id2").className = "form-group has-feedback";
        				        $('#id2-2').hide().html('').fadeIn(500);
        				        
                                document.getElementById("id3").className = "form-group has-feedback";
        				        $('#id3-3').hide().html('').fadeIn(500);       
        				        
        				        document.getElementById("id4").className = "form-group has-feedback";
        				        $('#id4-4').hide().html('').fadeIn(500); 
        				        
        				        document.getElementById("id5").className = "form-group has-feedback";
        				        $('#id5-5').hide().html('').fadeIn(500); 
        				        
        					   document.getElementById("id6").className = "form-group has-feedback";
            				   $('#id6-6').hide().html('').fadeIn(500);
        				        
        					   document.getElementById("id7").className = "form-group has-feedback";
            				   $('#id7-7').hide().html('').fadeIn(500);
            				   
        					   document.getElementById("id8").className = "form-group has-feedback";
            				   $('#id8-8').hide().html('').fadeIn(500);
            				   
                			   document.getElementById("id9").className = "form-group has-feedback";
        					   $('#id9-9').hide().html('').fadeIn(500);
        					   
        					   val1 = 0;
                			   document.getElementById("id10").className = "form-group has-feedback";
        					   $('#id10-10').hide().html('').fadeIn(500);
                               pro_telf1();
        					   
                			   document.getElementById("id11").className = "form-group has-feedback";
        					   $('#id11-11').hide().html('').fadeIn(500);
        					   $('#MsjError').fadeOut(500);
        					   window.scrollTo(500, 0);
        					   
                            }
                        }else{
                            
                                $('#charge_select2').hide().html('<select id="localidad" onchange="pro_localidad();" onblur="pro_localidad();" class="form-control select2" style="width: 100%;" data-mask tabindex="6"><option selected="selected" value="" disabled>Seleccione provincia..</option></select>').fadeIn(1);
                                
                                camp10.focus();
                                camp11.focus();
                                
                                document.getElementById("d5").className = "form-group has-feedback";
                                $('#id22-22').hide().html('').fadeIn(500);
                                
                                document.getElementById("id1").className = "form-group has-feedback";
        				        $('#id1-1').hide().html('').fadeIn(500);
        				        
                                document.getElementById("id2").className = "form-group has-feedback";
        				        $('#id2-2').hide().html('').fadeIn(500);
        				        
                                document.getElementById("id3").className = "form-group has-feedback";
        				        $('#id3-3').hide().html('').fadeIn(500);       
        				        
        				        document.getElementById("id4").className = "form-group has-feedback";
        				        $('#id4-4').hide().html('').fadeIn(500); 
        				        
        				        document.getElementById("id5").className = "form-group has-feedback";
        				        $('#id5-5').hide().html('').fadeIn(500); 
        				        
        					   document.getElementById("id6").className = "form-group has-feedback";
            				   $('#id6-6').hide().html('').fadeIn(500);
        				        
        					   document.getElementById("id7").className = "form-group has-feedback";
            				   $('#id7-7').hide().html('').fadeIn(500);
            				   
        					   document.getElementById("id8").className = "form-group has-feedback";
            				   $('#id8-8').hide().html('').fadeIn(500);
            				   
                			   document.getElementById("id9").className = "form-group has-feedback";
        					   $('#id9-9').hide().html('').fadeIn(500);
        					   
                			   document.getElementById("id10").className = "form-group has-feedback";
        					   $('#id10-10').hide().html('').fadeIn(500);
        					   
                			   document.getElementById("id11").className = "form-group has-feedback";
        					   $('#id11-11').hide().html('').fadeIn(500);
            				   $('#MsjError').fadeOut(500);
            				   window.scrollTo(500, 0);
                            }
                    }
                    
                    
                    function addDenuncia(){
                        var combo = document.getElementById("provincia");
                        var selectedProv = combo.options[combo.selectedIndex].text;
                        
                        var combo2 = document.getElementById("localidad");
                        var selectedProv2 = combo2.options[combo2.selectedIndex].text;

                        var band = 1;
                        var dat1 = "";
                        var dat2 = "";
                        var dat3 = "";
                        //llamo a los procedimientos
                        pro_producto();
                        pro_tipo();
                        pro_denunciado();
                        pro_denuncia();
                        pro_provincia();
                        pro_localidad();
                        pro_dir();
                        pro_denunciante();
                        pro_telf1();
                        pro_mail();
                        
                        if (m_id_1 != 1 || m_id_2 != 1 || m_id_3 != 1 || m_id_4 != 1 || m_id_5 != 1 || m_id_6 != 1 || m_id_7 != 1 || m_id_8 != 1 || m_id_10 != 1 || m_id_11 != 1){
                            if (camp8.value === "ANONIMO"){
                               dat1 = "ANONIMO";
                               dat2 = "N/A";
                               dat3 = "N/A";
                               band = 0;
                            }else if(camp8.value === "DATOS DEL USUARIO"){
                                if (camp9.value === "" && camp10.value === "" && camp11.value === ""){
                                    alert("Complete al menos un campo (Nombre, Teléfono, Email).");
                                    band = 1;
                                }else{
                                    if(camp9.value === ""){
                                        dat1 = "N/A";
                                    }else{
                                        dat1 = camp9.value;
                                    }
                                    if(camp10.value === ""){
                                        dat2 = "N/A";
                                    }else{
                                        dat2 = camp10.value;
                                    }
                                    if(camp11.value === ""){
                                        dat3 = "N/A";
                                    }else{
                                        dat3 = camp11.value;
                                    }
                                    band = 0;
                                }                     
                            }
                            if(band === 0){
                               var dataString = 'a1=' + camp1.value + '&a2=' + camp2.value + '&a3=' + camp3.value + '&a4=' + camp4.value + '&a5=' + selectedProv + '&a6=' + selectedProv2 + '&a7=' + camp7.value + '&a9=' + dat1 + '&a10=' + dat2 + '&a11=' + dat3;
                            }
                            
                        }else{
                            band = 1;
                        }//fin de m_id
                        
                        if (selectedProv2 === "Seleccione.." || selectedProv2 === "Seleccione provincia.."){
                            band = 1;
                        }

                        if(band === 0){

                            if (confirm("\xbfContinuar y guardar?")){
                                cancel.disabled = true;
        						save.disabled = true;
        						$('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando...</p>').fadeIn(500);
                                
                                $.ajax({
        							type: 'POST',
        							url: '2_1800lojusto/php/val_denuncia.php', 
        							data:  dataString, 
        							success: function(x){
        							    if(x=="e_2"){
        									cancel.disabled = false;
                        					save.disabled = false;
        									$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Complete todos los campos obligatorios (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
        								}else if(x=="e_7"){
        								    alert("Sesión Caducada. Vuelve a iniciar sesión");
        								    self.location = "index.php";
        								}else{
        								    $('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Denuncia Enviada!</strong> N° Reporte: <strong>' + x + '</strong><a href="#" class="alert-link"></a></div>').fadeIn(500);
                        					cancel.disabled = false;
                        					save.disabled = false;
        								    clean();
        								    $('#MsjError').fadeOut(10000);
        								}
        							}
        						});
        						
                            }//fin del continuar y guardar.
                            
                        }

                    }//fin de la funcion
                    
                    
                
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