<?php
    //desactivo los mensajes de notice
    error_reporting(0);
	//inicio la sesion
	session_start(); 
	if(!empty($_SESSION['id'])){ 
	   header('Location:seleccion.php');
    }else{ 
?>

		<!DOCTYPE html>
		<html>
		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <link rel="shortcut icon" href="assets/img/brand-logo.png">
		  <title>Impulsa | Desk</title>
		  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
		  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
		  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
		  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
		  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
		  <script type="text/javascript" src="js/val_index.js"></script>
		</head>
		<body class="hold-transition login-page" oncopy='return false' oncut='return false' onpaste='return false'>
		<div class="login-box">
		  <div class="login-box-body">
			<div align="center"><img src="assets/img/brand.png"></div>
			<form method="post" id="fvalida" name="fvalida" >
			    
			  <div class="form-group has-feedback" id="camp1">
				<input type="user" name="user" id="user" class="form-control" onKeyPress="return validar_texto(event)" onKeyDown="if(event.ctrlKey && event.keyCode==86){return false;}" placeholder="Usuario" oninvalid="setCustomValidity('El usuario es obligatorio')" oninput="setCustomValidity('')" required>
				<span id="sp1" class="glyphicon glyphicon-user form-control-feedback"></span>
			  </div>
			  


			  <div class="form-group has-feedback" id="camp2">
				<input type="password" name="pass" id="pass" class="form-control" onKeyPress="return validar_texto(event)" onKeyDown="if(event.ctrlKey && event.keyCode==86){return false;}" placeholder="Contraseña" oninvalid="setCustomValidity('El password es obligatorio')" oninput="setCustomValidity('')" required>
				<span id="sp2" class="glyphicon glyphicon-lock form-control-feedback"></span>
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
			  
			  <div class="row">
				<div class="col-xs-8">
				  </div>
				<div class="col-xs-4">
				 <div id="cp1"> <button type="button" id="bt1" onclick="javascript:sendForm();" class="btn btn-primary btn-block btn-flat">Ingresar</button> </div>
				</div>
			  </div>
			</form>
		  </div>
		</div>
		<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="assets/plugins/iCheck/icheck.min.js"></script>
		<script>
		  $(function () {
			$('input').iCheck({
			  checkboxClass: 'icheckbox_square-blue',
			  radioClass: 'iradio_square-blue',
			  increaseArea: '20%' /* optional */
			});
		  });
		</script>
		</body>
		</html>

<?php
	  echo '<script language=javascript> document.fvalida.user.focus();</script>';
	  session_unset($_SESSION['Errores']); 
	  session_unset($_SESSION['ErrorInit']);
   }
?>