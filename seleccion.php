<?php
  //sleep(1);
  ini_set("session.cookie_lifetime","5400");
  ini_set("session.gc_maxlifetime","5400");
  session_start();
  include 'php/conexion_bd.php';
  if(!empty($_SESSION['id'])){ 
  //válido si el usuario esta bloqueado
  		$trx="SELECT activo FROM usuarios WHERE id={$_SESSION['id']}";  
		$resB=mysqli_query($enlace,$trx);
		$filaB = mysqli_fetch_array($resB);
		if ($filaB['activo'] != 3){
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="assets/img/brand-logo.png">
  <title>Impulsa SC | Campa&ntilde;a</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <script type="text/javascript" src="js/val_index.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
<style>
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('assets/img/Preloader_2.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .6;
}


img.zoom {
    width: 350px;
    height: 200px;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
}
 
.transition {
    -webkit-transform: scale(1.8); 
    -moz-transform: scale(1.8);
    -o-transform: scale(1.8);
    transform: scale(1.8);
}

</style> 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">

<div class="loader" id="loader"></div>
    
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>Impulsa</b>DESK</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
  
  

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php if (file_exists($_SESSION['ruta'])) { echo $_SESSION['ruta']; } else { echo "assets/dist/img/avatar.png";  } ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $_SESSION['nombre'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php if (file_exists($_SESSION['ruta'])) { echo $_SESSION['ruta']; } else { echo "assets/dist/img/avatar.png";  } ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION['nombre'] ?> 
                    <small class="menu-icon fa fa-birthday-cake">   
					  <?php echo $_SESSION['cumple'] ?>
			      </small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a  type="button" onclick="javascript:confirmarCerrar();" class="btn btn-default btn-flat">Salir</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Seleccione una campa&ntilde;a:</h3>
          </div>
          <div class="box-body">
            <ul>
                <?php if($_SESSION['servicio'] == "1"){?>	
                    <li><a href="#" onclick="javascript:enviar_dth();"> Soporte DTH</a></li>
                <?php }else if($_SESSION['servicio'] == "2"){?>
                    <li><a href="#" onclick="javascript:enviar_1800lojusto();"> 1800LoJusto</a></li>
                <?php }else if($_SESSION['servicio'] == "3"){?>
                    <li><a href="#" onclick="javascript:enviar_fidelizacion_hbo();"> Cobranzas Transvial</a></li>
                <?php }else if($_SESSION['servicio'] == "4"){?>
                    <li><a href="#" onclick="javascript:enviar_colega();"> Soporte Colega</a></li>
                <?php }else if($_SESSION['servicio'] == "5"){?>
                    <li><a href="#" onclick="javascript:enviar_retencion();"> Retención (DTH y TF)</a></li>
                <?php }else if($_SESSION['servicio'] == "6"){?>
                    <li><a href="#" onclick="javascript:enviar_oculto();"> DTH Oculto</a></li>
                <?php }else if($_SESSION['servicio'] == "7"){?>
                    <li><a href="#" onclick="javascript:enviar_informacion();"> Guía de Información (104)</a></li>
                <?php }else if($_SESSION['servicio'] == "7,3"){?>
                    <li><a href="#" onclick="javascript:enviar_informacion();"> Guía de Información (104)</a></li>
                    <li><a href="#" onclick="javascript:enviar_fidelizacion_hbo();"> Cobranzas Transvial</a></li>
                <?php }else if($_SESSION['servicio'] == "8"){?>
                    <li><a href="#" onclick="javascript:enviar_ret_int();"> Retención (Internet)</a></li>
                <?php }else if($_SESSION['servicio'] == "0,1,2,3,4,5,6,7,8"){?>
                    <li><a href="#" onclick="javascript:enviar_manager();"> Supervisores</a></li>
                    <li><a href="#" onclick="javascript:enviar_dth();"> Soporte DTH</a></li>
                    <li><a href="#" onclick="javascript:enviar_1800lojusto();"> 1800LoJusto</a></li>
                    <li><a href="#" onclick="javascript:enviar_fidelizacion_hbo();"> Cobranzas Transvial</a></li>
                    <li><a href="#" onclick="javascript:enviar_colega();"> Soporte Colega</a></li>
                    <li><a href="#" onclick="javascript:enviar_oculto();"> DTH Oculto</a></li>
                    <li><a href="#" onclick="javascript:enviar_informacion();"> Guía de Información (104)</a></li>
                    <li><a href="#" onclick="javascript:enviar_retencion();"> Retención (DTH y TF)</a></li>
                    <li><a href="#" onclick="javascript:enviar_ret_int();"> Retención (Internet)</a></li>
                <?php }else if($_SESSION['servicio'] == "1,3,5"){?>
                    <li><a href="#" onclick="javascript:enviar_dth();"> Soporte DTH</a></li>
                    <li><a href="#" onclick="javascript:enviar_retencion();"> Retención (DTH y TF)</a></li>
                    <li><a href="#" onclick="javascript:enviar_fidelizacion_hbo();"> Cobranzas Transvial</a></li>
                <?php }else if($_SESSION['servicio'] == "1,3"){?>
                    <li><a href="#" onclick="javascript:enviar_dth();"> Soporte DTH</a></li>
                    <li><a href="#" onclick="javascript:enviar_fidelizacion_hbo();"> Cobranzas Transvial</a></li>
                <?php }else if($_SESSION['servicio'] == "1,7"){?>
                    <li><a href="#" onclick="javascript:enviar_dth();"> Soporte DTH</a></li>
                    <li><a href="#" onclick="javascript:enviar_informacion();"> Guía de Información (104)</a></li>
                <?php }else if($_SESSION['servicio'] == "1,4"){?>
                    <li><a href="#" onclick="javascript:enviar_dth();"> Soporte DTH</a></li>
                    <li><a href="#" onclick="javascript:enviar_colega();"> Soporte Colega</a></li>
                <?php }else if($_SESSION['servicio'] == "1,5"){?>
                    <li><a href="#" onclick="javascript:enviar_dth();"> Soporte DTH</a></li>
                    <li><a href="#" onclick="javascript:enviar_retencion();"> Retención (DTH y TF)</a></li>
                <?php }else if($_SESSION['servicio'] == "3,4"){?>
                    <li><a href="#" onclick="javascript:enviar_fidelizacion_hbo();"> Cobranzas Transvial</a></li>
                    <li><a href="#" onclick="javascript:enviar_colega();"> Soporte Colega</a></li>
                <?php }else if($_SESSION['servicio'] == "1,2,3,4,5"){?>
                    <li><a href="#" onclick="javascript:enviar_dth();"> Soporte DTH</a></li>
                    <li><a href="#" onclick="javascript:enviar_1800lojusto();"> 1800LoJusto</a></li>
                    <li><a href="#" onclick="javascript:enviar_fidelizacion_hbo();"> Cobranzas Transvial</a></li>
                    <li><a href="#" onclick="javascript:enviar_colega();"> Soporte Colega</a></li>
                    <li><a href="#" onclick="javascript:enviar_retencion();"> Retención (DTH y TF)</a></li>
                <?php }else if($_SESSION['servicio'] == "5,6"){?>
                    <li><a href="#" onclick="javascript:enviar_oculto();"> DTH Oculto</a></li>
                    <li><a href="#" onclick="javascript:enviar_retencion();"> Retención (DTH y TF)</a></li>
                <?php } ?>
                
                
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.1.0
      </div>
      <strong>Impulsa SC &copy; 2019-2020 <a href="#">www.impulsasc.com</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>

<script>
$('#loader').fadeOut(1000);  
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