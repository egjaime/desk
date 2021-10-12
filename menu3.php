<?php
  //sleep(1);
  ini_set("session.cookie_lifetime","5400");
  ini_set("session.gc_maxlifetime","5400");
  session_start();
  include 'php/conexion_bd.php';
  
  if($_SESSION['servicio'] == "3" || $_SESSION['servicio'] == "0,1,2,3,4,5,6,7,8" || $_SESSION['servicio'] == "1,3" || $_SESSION['servicio'] == "7,3" || $_SESSION['servicio'] == "3,4"){//valido si pertenece a esta campaña
  
  if(!empty($_SESSION['id'])){ 
  //válido si el usuario esta bloqueado
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
  <link rel="shortcut icon" href="assets/img/brand-logo.png">
  <title>Impulsa SC | Desk</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="menu/video/css/modal-video.min.css">

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


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script type="text/javascript" src="js/val_index.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="loader" id="loader"></div>

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="menu3.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="assets/img/logo.png" alt="" width="45" height="30" title="" /></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Impulsa</b>Desk</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        

        <?php if($_SESSION['nivel'] == "2" || $_SESSION['nivel'] == "3" || $_SESSION['nivel'] == "5"){?>
        
           <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-link"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Enlace Transvial</li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="https://servicios.axiscloud.ec/ConsultaInfracciones/paginas/ConsultaInfracciones.jsp?PS_EMPRESA=07#" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/transvial.PNG" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Consulta de Infracciones
                      </h4>
                      <p>Ir a página</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
                 
           <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file-pdf-o"></i>
              <span class="label label-success">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Información Transvial</li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="3_fidelizacion_HBO/documentos/Ayuda Memoria - Reformas Ley Tránsito ( Sobre pago de Multas ).pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/transvial.PNG" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reformas - Pago de Multas
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="3_fidelizacion_HBO/documentos/Reformas LEY DE TRANSITO - 10 de agosto 2021.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/transvial.PNG" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reformas Ley Tránsito
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              

              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>

          
          
          
        <?php } ?>
		

		  
		  
		  
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php if (file_exists($_SESSION['ruta'])) { echo $_SESSION['ruta']; } else { echo "assets/dist/img/avatar.png";  } ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nombre'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php if (file_exists($_SESSION['ruta'])) { echo $_SESSION['ruta']; } else { echo "assets/dist/img/avatar.png";  } ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nombre'] ?> 
				  <small class="menu-icon fa fa-birthday-cake">   
					  <?php echo $_SESSION['cumple'] ?>
			      </small>
                </p>
              </li>
              
              	<li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#" onclick="javascript:enviar_seleccion();"> Campañas</a>
                    </div>
                    <div class="col-xs-4 text-center">
                    </div>
                  </div>
                  <!-- /.row -->
                </li>

			  
              <li class="user-footer">
                <div class="pull-left">
                  <a onclick="javascript:ChangePass();" class="btn btn-default btn-flat">Password</a>
                </div>
                <div class="pull-right">
                  <a  type="button" onclick="javascript:confirmarCerrar();" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
		<ul class="sidebar-menu" data-widget="tree">

		<?php if($_SESSION['nivel'] == "3" || $_SESSION['nivel'] == "2"){?>		  
			<li class="header">FORMULARIOS</li>
			<li>
			  <a href="#" onclick="javascript:ctrl_menu_hbo_va();" id="btn_ges">
				<i class="fa fa-indent"></i> <span>Gestión Cobranzas</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			<li class="header">AGENDAMIENTO</li>
			<li>
			  <a href="#" onClick="pro_pendientes1();">
				<i class="fa fa-folder-o"></i> <span>Agendados Totales</span>
				<span class="pull-right-container">
                  <span class="label label-primary pull-right" id="ppend"><i class="fa fa-refresh fa-spin"></i></span>
                </span>
			  </a>
			</li>
			
			
			<li>
			  <a href="#" onClick="pro_agendados1();">
				<i class="fa fa-check-square-o"></i> <span>Agendados Hoy</span>
				<span class="pull-right-container">
                  <span class="label pull-right bg-yellow" id="pasig"><i class="fa fa-refresh fa-spin"></i></span>
                </span>
			  </a>
			</li>
			
			<li>
			  <a href="#" onClick="pro_rezagos1();">
				<i class="fa fa-warning"></i> <span>Agendados Rezagados</span>
				<span class="pull-right-container">
                  <span class="label pull-right bg-red" id="rez1"><i class="fa fa-refresh fa-spin"></i></span>
                </span>
			  </a>
			</li>
			<li class="header">CONSULTAS</li>
			<li>
			  <a href="#" onclick="javascript:ctrl_menu_hbo_va1();" id="btn_ges">
				<i class="fa fa-table"></i> <span>Total de Casos</span>
				<span class="pull-right-container">
				  <small class="label pull-right bg-green">Nuevo</small>
				</span>
			  </a>
			</li>
			<li class="header">DESCARGAS</li>
			<li>
			  <a href="#" onclick="javascript:descarga_ECDF_cnt();">
				<i class="fa fa-download"></i> <span>Descargar gestión</span>
				<span class="pull-right-container">
                  <span class="label label-primary pull-right" id="descargast"></span>
                </span>
			  </a>
			</li>

            <?php } if($_SESSION['nivel'] == "5"){?>

			<li class="header">DESCARGAS</li>
			<li>
			  <a href="#" onclick="javascript:ctrl_menu_trasnvial();">
				<i class="fa fa-download"></i> <span>Descargar gestión</span>
				<span class="pull-right-container">
                  <span class="label label-primary pull-right" id="descargast"></span>
                </span>
			  </a>
			</li>

			
            <?php } ?>

      </ul>



    </section>
    <!-- /.sidebar -->
  </aside>
  
  
  <!-- Contenido de la cabecera -->
  <div class="content-wrapper" id="content1">
	<section class="content-header" id="content2">
	   <!-- Se carga dinamicamente -->
    </section>
  </div>
  
  

        
         <!------------------------------ /.Eliminar PPV FORMULARIOS DE PRUEBAS---------------------------->
         
         

  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versión</b> 2.1.0
    </div>
    <strong>Impulsa SC &copy; 2019-2022 <a href="#">www.impulsasc.com</a></strong>
    
  </footer>


<?php if($_SESSION['nivel'] == "3" || $_SESSION['nivel'] == "2"){?>
  
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-camera"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-pencil"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Actividades Impulsa</h3>
        <ul class="control-sidebar-menu">
 
           <li>
            <a href="menu/Galeria/galeria_2018_2019.html" target="_blank"">
              <i class="menu-icon fa fa-image (alias) bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Galería 2018-2019</h4>
                <p>Ver imágenes...</p>
              </div>
            </a>
          </li>
		  
		  
		 <li>
            <a href="menu/Galeria/galeria_an_impulsa2019.html" target="_blank"">
              <i class="menu-icon fa fa-birthday-cake (alias) bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Aniversario Impulsa</h4>
                <p>Ver imágenes...</p>
              </div>
            </a>
          </li>

		  
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab"></div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
           <h3 class="control-sidebar-heading">Exámenes Impulsa</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-pencil bg-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Exámen Interno</h4>

                <p>En Construcción...</p>
              </div>
            </a>
          </li>
 

        </ul>
       </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
 
<?php } ?>


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="assets/dist/js/adminlte.min.js"></script>

 <script>

    $("#content1").load('5_ESPECIFICAS/imagen_inicio.html');
    

       $('#datepicker').datepicker({
           autoclose: true
       })

    //aqui llamo a la funcion que valida si necesito el modal
    
    
     pro_charge2();
     pro_charge3();
     pro_charge4();
       function pro_charge2(){
           dataString = '1';
        	$('#pasig').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
        	$.ajax({
        		type: 'POST',
        		url: '3_fidelizacion_HBO/charge2.php', 
        		data:  dataString, 
        		success: function(x){
        		    document.getElementById('pasig').innerHTML = x;
        		}
        	});
        }
        function pro_charge3(){
           dataString = '1';
        	$('#ppend').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
        	$.ajax({
        		type: 'POST',
        		url: '3_fidelizacion_HBO/charge3.php', 
        		data:  dataString, 
        		success: function(x){
        		    document.getElementById('ppend').innerHTML = x;
        		}
        	});
        }
        
        function pro_charge4(){
           dataString = '1';
        	$('#rez1').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
        	$.ajax({
        		type: 'POST',
        		url: '3_fidelizacion_HBO/charge4.php', 
        		data:  dataString, 
        		success: function(x){
        		    document.getElementById('rez1').innerHTML = x;
        		}
        	});
        }
    
    
    
    function pro_agendados1(){
        pro_charge2();
        pro_charge3();
        pro_charge4();
    	$("#content1").load('3_fidelizacion_HBO/php/verPendientesHoy/mis_pendientes.php');
    }
    
    function pro_pendientes1(){
        pro_charge2();
        pro_charge3();
        pro_charge4();
    	$("#content1").load('3_fidelizacion_HBO/php/verPendientes/mis_pendientes.php');
    }
    
    function pro_rezagos1(){
        pro_charge2();
        pro_charge3();
        pro_charge4();
    	$("#content1").load('3_fidelizacion_HBO/php/verRezagos/mis_pendientes.php');
    }
    
  $('#loader').fadeOut(2300);  

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
	
  }else{
        echo '<script language =  javascript>  alert("Sesión Caducada. Ingrese nuevamente"); self.location = "seleccion.php"; </script>';
  }
	
	mysqli_close($enlace);
?>