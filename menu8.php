<?php
  //sleep(1);
  ini_set("session.cookie_lifetime","5400");
  ini_set("session.gc_maxlifetime","5400");
  session_start();
  include 'php/conexion_bd.php';
  
  if($_SESSION['servicio'] == "8" || $_SESSION['servicio'] == "1,2,3,4,5" || $_SESSION['servicio'] == "1,5" || $_SESSION['servicio'] == "1,3,5" || $_SESSION['servicio'] == "0,1,2,3,4,5,6,7,8" || $_SESSION['servicio'] == "5,6"){//valido si pertenece a esta campaña
  
  if(!empty($_SESSION['id'])){ 
  //válido si el usuario esta bloqueado
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
  <!-- Theme style -->
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
    <a href="menu5.php" class="logo">
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
        

        <?php if($_SESSION['nivel'] == "2" || $_SESSION['nivel'] == "3"){?>
        
        <!-- /.  
        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-futbol-o"></i>
              <span class="label label-warning">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">17 de Noviembre</li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="documentos/capsulas/APOYO PARA LA CAMPAÑA SOPORTE DTH N1.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/conmebol_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Eliminatorias Conmebol.
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li>
                <ul class="menu">
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-SVA">
                      <div class="pull-left">
                        <img src="assets/img/conmebol_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Bitácora de Activaciones.
                      </h4>
                      <p>Ingresar datos</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li>
                <ul class="menu">
                  <li>
                    <a href="5_ESPECIFICAS/documentos/RENTABILIZACIÓN EL CANAL DEL FUTBOL.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/conmebol_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Rentabilización ECDF.
                      </h4>
                      <p>Ingresar datos</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
          -->
                  <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-dollar (alias)"></i>
              <span class="label label-success">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Cobranzas CNT</li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/cobranzas tmp/INFORMACIÓN DE COBRANZA.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Informacion de Cobranza
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>

              
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/cobranzas tmp/FORMULARIOS Y IPIFICACIÓN DE COBRANZA.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Tipificacion y Formulario
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/cobranzas tmp/ENTIDADES DE RECAUDACIÓN PARA COBRANZA.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Entidades de recaudacion
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-mobile"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">SMA</li>
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/documentos/INFORMACIÓN CLIENTES SMA DATOS + VOZ 9 .pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Informacion SMA
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>

          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-users"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">50% Cobre</li>
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/documentos/INFORMACIÓN CLIENTES EN RIESGO IF COBRE.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Informacion COBRE
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-wifi"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Duplicidad GPON</li>
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/cobranzas tmp/scrip if gpon y cobre.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Informacion Duplicidad GPON
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-dollar (alias)"></i>
              <span class="label label-success">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Cobranzas CNT</li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/cobranzas tmp/INFORMACIÓN DE COBRANZA.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Informacion de Cobranza
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>

              
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/cobranzas tmp/FORMULARIOS Y IPIFICACIÓN DE COBRANZA.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Tipificacion y Formulario
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="8_ESPECIFICAS_INT/cobranzas tmp/ENTIDADES DE RECAUDACIÓN PARA COBRANZA.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Entidades de recaudacion
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
        
        
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-home"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Info Impulsa</li>
              
               <li>
                             
                <ul class="menu">
                  <li>
                    <a href="#"  data-toggle="modal" data-target="#modal-INICIO">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Información del día.
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>

              
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
          
            <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-warning"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Liga Pro</li>
              
               <li>
                             
                <ul class="menu">
                  <li>
                    <a href="5_ESPECIFICAS/documentos/INFO RETENCION.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Retención DTH Liga Pro
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>

              
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
        
        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-list "></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Catálogo</li>
              

               <li>
                             
                <ul class="menu">
                  <li>
                    <a href="documentos/capsulas/CATÁLOGO_PRODUCTOS_Y_SERVICIOS.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Catálogo de Productos y Servicios 
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>

              
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
        
        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-building"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">CIS CNT</li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="documentos/agencias/PROCESO DE RECEPCION DE EQUIPOS.PDF" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Proceso entrega de equipos
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                   
                </ul>
              </li>
              
              <li>
                <ul class="menu">
                  <li>
                    <a href="5_ESPECIFICAS/documentos/Listado de centros de atencion al cliente abiertos 01-08-2020 VF.xlsx">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Agencias recepción de equipos
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
          

              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
        
        <!--
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-video-camera"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Videoinfo</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#" class="js-video-button" data-channel="video" data-video-url="4_COLEGA/video/MENSAJE INFORMATIVO CORONAVIRUS.mp4">
                      <i class="fa fa-play text-blue"></i> Prevención Coronavirus
                    </a>
                  </li>
                </ul>
              </li>

            

              <li>
                <ul class="menu">
                  <li>
                    <a href="#" class="js-video-button" data-channel="video" data-video-url="4_COLEGA/video/Planes Academicos CNT.mp4">
                      <i class="fa fa-play text-blue"></i> Planes Académicos CNT
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Video CNT-IMPULSA</a></li>
            </ul>
            
          </li>
          -->

          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-info"></i>
              <span class="label label-success">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Cápsulas de información</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultCiclos">
                      <i class="fa fa-info text-aqua"></i> Ciclos de Facturación
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-linksGuia">
                      <i class="fa fa-info text-red"></i> Guías Comerciales
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Cápsulas</a></li>
            </ul>
          </li>



          <!-- Correo y Citrix-->
          
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-cogs"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Herramientas</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                   <li>
                    <a href="#" onclick="javascript:IrCitrix();" class="dropdown-toggle" data-toggle="dropdown" title="Solicitar Citrix">
                      <i class="fa fa-share-alt text-red"></i> Solicitar cuenta Citrix
                    </a>
                  </li>
                  <li>
                    <a href="#" onclick="javascript:IrCorreo();" class="dropdown-toggle" data-toggle="dropdown" title="Ir a correo Impulsa">
                      <i class="fa fa-envelope-o text-aqua"></i> Ir a Correo Impulsasc.com
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Herramientas</a></li>
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

		<?php if($_SESSION['nivel'] == "3"){?>	
		    
			<li class="header">FORMULARIOS</li>
			<li>
			  <a href="#" onclick="javascript:ctrl_menu_retencion();" id="btn_ges">
				<i class="fa fa-indent"></i> <span>Cargar Retención</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-upload"></i> <span>Reportar</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="#" data-toggle="modal" data-target="#modal-carterizado"><i class="fa fa-circle-o"></i> Carterizado</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-virtuales"><i class="fa fa-circle-o"></i> Virtual</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-cierres"><i class="fa fa-circle-o"></i> Cierres IC-OPEN</a></li>
			  </ul>
			</li>
			<!--
			<li>
			  <a href="#" onClick="pro_pendientesR();" data-toggle="modal" data-target="#modal-defaultCargasR">
				<i class="fa fa-exclamation"></i> <span>Retenciones Pendientes</span>
				<span class="pull-right-container">
                  <span class="label label-primary pull-right" id="pomniR"><i class="fa fa-refresh fa-spin"></i></span>
                </span>
				<span class="pull-right-container">
				</span>
			  </a>
			</li>
			-->
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				    
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionRET();"><i class="fa fa-circle-o"></i> Descargar Retenciones</a></li>
			  </ul>
			</li>
			


			<li>
			  <a href="#" onClick="pro_pendientes1();">
				<i class="fa fa-folder-o"></i> <span>Retenciones pendientes</span>
				<span class="pull-right-container">
                  <span class="label label-primary pull-right" id="ppend"><i class="fa fa-refresh fa-spin"></i></span>
                </span>
			  </a>
			</li>
			
		<li class="header">ENTRANTES</li>
			<li>
			  <a href="#" data-toggle="modal" data-target="#modal-bit-cas">
				<i class="fa fa-share-square-o"></i> <span>Bitácora sin alcance</span>
				<span class="pull-right-container">
				  <small class="label pull-right bg-green">Nuevo</small>
				</span>
			  </a>
			</li>

			<li class="treeview">
			  <a href="#">
				<i class="fa fa-warning (alias)"></i> <span>Manuales</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			   <li><a href="5_ESPECIFICAS/documentos/GESTION_ENTRANTE.pdf" target="_blank"><i class="fa fa-circle-o"></i> Gestión Entrante</a></li>
			    <li><a href="5_ESPECIFICAS/documentos/MANUAL DE RETENCION REACTIVA OMNICANAL 28_06_21.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de procedimientos</a></li>
			  </ul>
			</li>
			
		<li class="header">CONSULTAS</li>
			<li>
			  <a href="#" onclick="javascript:ctrl_menu_sup_export_gestionRETENCION_CONSULTA();" id="btn_hola">
				<i class="fa fa-search"></i> <span>Consultar Cédula</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>

        <li class="header">SOPORTE TV</li>
			
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-warning (alias)"></i> <span>Errores en Decos</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="#" data-toggle="modal" data-target="#modal-defaultError1"><i class="fa fa-circle-o"></i> Error A001</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-defaultError2"><i class="fa fa-circle-o"></i> Error A005</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-defaultError3"><i class="fa fa-circle-o"></i> Error A010</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-defaultError4"><i class="fa fa-circle-o"></i> Error A011</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-defaultError5"><i class="fa fa-circle-o"></i> Error A012</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-defaultError6"><i class="fa fa-circle-o"></i> Error A014</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-defaultError7"><i class="fa fa-circle-o"></i> Bloqueo 15 días</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-defaultError8"><i class="fa fa-circle-o"></i> Canal Codificado</a></li>
			  </ul>
			</li>
			
		    <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i> <span>Configuraciones</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
 			    <li><a href="#" data-toggle="modal" data-target="#modal-decodificadores"><i class="fa fa-circle-o"></i> Decodificadores</a></li>
                <li><a href="documentos/controles/CONFIGURACION DEL CONTROL UNIVERSAL.pdf" target="_blank"><i class="fa fa-circle-o"></i> Controles</a></li>
              </ul>
          
           </li>
           <li>
              <a href="5_ESPECIFICAS/documentos/TELEVISIÓN SATELITAL_RETENCIÓN_REACTIVA.pdf" target="_blank">
				<i class="fa fa-tv"></i> <span>Retención reactiva TV</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-list-ol"></i> <span>Motivos de Rechazos</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="#" onClick="pro_pendientes2();" data-toggle="modal" data-target="#modal-defaultCargas2"><i class="fa fa-circle-o"></i> Buscar en línea</a></li>
			  </ul>
			</li>
        <li class="header">TELEFONÍA FIJA</li>
           <li>
              <a href="5_ESPECIFICAS/documentos/TELEFONÍA FIJA_RETENCIÓN_REACTIVA.pdf" target="_blank">
				<i class="fa fa-phone"></i> <span>Retención reactiva TF</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			
		<li class="header">INTERNET</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-wifi"></i> <span>Reactiva Internet</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="5_ESPECIFICAS/internet/ESCENARIOS TECNICOS CAMPAÑAS ESPECIFICAS1.pdf" target="_blank"><i class="fa fa-circle-o"></i> Escenarios Técnicos</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-rete2"><i class="fa fa-circle-o"></i> Estado de Corte</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-rete3"><i class="fa fa-circle-o"></i> Permanencia 360</a></li>
				<li><a href="5_ESPECIFICAS/internet/PROCESO DE RETENCIÓN INTERNET FIJO.pdf" target="_blank"><i class="fa fa-circle-o"></i> Proceso de Retención</a></li>
				<li><a href="5_ESPECIFICAS/internet/Tipificación Reactiva Internet .pdf" target="_blank"><i class="fa fa-circle-o"></i> Tipificaciones</a></li>
				<li><a href="5_ESPECIFICAS/internet/NEMONICOS REACTIVAI NTERNET.pdf" target="_blank"><i class="fa fa-circle-o"></i> Nemónicos</a></li>
			  </ul>
			</li>
			
        <li class="header">CALIDAD</li>
            
            <li class="treeview">
    			  <a href="#">
    				<i class="fa fa-cloud-download"></i> <span>Mallas de Beneficios</span>
    				<span class="pull-right-container">
    				    <i class="fa fa-angle-left pull-right"></i>
    				</span>
    			  </a>
    			  <ul class="treeview-menu">
    			      <li><a href="5_ESPECIFICAS/documentos/MALLA UNIFICADA DE BENEFICIOS RETENCION OCTUBRE - CC.xlsx" ><i class="fa fa-circle-o"></i> Malla de Octubre</a></li>
    			      <li><a href="5_ESPECIFICAS/documentos/07 JULIO 2021 MALLA UNIFICADA DE BENEFICIOS RETENCION.xlsx" ><i class="fa fa-circle-o"></i> Malla de Julio</a></li>
    			      <li><a href="8_ESPECIFICAS_INT/documentos/06 JUNIO 2021 MALLA UNIFICADA DE BENEFICIOS RETENCION.xlsx" ><i class="fa fa-circle-o"></i> Malla de Junio</a></li>
    			      <li><a href="5_ESPECIFICAS/documentos/05_MAYO 2021 MALLA-BENEFICIOS-RETENCION-UNIFICADA.xlsx" ><i class="fa fa-circle-o"></i> Malla de Mayo</a></li>
    			      <li><a href="5_ESPECIFICAS/documentos/04 ABRIL 2021 MALLA UNIFICADA DE BENEFICIOS RETENCION.xlsx" ><i class="fa fa-circle-o"></i> Malla de Abril</a></li>
    			      <li><a href="5_ESPECIFICAS/documentos/03_MARZO 2021 MALLA-BENEFICIOS-RETENCION-UNIFICADA v2.xlsx" ><i class="fa fa-circle-o"></i> Malla de Marzo</a></li>
    			    <li><a href="5_ESPECIFICAS/documentos/FEBRERO 2021 MALLA-BENEFICIOS-RETENCION-UNIFICADA.xlsx" ><i class="fa fa-circle-o"></i> Malla de Febrero</a></li>

    			    <!--<li><a href="5_ESPECIFICAS/documentos/12_DICIEMBRE 2020 MALLA-BENEFICIOS-RETENCION-UNIFICADA.xlsx" ><i class="fa fa-circle-o"></i> Malla de Diciembre</a></li>
    			    <li><a href="5_ESPECIFICAS/documentos/NOVIEMBRE-2020-MALLA-BENEFICIOS-RETENCION-UNIFICADA.xlsx" ><i class="fa fa-circle-o"></i> Malla de Noviembre</a></li>
    			    <li><a href="5_ESPECIFICAS/documentos/09_SEPTIEMBRE 2020 MALLA-BENEFICIOS-RETENCION-UNIFICADA-N3.xlsx" ><i class="fa fa-circle-o"></i> Malla de Septiembre</a></li>
    			    <li><a href="5_ESPECIFICAS/documentos/MALLA-BENEFICIOS-RETENCION-AGOSTO-2020-UNIFICADA-N3-Final-004.xlsx" ><i class="fa fa-circle-o"></i> Malla de Agosto</a></li>-->
    			    
    		      </ul>
    		</li>
        
        
        	<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Manuales</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="5_ESPECIFICAS/documentos/PRESENTACION DE NEGOCIACION.pdf" target="_blank"><i class="fa fa-circle-o"></i> Presentación de Negociación</a></li>
			    <li><a href="5_ESPECIFICAS/documentos/MANUAL DE PROCEDIMIENTOS CAMPAÑA RETENCIÓN REACTIVA OUT 06_11_2019.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Procedimientos</a></li>
			    <!--<li><a href="5_ESPECIFICAS/documentos/MALLA-BENEFICIOS-RETENCION-AGOSTO-2020-UNIFICADA-N3-Final-004.xlsx" target="_blank"><i class="fa fa-circle-o"></i> Malla de Beneficios<small class="label pull-right bg-green">Nuevo</small></a></li>-->
			    <li><a href="5_ESPECIFICAS/documentos/Cesión de Derechos ANEXO 2.docx" target="_blank"><i class="fa fa-circle-o"></i> Cesión de Derechos</a></li>
			    <li><a href="5_ESPECIFICAS/documentos/GUIA DE NEMONICOS IMPULSA 2020.pdf" target="_blank"><i class="fa fa-circle-o"></i> Guía de Nemónicos</a></li>
			    <li><a href="5_ESPECIFICAS/documentos/TIPIFICACION HERRAMIENTA IC_DTH.pdf" target="_blank"><i class="fa fa-circle-o"></i> Tipificaciones</a></li>
			    <li><a href="5_ESPECIFICAS/documentos/ÚLTIMAS_DISPOSICIONES_PROCESO_RETENCIÓN.pdf" target="_blank"><i class="fa fa-circle-o"></i> Disposiciones Retención</a></li>
			    <li><a href="8_ESPECIFICAS_INT/documentos/ARGUMENTOS RETENCIÓN.xlsx" target="_blank"><i class="fa fa-circle-o"></i> Argumentos de Retención</a></li>
			    <!--<li><a href="8_ESPECIFICAS_INT/documentos/Cesión de Derechos ANEXO 2.docx" target="_blank"><i class="fa fa-circle-o"></i> Cesión de Derechos</a></li>-->
			    <li><a href="8_ESPECIFICAS_INT/documentos/ESCENARIOS TECNICOS CAMPAÑAS ESPECIFICAS1.pdf" target="_blank"><i class="fa fa-circle-o"></i> Escenarios Técnicos</a></li>
			    <li><a href="8_ESPECIFICAS_INT/documentos/Estados de corte.jpg" target="_blank"><i class="fa fa-circle-o"></i> Estados de Corte</a></li>
			    <li><a href="8_ESPECIFICAS_INT/documentos/MANUAL TRASLADO DIFERIDO A CORRIENTE FIJO.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual Estado Diferido</a></li>
			    <li><a href="8_ESPECIFICAS_INT/documentos/Permanencia del servicio 360 .jpg" target="_blank"><i class="fa fa-circle-o"></i> Permanencia 360</a></li>
			    <li><a href="8_ESPECIFICAS_INT/documentos/PLANES Y COSTOS .jpg" target="_blank"><i class="fa fa-circle-o"></i> Planes y Costos</a></li>
			    <li><a href="8_ESPECIFICAS_INT/documentos/RECATEGORIZACIÓN DE LÍNEAS EN INTERNET.pdf" target="_blank"><i class="fa fa-circle-o"></i> Recategorización de Linea</a></li>
			    <li><a href="8_ESPECIFICAS_INT/documentos/TIPIFICACIONES INTERNET.pdf" target="_blank"><i class="fa fa-circle-o"></i> Tipificaciones Internet</a></li>
			   </ul>
			</li>
        


		<?php } ?>
		
		<?php if($_SESSION['nivel'] == "2" || $_SESSION['nivel'] == "1"){?>		  
            <li class="header">SUPERVISIÓN</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargar</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_sup_escalado2nv();"><i class="fa fa-circle-o"></i> Casos N2</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_escaladovt();"><i class="fa fa-circle-o"></i> Casos VT</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_escaladocntplay();"><i class="fa fa-circle-o"></i> Casos CNT Play</a></li>
			  </ul>
			</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-exchange"></i> <span>Exportar</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<!--<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionVT();"><i class="fa fa-circle-o"></i> Gestión VT</a></li>-->
				<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionSA();"><i class="fa fa-circle-o"></i> Llamadas sin audio</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionGE();"><i class="fa fa-circle-o"></i> Gestión de asesores</a></li>
			
			  </ul>
			</li>
			  <li><a href="documentos/capsulas/DIRECTORIO ZONAS INTEGRALES.xlsx">
				<i class="fa fa-cog"></i> <span>Zonas Técnicas</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			<li class="header">MISCELANEOS</li>
            <li><a href="#" onclick="javascript:ctrl_menu_cumples();">
				<i class="fa fa-birthday-cake"></i> <span>Cumplea&ntilde;os</span>
				<span class="pull-right-container">
				</span>
			  </a>
			</li>

		<?php } ?>

		<?php if($_SESSION['nivel'] == "1"){?>
			<li class="header">ADMINISTRADOR</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-folder"></i> <span>Administrar cuentas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#" onclick="javascript:ctrl_menu_admin_au();"><i class="fa fa-circle-o"></i> Agregar Usuario</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_admin_mu();"><i class="fa fa-circle-o"></i> Modificar Usuario</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_admin_du();"><i class="fa fa-circle-o"></i> Eliminar Usuario</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_admin_cp();"><i class="fa fa-circle-o"></i> Cambiar contraseñas</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_admin_bu();"><i class="fa fa-circle-o"></i> Bloquear/Desbloquear Usuario</a></li>
			  </ul>
			</li>
			
			<li class="header">CARGAS</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-folder"></i> <span>Cargar Información</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-circle-o"></i> Cargar Archivo de Cobros</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i> Cargar nuevas cápsulas</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_admin_ci();"><i class="fa fa-circle-o"></i> Cargar fotos</a></li>
			  </ul>
			</li>
			

			

			
		<?php } ?>
		
		<?php if($_SESSION['nivel'] == "4" || $_SESSION['nivel'] == "1"){?>
		
		  <li class="header">ACTUALIZACIONES</li>
    		<li>
			  <a href="#" onclick="javascript:ctrl_menu_n4_actualizar();">
				<i class="fa fa-cloud-upload"></i> <span>Actualizar datos</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
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

        <div class="modal fade" id="modal-defaultCiclos">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ciclos de Facturación</h4>
              </div>
              <div class="modal-body">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="documentos/capsulas/ciclos_nuevos.PNG">
              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

   <div class="modal fade" id="modal-linksGuia">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Guías Comerciales 2020-2021</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><b>2021</b></li>
                        <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL OCTUBRE 2021 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Octubre 2021)
                               </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL JULIO 2021 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Julio 2021)
                               </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL JUNIO 2021 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Junio 2021)
                               </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL MAYO 2021 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Mayo 2021)
                               </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL ABRIL 2021 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Abril 2021)
                               </a>
                            </li>
                        </ul>
                         <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL MARZO 2021 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Marzo 2021)
                               </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL FEBRERO 2021 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Febrero 2021)
                               </a>
                            </li>
                        </ul>
                        
                        <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL ENERO 2021 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Enero 2021)
                               </a>
                            </li>
                        </ul>
                        
                        <li><b>2020</b></li>
                        
                        <ul>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL DICIEMBRE 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Diciembre 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL NOVIEMBRE 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Noviembre 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL OCTUBRE 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Octubre 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL SEPTIEMBRE 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Septiembre 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL AGOSTO 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Agosto 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL JULIO 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Julio 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL JUNIO 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Junio 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL MAYO 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Mayo 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL ABRIL 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Abril 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL MARZO 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Marzo 2020)
                               </a>
                            </li>
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL FEBRERO 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Febrero 2020)
                               </a>
                            </li>
                            
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL ENERO 2020 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Enero 2020)
                               </a>
                            </li>
                        </ul>
                         <!--
                        <li><b>2019</b></li>
                        <ul>
                             <li>
                               <a href="documentos/guias/GUÍA COMERCIAL DICIEMBRE 2019 (MASIVA).pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Diciembre 2019)
                               </a>
                            </li>
                            
                            <li>
                               <a href="documentos/guias/GUÍA COMERCIAL NOVIEMBRE 2019.pdf" target="_blank">
                                   <i class="text-aqua"></i> Guía Comercial (Noviembre 2019)
                               </a>
                            </li>
                        </ul>
                        -->
                     </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-defaultCargasR">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="carga">
                            
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="modal-INICIO">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">RECUERDA! <i class="fa fa-warning (alias)"></i></h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li>Recuerda indicarle al cliente al cliente que debe seleccionar la opción "Entrega de Equipos"</li>
                        <img src="5_ESPECIFICAS/documentos/indice.jpg" class="img-circle" alt="User Image">
                    </ul>
                    
                    <ul>
                       <li><b>Registrar en el siguiente link las deserciones que se hayan generado por el retiro de la señal de GOLTV que tiene los derechos de transmisión del CAMPEONATO NACIONAL: </b><a href="https://bit.ly/2PUBG36" target="_blank">Clic Aquí</a></li>
                       <ul>
                           <li>Se debe escoger el desborde al que perteneces.</li>
                           <li>Se debe ingresar la cedula del cliente.</li>
                       </ul>
                    </ul>
                    <ul>
                       <li><b>SCRIPT TIEMPO DE PERMANENCIA:</b> "(Nombre del clente) sigue disfrutando con quienes más amas de tu servicio xxxx (Telefonía, Internet, Televisión) <b>por xx meses más</b> (indicar tiempo de permanencia posterior); porque queremos que sigas formando parte de la familia CNT, tendrás el descuento de xxx por xxx meses en tus facturas. Gracias por elegirnos, <b>CNT conéctemonos más.</b></li>
                    </ul>
                    <ul>
                       <li><b>ACTUALIZACIONES:</b></li>
                       <ul>
                           <li> <b>TELEFONÍA FIJA:</b></li>
                           <ul>
                               <li> Compensación por falta de servicio: Oferta de retención para clientes que presenten intención de retiro por falta del mismo.</li>
                               <li> Descuentos económicos del 100% hasta 3 meses consecutivos y no consecutivos.</li>
                           </ul>
                           <li> <b>INTERNET FIJO:</b></li>
                           <ul>
                               <li> Descuentos económicos del 100% hasta 3 meses consecutivos y no consecutivos para cobre y GPON.</li>
                           </ul>
                           <li> <b>TELEVISIÓN:</b></li>
                           <ul>
                               <li> Descuentos económicos del 50% de 1 a 3 meses consecutivos / 1 a 6 meses no consecutivos al plan principal.</li>
                               <li> Descuentos económicos del 75% hasta por 2 meses en decodificadores adicionales.</li>
                               <li> Descuentos económicos del 100% hasta por 1 mes en decodificadores adicionales.</li>
                               <li> Descuentos económicos del 100% hasta 3 meses consecutivos y no consecutivos al plan principal.</li>
                           </ul>
                           <li> <b>SMA:</b></li>
                           <ul>
                               <li> Se debe ingresar la queja 180 para registrar el cambio de plan de pospago a prepago.</li>
                           </ul>
                       </ul>
                    </ul>

              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        <div class="modal fade" id="modal-carterizado">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Reportar Carterizado:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-9">
                 </div>
                 <div class="col-lg-6 col-xs-9">
                     
					<div id="car1" class="form-group">
						<label>*RUC:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="b-carterizado" onKeyPress="return soloNumeros(event)" maxlength="13" data-mask tabindex="1" >
						</div>
						<div id="car1-1"></div>
					</div>	
					
					<div id="car2" class="form-group">
						 <label>Observación:</label>
						 <textarea class="form-control" rows="3" id="obs-car" placeholder="..." style="resize: none; " data-mask tabindex="8" maxlength="245"></textarea>
					     <div id="car2-2"></div>
					</div>

            		<table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_carterizado" data-mask tabindex="15" onClick="gd_carterizado();" class="btn btn-info pull-center">Envíar</button>
                    		</td>
                		</tr>
                	</table> 

                 </div>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal --> 
        
        
        <div class="modal fade" id="modal-virtuales">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Reportar Virtuales:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-9">
                 </div>
                 <div class="col-lg-6 col-xs-9">
                     
					<div id="vir1" class="form-group">
						<label>*Nº Servicio:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="a-virtual" onKeyPress="return soloNumeros(event)" maxlength="10" data-mask tabindex="1" >
						</div>
						<div id="vir1-1"></div>
					</div>	
					
					<div id="vir2" class="form-group">
						<label>*Cédula:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-user"></i>
						  </div>
					  <input type="text" class="form-control" id="a-cedula" onKeyPress="return soloNumeros(event)" maxlength="10" data-mask tabindex="2" >
						</div>
						<div id="vir2-2"></div>
					</div>	
					
					<div id="vir3" class="form-group">
						<label>*Teléfono Contacto:</label>
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-phone"></i>
							  </div>
							  <input type="text" class="form-control" id="a-telefono" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="3" >
							</div>
						<div id="vir3-3"></div>
					</div>	
					
					<div id="vir4" class="form-group">
						 <label>Observación:</label>
						 <textarea class="form-control" rows="3" id="obs-vir" placeholder="..." style="resize: none; " data-mask tabindex="4" maxlength="245"></textarea>
					     <div id="vir4-4"></div>
					</div>

            		<table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_virtual" data-mask tabindex="15" onClick="gd_virtual();" class="btn btn-info pull-center">Envíar</button>
                    		</td>
                		</tr>
                	</table> 

                 </div>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal --> 
        
        
    <div class="modal fade" id="modal-cierres">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Caso cerrado en IC y OPEN:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-9">
                 </div>
                 <div class="col-lg-6 col-xs-9">
                     
					<div id="a1" class="form-group">
						<label>*Nº Servicio:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="a-serv" onKeyPress="return soloNumeros(event)" maxlength="10" data-mask tabindex="1" >
						</div>
						<div id="a1-1"></div>
					</div>	
					
					<div id="a2" class="form-group">
						<label>*Nº Queja:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-user"></i>
						  </div>
					  <input type="text" class="form-control" id="a-queja" onKeyPress="return soloNumeros(event)" maxlength="10" data-mask tabindex="2" >
						</div>
						<div id="a2-2"></div>
					</div>	
					
                	<div id="a3" class="form-group">
            			<label>*Estado Queja IC:</label>
            			<select id="a-ic"  class="form-control select2" style="width: 100%;" data-mask tabindex="4" onclick="cambio_sva();">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="RETENIDO">Retenido</option>
            				<option value="RETENIDO EN SEGUIMIENTO">Retenido en seguimiento</option>
            				<option value="RETIRO CONTACTADO">Retiro contactado</option>
            				<option value="RETIRO EN PROCESO">Retiro en proceso</option>
            				<option value="NO PROCEDE">No procede</option>
            				<option value="NO APLICA">No aplica</option>
            				<option value="NO CONTESTA DERIVADO A N1">No contesta derivado a N1</option>
            			</select>
            		    <div id="a3-3"></div>
            		</div>    
            		
                	<div id="a4" class="form-group">
            			<label>*Estado Queja OPEN:</label>
            			<select id="a-open"  class="form-control select2" style="width: 100%;" data-mask tabindex="4" onclick="cambio_sva();">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="ATENDIDO">Atendido</option>
            				<option value="ANULADO">Anulado</option>
            				<!-- /. <option value="PPV ECUADOR VS COLOMBIA">PPV Ecuador Vs Colombia</option> -->
            			</select>
            		    <div id="a4-4"></div>
            		</div>    
					
					<div id="a5" class="form-group">
						 <label>Observación:</label>
						 <textarea class="form-control" rows="2" id="obs-ic_open" placeholder="..." style="resize: none; " data-mask tabindex="4" maxlength="245"></textarea>
					     <div id="a5-5"></div>
					</div>

            		<table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_id_open" data-mask tabindex="15" onClick="gd_ic_open();" class="btn btn-info pull-center">Envíar</button>
                    		</td>
                		</tr>
                	</table> 

                 </div>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal --> 
        
      <div class="modal fade" id="modal-rete2">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Estados de Corte</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <img src="5_ESPECIFICAS/internet/Estados de corte.jpg"alt="User Image">
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
      <div class="modal fade" id="modal-rete3">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Permanencia servicios 360</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <img src="5_ESPECIFICAS/internet/Permanencia del servicio 360.jpg" alt="User Image">
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


 <!------------------------------ /.Errores en Deco ---------------------------->
        
        
        
        <div class="modal fade" id="modal-defaultError1">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Error A001</h4>
              </div>
              <div class="modal-body">
                  <p>Mensaje:<b> Error A001: Parece que usted está sin señal desconecte los cables.</b></p>
                    <ul>
                        <li>Validar los niveles de calidad y potencia mayor al 70% y 40% en el menú del decodificador.</li>
                        <li>Verificar de acuerdo al modelo de decodificador que el cable coaxial este bien conectado, de preferencia que el cliente desconecte y vuelva a conectar el cable coaxial.</li>
                        <li>Después de este proceso si lo niveles de calidad o potencia no suben ingresar VT.</li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
               <div class="modal fade" id="modal-agencias10agosto">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agencias CNT atendiendo hoy 10 de Agosto</h4>
              </div>
              <div class="modal-body">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="documentos/agencias/agencia feriado 10 agosto.png">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        <div class="modal fade" id="modal-defaultError2">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Error A005</h4>
              </div>
              <div class="modal-body">
                  <p>Mensaje:<b> Error A005: Este canal no es parte de su plan. Para contratación comuníquese con soporte.</b></p>
                    <ul>
                        <li>Verificar la grilla de programación, y constatar que los canales o el canal este dentro del plan contratado por el cliente, de igual manera los asesores deben de estar pendientes de los comunicados de ESCUELAS COMERCIALES porque se realizan cambios en la grilla de programación.</li>
                        <li>Después de las validaciones detalladas anteriormente realizar una configuración por defecto.</li>
                        <li>Si no se puede aún visualizar el canal escalar al N2.</li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        
        <div class="modal fade" id="modal-defaultError3">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Error A010</h4>
              </div>
              <div class="modal-body">
                  <p>Mensaje:<b> Error A010: Es necesario comprobar si la tarjeta esta insertada en el decodificador con el chip hacia abajo, si es así quitarlo y colocarlo de nuevo. Si esto no funciona conecta al www.cnt.gob.ec.</b></p>
                    <ul>
                        <li>Puede tratarse que el cliente retiro la tarjeta del decodificador, validar de acuerdo al modelo la colocación correcta de la tarjeta.</li>
                        <li>Si se verificó que la tarjeta está bien colocada, retirar la tarjeta nuevamente y solicitar al cliente que limpie el chip de la tarjeta con un borrador blanco o una tela de algodón, retire todas las impurezas y vuelva a solicitar al cliente que ingrese la tarjeta de manera correcta.</li>
                        <li>Si el mensaje persiste enviar un refresh, si aún tiene el mensaje de error realizar una configuración por defecto.</li>
                        <li>Si no cambia el mensaje de error escalar al N2.</li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        <div class="modal fade" id="modal-defaultError4">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Error A011</h4>
              </div>
              <div class="modal-body">
                  <p>Mensaje:<b> Error A011: asegúrese de que su tarjeta de memoria esta insertada correctamente, con el chip hacia abajo. Si usted todavía tiene problemas, póngase en contacto con nosotros www.cnt.gob.ec.</b></p>
                    <ul>
                        <li>Se retira la tarjeta y se limpia el chip, verificar la posición correcta que se debe de ingresar en el decodificador si esto no restablece la señal de manera inmediata se envía un refresh dependiendo del web Service (Rapidez o lentitud de comandos).</li>
                        <li>Si el asesor después de realizar este proceso no funciona tendría que realizar una configuración por defecto.</li>
                        <li>Si el problema persiste escalar a N2.</li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        <!-- /.ACTVACIONES SVA TEMPORAL -->
        
        <div class="modal fade" id="modal-SVA">
           <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Información activaciones SVA:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-6 col-xs-6">
                     
                     
                   <div id="sva2_1" class="form-group">
						<label>*Fecha de Activación:</label>
						<div class="input-group">
    					  <div class="input-group-addon">
    						<i class="fa fa-calendar"></i>
    					  </div>
						  <input type="text" class="form-control" id="datemask"  maxlength="10" value="<?php date_default_timezone_set("America/Guayaquil"); echo date("d/m/Y"); ?>" data-mask tabindex="1" >
					   </div>
					  <div id="sva2_3"></div>
					</div>

                	
                	<div id="sva4_1" class="form-group">
                		<label>*N° de servicio:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-file-text-o"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="sva4_2" data-mask tabindex="3" onKeyPress="return soloNumeros(event)" maxlength=10">
                			</div>
                		<div id="sva4_3"></div>
                	</div>
                	

                	<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
                    </div>
                	
                 </div>
                 

                 
                 <div class="col-lg-6 col-xs-6">

					
                    <div id="sva1_1" class="form-group">
                	   <label>*Usuario OPEN:</label>
                	   <div class="input-group">
                	     <div class="input-group-addon">
                			<i class="fa fa-user"></i>
                		 </div>
                		 <input type="text" class="form-control"  id="sva1_2" data-mask tabindex="2" onKeyPress="return sololetras(event)" maxlength="15"  value="">
                		</div>
                		<div id="sva1_3"></div>
                	</div>
            		

                	<div id="sva3_1" class="form-group">
            			<label>*Paquete activado:</label>
            			<select id="sva3_2"  class="form-control select2" style="width: 100%;" data-mask tabindex="4" onclick="cambio_sva();">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="HBO Premium">HBO Premium</option>
            				<option value="FOX Premium">FOX Premium</option>
            				<option value="TOTAL PLUS">Total Plus</option>
            				<option value="PLAY BOY DIARIO">Play Boy Diario</option>
            				<option value="PLAY BOY MENSUAL">Play Boy Mensual</option>
            				<option value="HOT PACK">HOT PACK</option>
            				<option value="ECDF">El Canal del Fútbol</option>
            				<option value="PPV ECUADOR VS COLOMBIA">PPV Ecuador Vs Colombia</option>
            			</select>
            		    <div id="sva3_3"></div>
            		</div>            		
 
						<div id="idz1" class="form-group" style="display: none">
							<label>*Teléfono contacto:</label>
								<div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-phone"></i>
								  </div>
									  <input type="text" class="form-control" id="telf1" onBlur="pro_telf1();" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="5" >
								</div>
							<div id="idz1-1"></div>
						</div>

                	
                </div>


                    <table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_sva" data-mask tabindex="5" onClick="send_sva();" class="btn btn-info pull-center">Guardar</button>
                    		</td>
                		</tr>
                	</table>  
              </div>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        
        <!-- /.ACTVACIONES SVA TEMPORAL -->
        <!-- /.bitacora -->
        
        <div class="modal fade" id="modal-bit-cas">
           <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Bitácoras de casos sin alcance:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-6 col-xs-6">
                     

                	<div id="cas1_1" class="form-group">
                		<label>*N° de servicio:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-file-text-o"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="cas1" data-mask tabindex="1" onKeyPress="return soloNumeros(event)" maxlength=10">
                			</div>
                		<div id="cas1_2"></div>
                	</div>
                	
            	<div id="cas2_1" class="form-group">
            			<label>*Línea de Negocio:</label>
            			<select id="cas2"  class="form-control select2" style="width: 100%;" data-mask tabindex="2" onclick="cambio_sva();">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="DTH">DTH</option>
            				<option value="TF">Telefonia fija</option>
            				<option value="SMA">Teléfonia Móvil</option>
            				<option value="IF">Internet Fijo</option>
            			</select>
            		    <div id="cas2_2"></div>
            		</div>  

                	<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
                    </div>
                	
                 </div>
                 

                 
                 <div class="col-lg-6 col-xs-6">


                	<div id="cas3_1" class="form-group">
            			<label>*Motivo de llamada:</label>
            			<select id="cas3"  class="form-control select2" style="width: 100%;" data-mask tabindex="3" onclick="cambio_sva();">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="CLIENTE REQUIERE SOPORTE DTH">Cliente requiere soporte DTH</option>
            				<option value="CLIENTE REQUIERE SOPORTE TF">Cliente requiere soporte TF</option>
            				<option value="CLIENTE REQUIERE SOPORTE SMA">Cliente requiere soporte SMA</option>
            				<option value="CLIENTE REQUIERE SOPORTE IF">Cliente requiere soporte IF</option>
            				<option value="CLIENTE DESEA ADQUIRIR PRODUCTO">Cliente requiere atención de Ventas</option>
            			</select>
            		    <div id="cas3_2"></div>
            		</div>            		
 
					<div id="cas4_1" class="form-group">
						 <label>Observación:</label>
						 <textarea class="form-control" rows="1" style="resize: none;" id="cas4" placeholder="..." data-mask tabindex="4" maxlength="245"></textarea>
					     <div id="cas4_2"></div>
					</div>

                	
                </div>


                    <table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_cas11" data-mask tabindex="5" onClick="send_cas11();" class="btn btn-info pull-center">Guardar</button>
                    		</td>
                		</tr>
                	</table>  
              </div>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        
        <div class="modal fade" id="modal-defaultError5">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Error A012</h4>
              </div>
              <div class="modal-body">
                  <p>Mensaje:<b> Error A012: Algo esta mal con su equipo. Si esto no funciona. Comuníquese con soporte técnico de cnt. www.cnt.gob.ec.</b></p>
                    <ul>
                        <li>Verificar si el equipo se enciende manualmente o con el control remoto, a veces la toma de la energía eléctrica no tiene la suficiente energía para que arranque el decodificador, solicitar al cliente que cambie de toma corriente.</li>
                        <li>Si aún sigue con el mensaje después del proceso realizado puede tratarse de algún daño en el decodificador, proceder a ingresar VT.</li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        
       <div class="modal fade" id="modal-defaultError6">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Error A014</h4>
              </div>
              <div class="modal-body">
                  <p>Mensaje:<b> Error A014: Su tarjeta ha caducado. Póngase en contacto con nosotros, www.cnt.gob.ec.</b></p>
                    <ul>
                        <li>Se retira la tarjeta y se limpia el chip, si esto no restablece la señal de manera inmediata se envía un refresh dependiendo del web Service (Rapidez o lentitud de comandos).</li>
                        <li>Si el asesor después de realizar este proceso no funciona tendría que realizar una configuración por defecto.</li>
                        <li>Si el problema persiste escalar a N2.</li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        
        <div class="modal fade" id="modal-defaultError7">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Decodificador bloqueado por 15 días</h4>
              </div>
              <div class="modal-body">
                  <p>Mensaje:<b> Error A014: Su tarjeta ha caducado. Póngase en contacto con nosotros, www.cnt.gob.ec.</b></p>
                    <ul>
                        <li>Validar el número de decodificador y enviar refresh.</li>
                        <li>Si no funciona realizar una configuración por defecto.</li>
                        <li>Escalar al N2.</li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        <div class="modal fade" id="modal-defaultError8">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Canal Codificado</h4>
              </div>
              <div class="modal-body">
                  <p>Mensaje:<b> Error: Canal Codificado.</b></p>
                    <ul>
                        <li>Apagar decodificador con el botón de apagado del control remoto. Esperar 15 segundos y volver a encenderlo.</li>
                        <li>Si no funciona, realizar una configuración por defecto.</li>
                        <li>Escalar a N2.</li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        
        <!-- /.imagenes de decodificadores -->
        
        
        <div class="modal fade" id="modal-decodificadores">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Configuración de Decodificadores</h4>
              </div>
              <div class="modal-body">

                  <p><h4><b> Jiuzhou DTS5422:</b></h4></p>
                  <a href="#" data-toggle="modal" data-target="#modal-dts5422" data-dismiss="modal"><img id="dts5422_ade" src="documentos/decodificadores/img_decos/jiuzhou_dts5422.png" ><img id="dts5422_pos" src="documentos/decodificadores/img_decos/jiuzhou_dts5422_pos.png" style="display:none" ></a><a href="#" onclick="javascript:dts5422_control1();"><i id="ico_dts5422_pos" class="fa fa-share" title="Ver posterior"></i></a>  <a href="#" onclick="javascript:dts5422_control2();"><i id="ico_dts5422_fron" class="fa fa-reply" title="Ver frontal" style="display:none"></i></a>
                  <ul>
                    <p></p>
                    <li><b> Tarjeta Inteligente: </b> Panel frontal - a la derecha (Chip hacia abajo y hacia adentro).</li>
                  </ul>
                  <hr>
                  <p><h4><b> Jiuzhou DTS6929:</b></h4></p>
                  <a href="#" data-toggle="modal" data-target="#modal-dts6929" data-dismiss="modal"><img id="dts6929_ade" src="documentos/decodificadores/img_decos/jiuzhou_dts6929.png"><img id="dts6929_pos" src="documentos/decodificadores/img_decos/jiuzhou_dts6929_pos.png" style="display:none"></a><a href="#" onclick="javascript:dts6929_control1();"><i id="ico_dts6929_pos" class="fa fa-share" title="Ver posterior"></i></a>  <a href="#" onclick="javascript:dts6929_control2();"><i id="ico_dts6929_fron" class="fa fa-reply" title="Ver frontal" style="display:none"></i></a>
                  <ul>
                    <p></p>
                    <li><b> Tarjeta Inteligente: </b> Panel trasero - a la derecha (Chip hacia abajo y hacia adentro).</li>
                  </ul>
                  <hr>
                  <p><h4><b> Zapper:</b></h4></p>
                  <a href="#" data-toggle="modal" data-target="#modal-zapper" data-dismiss="modal"><img id="zapper_ade" src="documentos/decodificadores/img_decos/zapper.png"><img id="zapper_pos" src="documentos/decodificadores/img_decos/zapper_pos.png" style="display:none"></a><a href="#" onclick="javascript:zapper_control1();"><i id="ico_zapper_pos" class="fa fa-share" title="Ver posterior"></i></a>  <a href="#" onclick="javascript:zapper_control2();"><i id="ico_zapper_fron" class="fa fa-reply" title="Ver frontal" style="display:none"></i></a>
                  <ul>
                    <p></p>
                    <li><b> Tarjeta Inteligente: </b>  Panel lateral derecho (Chip hacia arriba y hacia adentro).</li>
                  </ul>
                  <hr>
                  <p><h4><b> Echostar: </b></h4></p>
                  <a href="#" data-toggle="modal" data-target="#modal-Echostar" data-dismiss="modal"><img id="echostar_ade" src="documentos/decodificadores/img_decos/echostar.png"><img id="echostar_pos" src="documentos/decodificadores/img_decos/echostar_pos.png" style="display:none"></a><a href="#" onclick="javascript:echostar_control1();"><i id="ico_eco_pos" class="fa fa-share" title="Ver posterior"></i></a>  <a href="#" onclick="javascript:echostar_control2();"><i id="ico_eco_fron" class="fa fa-reply" title="Ver frontal" style="display:none"></i></a>
                  <ul>
                    <p></p>
                    <li><b> Tarjeta Inteligente: </b> Panel frontal - a la derecha (Chip hacia abajo y hacia adentro).</li>
                  </ul>
                  <hr>
                  <p><h4><b> Sagemcom:</b></h4></p>
                  <a href="#" data-toggle="modal" data-target="#modal-sagecom" data-dismiss="modal"><img id="sagecom_ade" src="documentos/decodificadores/img_decos/sagemcom.png"><img id="sagecom_pos" src="documentos/decodificadores/img_decos/sagemcom_pos.png" style="display:none"></a><a href="#" onclick="javascript:sagecom_control1();"><i id="ico_sage_pos" class="fa fa-share" title="Ver posterior"></i></a>  <a href="#" onclick="javascript:sagecom_control2();"><i id="ico_sage_fron" class="fa fa-reply" title="Ver frontal" style="display:none"></i></a>
                  <ul>
                    <p></p>
                    <li><b> Tarjeta Inteligente: </b> Panel lateral izquierdo (Chip hacia arriba y hacia adentro).</li>
                  </ul>
                  <hr>
                  <p><h4><b> Newland:</b></h4></p>
                  <a href="#" data-toggle="modal" data-target="#modal-newland" data-dismiss="modal"><img id="newland_ade" src="documentos/decodificadores/img_decos/newland.png"><img id="newland_pos" src="documentos/decodificadores/img_decos/newland_pos.png" style="display:none"></a><a href="#" onclick="javascript:newland_control1();"><i id="ico_newland_pos" class="fa fa-share" title="Ver posterior"></i></a>  <a href="#" onclick="javascript:newland_control2();"><i id="ico_newland_fron" class="fa fa-reply" title="Ver frontal" style="display:none"></i></a>
                  <ul>
                    <p></p>
                    <li><b> Tarjeta Inteligente: </b> Panel frontal - arriba a la derecha (Chip hacia abajo y hacia adentro).</li>
                  </ul>
                  <hr>
                  <!--
                  <p><h4><b> Jiuzhou EQUIPO NUEVO:</b></h4></p>
                  <a href="#" data-toggle="modal" data-target="#modal-newland" data-dismiss="modal"><img id="newland_ade" src="documentos/decodificadores/img_decos/jiuzhou_nuevo.png"><img id="newland_pos" src="documentos/decodificadores/img_decos/newland_pos.png" style="display:none"></a><a href="#" onclick="javascript:newland_control1();"><i id="ico_newland_pos" class="fa fa-share" title="Ver posterior"></i></a>  <a href="#" onclick="javascript:newland_control2();"><i id="ico_newland_fron" class="fa fa-reply" title="Ver frontal" style="display:none"></i></a>
                  <ul>
                    <p></p>
                    <li><b> Tarjeta Inteligente: </b> Por confirmar con CNT.</li>
                  </ul>
                  -->
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
<div class="modal fade" id="modal-Echostar">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Configuraciones Decodificador Echostar</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:echostar();">Configuración por defecto.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:echostar1();">Cambiar Audio SAP y Subtítulos.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:echostar2();">Configurar lista Canales Favoritos.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:echostar3();">Bloqueo/Desbloqueo de Canales.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:echostar4();">Bloqueo/Desbloqueo Control Parental.</a></li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
      <div class="modal fade" id="modal-dts5422">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Configuraciones Decodificador Jiuzhou DTS5422</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts5422();">Configuración por defecto.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts5422_1();">Cambiar Audio SAP y Subtítulos.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts5422_2();">Configurar lista Canales Favoritos.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts5422_3();">Bloqueo/Desbloqueo de Canales.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts5422_4();">Bloqueo/Desbloqueo Control Parental.</a></li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
      <div class="modal fade" id="modal-sagecom">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Configuraciones Decodificador SAGEM HD</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:sagecom();">Configuración por defecto.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:sagecom_1();">Cambiar Audio SAP y Subtítulos.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:sagecom_2();">Configurar lista Canales Favoritos.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:sagecom_3();">Bloqueo/Desbloqueo de Canales.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:sagecom_4();">Bloqueo/Desbloqueo Control Parental.</a></li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
         <div class="modal fade" id="modal-defaultCargas2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="cargaMot">
                            
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>

            </div>

        </div>
        
        
        
      <div class="modal fade" id="modal-dts6929">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Configuraciones Decodificador Jiuzhou DTS6929</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts6929();">Configuración por defecto.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts6929_1();">Cambiar Audio SAP.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts6929_2();">Cambiar Subtítulos.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts6929_3();">Configurar lista Canales Favoritos.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts6929_4();">Bloqueo de Canales.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts6929_5();">Control Parental.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:dts6929_6();">Grabación y Recordatorio.</a></li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        


        <div class="modal fade" id="modal-zapper">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Configuraciones Decodificador Zapper</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:zapper();">Configuración por defecto.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:zapper_1();">Bloqueo/Desbloqueo de Canales.</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:zapper_2();">Cambiar Idioma.</a></li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
        
        
        <div class="modal fade" id="modal-newland">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Configuraciones Decodificador Newland</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:newland();">Configuración por defecto.(EN CONTRUCCION)</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:newland_1();">Grabar programación. (EN CONTRUCCION)</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:newland_2();">Canales favoritos. (EN CONTRUCCION)</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:newland_3();">Recordatorio de programación. (EN CONTRUCCION)</a></li>
                        <li><a data-dismiss="modal" href="#" onclick="javascript:newland_4();">Bloqueo de canales y control parental. (EN CONTRUCCION)</a></li>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versión</b> 2.1.0
    </div>
    <strong>Impulsa SC &copy; 2019-2020 <a href="#">www.impulsasc.com</a></strong>
    
  </footer>



  
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
            <a href="http://entrenamiento.impulsasc.com/index.php" target="_blank"">
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
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>

<script src="assets/dist/js/adminlte.min.js"></script>



 <script>
  $("#content1").load('5_ESPECIFICAS/imagen_inicio.html');

function echostar_control1(){
    document.getElementById('ico_eco_pos').style.display = 'none';
	document.getElementById('ico_eco_fron').style.display = '';
    document.getElementById('echostar_ade').style.display = 'none';
	document.getElementById('echostar_pos').style.display = '';
  }
  
  function echostar_control2(){
    document.getElementById('ico_eco_pos').style.display = '';
	document.getElementById('ico_eco_fron').style.display = 'none';
    document.getElementById('echostar_ade').style.display = '';
	document.getElementById('echostar_pos').style.display = 'none';
  }
  
  function echostar(){
	window.open("menu/configuraciones/Demo/Echostar.html", '_blank');
    window.focus();
  }
  
  function echostar1(){
	window.open("menu/configuraciones/Demo/Echostar1.html", '_blank');
    window.focus();
  }
  
  function echostar2(){
	window.open("menu/configuraciones/Demo/Echostar2.html", '_blank');
    window.focus();
  }
  
  function echostar3(){
	window.open("menu/configuraciones/Demo/Echostar3.html", '_blank');
    window.focus();
  }
  
  function echostar4(){
	window.open("menu/configuraciones/Demo/Echostar4.html", '_blank');
    window.focus();
  }
  
  function dts5422_control1(){
    document.getElementById('ico_dts5422_pos').style.display = 'none';
	document.getElementById('ico_dts5422_fron').style.display = '';
    document.getElementById('dts5422_ade').style.display = 'none';
	document.getElementById('dts5422_pos').style.display = '';
  }
  
  function dts5422_control2(){
    document.getElementById('ico_dts5422_pos').style.display = '';
	document.getElementById('ico_dts5422_fron').style.display = 'none';
    document.getElementById('dts5422_ade').style.display = '';
	document.getElementById('dts5422_pos').style.display = 'none';
  }
  
  function dts5422(){
	window.open("menu/configuraciones/Demo/dts5422.html", '_blank');
    window.focus();
  }
  
  function dts5422_1(){
	window.open("menu/configuraciones/Demo/dts5422_1.html", '_blank');
    window.focus();
  }
  
  function dts5422_2(){
	window.open("menu/configuraciones/Demo/dts5422_2.html", '_blank');
    window.focus();
  }
  
  function dts5422_3(){
	window.open("menu/configuraciones/Demo/dts5422_3.html", '_blank');
    window.focus();
  }
  
  function dts5422_4(){
	window.open("menu/configuraciones/Demo/dts5422_4.html", '_blank');
    window.focus();
  } 
  
  
  function sagecom_control1(){
    document.getElementById('ico_sage_pos').style.display = 'none';
	document.getElementById('ico_sage_fron').style.display = '';
    document.getElementById('sagecom_ade').style.display = 'none';
	document.getElementById('sagecom_pos').style.display = '';
  }
  
  function sagecom_control2(){
    document.getElementById('ico_sage_pos').style.display = '';
	document.getElementById('ico_sage_fron').style.display = 'none';
    document.getElementById('sagecom_ade').style.display = '';
	document.getElementById('sagecom_pos').style.display = 'none';
  }
  
  function sagecom(){
	window.open("menu/configuraciones/Demo/sagecom.html", '_blank');
    window.focus();
  }
  
  function sagecom_1(){
	window.open("menu/configuraciones/Demo/sagecom_1.html", '_blank');
    window.focus();
  }
  
  function sagecom_2(){
	window.open("menu/configuraciones/Demo/sagecom_2.html", '_blank');
    window.focus();
  }
  
  function sagecom_3(){
	window.open("menu/configuraciones/Demo/sagecom_3.html", '_blank');
    window.focus();
  }
  
  function sagecom_4(){
	window.open("menu/configuraciones/Demo/sagecom_4.html", '_blank');
    window.focus();
  } 
  
  
  
  
  function dts6929_control1(){
    document.getElementById('ico_dts6929_pos').style.display = 'none';
	document.getElementById('ico_dts6929_fron').style.display = '';
    document.getElementById('dts6929_ade').style.display = 'none';
	document.getElementById('dts6929_pos').style.display = '';
  }
  
  function dts6929_control2(){
    document.getElementById('ico_dts6929_pos').style.display = '';
	document.getElementById('ico_dts6929_fron').style.display = 'none';
    document.getElementById('dts6929_ade').style.display = '';
	document.getElementById('dts6929_pos').style.display = 'none';
  }
  
  function dts6929(){
	window.open("menu/configuraciones/Demo/dts6929.html", '_blank');
    window.focus();
  }
  
  function dts6929_1(){
	window.open("menu/configuraciones/Demo/dts6929_1.html", '_blank');
    window.focus();
  }
  
  function dts6929_2(){
	window.open("menu/configuraciones/Demo/dts6929_2.html", '_blank');
    window.focus();
  }
  
  function dts6929_3(){
	window.open("menu/configuraciones/Demo/dts6929_3.html", '_blank');
    window.focus();
  }
  
  function dts6929_4(){
	window.open("menu/configuraciones/Demo/dts6929_4.html", '_blank');
    window.focus();
  } 

  function dts6929_5(){
	window.open("menu/configuraciones/Demo/dts6929_5.html", '_blank');
    window.focus();
  }
  
  function dts6929_6(){
	window.open("menu/configuraciones/Demo/dts6929_6.html", '_blank');
    window.focus();
  }
  
  function dts6929_7(){
	window.open("menu/configuraciones/Demo/dts6929_7.html", '_blank');
    window.focus();
  } 
  
  

  function zapper_control1(){
    document.getElementById('ico_zapper_pos').style.display = 'none';
	document.getElementById('ico_zapper_fron').style.display = '';
    document.getElementById('zapper_ade').style.display = 'none';
	document.getElementById('zapper_pos').style.display = '';
  }
  
  function zapper_control2(){
    document.getElementById('ico_zapper_pos').style.display = '';
	document.getElementById('ico_zapper_fron').style.display = 'none';
    document.getElementById('zapper_ade').style.display = '';
	document.getElementById('zapper_pos').style.display = 'none';
  }
  
  function zapper(){
	window.open("menu/configuraciones/Demo/zapper.html", '_blank');
    window.focus();
  }
  
  function zapper_1(){
	window.open("menu/configuraciones/Demo/zapper_1.html", '_blank');
    window.focus();
  }
  
  function zapper_2(){
	window.open("menu/configuraciones/Demo/zapper_2.html", '_blank');
    window.focus();
  }
  
  
  function newland_control1(){
    document.getElementById('ico_newland_pos').style.display = 'none';
	document.getElementById('ico_newland_fron').style.display = '';
    document.getElementById('newland_ade').style.display = 'none';
	document.getElementById('newland_pos').style.display = '';
  }
  
  function newland_control2(){
    document.getElementById('ico_newland_pos').style.display = '';
	document.getElementById('ico_newland_fron').style.display = 'none';
    document.getElementById('newland_ade').style.display = '';
	document.getElementById('newland_pos').style.display = 'none';
  }
  
  function newland(){
	window.open("menu/configuraciones/Demo/Newland.html", '_blank');
    window.focus();
  }
  
  function newland_1(){
	window.open("menu/configuraciones/Demo/newland_1.html", '_blank');
    window.focus();
  }
  
  function newland_2(){
	window.open("menu/configuraciones/Demo/newland_2.html", '_blank');
    window.focus();
  }
  
  function pro_pendientesR(){
	$("#carga").load('5_ESPECIFICAS/php/val_omni_pendientes.php'); 
  }
  
  function newland_3(){
	window.open("menu/configuraciones/Demo/newland_3.html", '_blank');
    window.focus();
  }
  
  function newland_4(){
	window.open("menu/configuraciones/Demo/newland_4.html", '_blank');
    window.focus();
  } 
   pro_charge3();
   function pro_pendientes1(){
        pro_charge3();
    	$("#content1").load('5_ESPECIFICAS/pendientes/mis_pendientes.php');
    }
    
    //temporal activaciones sva
	
	$(function () {
    	//Datemask dd/mm/yyyy
       $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    	//Datemask2 mm/dd/yyyy
       $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
       //Money Euro
    	$('[data-mask]').inputmask()
  	})
	
    $(function () {
		  //Datemask dd/mm/yyyy
		$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/aaaa' })
    })
         
    function cambio_sva(){
        if(document.getElementById("sva3_2").value == "PPV ECUADOR VS COLOMBIA"){
           document.getElementById("idz1").style.display = "";
        }else{
           document.getElementById("idz1").style.display = "none";
        }
    } 
    
    function send_sva(){
  
        
       if(document.getElementById("sva1_2").value == ""){
           document.getElementById("sva1_1").className = "form-group has-error";
		   $('#sva1_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           sva1 = 1;
       }else{
           document.getElementById("sva1_1").className = "form-group has-feedback";
		   $('#sva1_3').hide().html('').fadeIn(500);
		   sva1 = 0;
       }
       
       
       if(document.getElementById("datemask").value == ""){
           document.getElementById("sva2_1").className = "form-group has-error";
		   $('#sva2_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           sva2 = 1;
       }else if(!/^[0-9\/]+$/.test(document.getElementById("datemask").value)){
		   document.getElementById("sva2_1").className = "form-group has-error";
		   $('#sva2_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Fecha incompleta/Incorrecta</span>').fadeIn(500);
           sva2 = 1;
       }else{
           document.getElementById("sva2_1").className = "form-group has-feedback";
		   $('#sva2_3').hide().html('').fadeIn(500);
		   sva2 = 0;
       }
       
       
       if(document.getElementById("sva3_2").value == ""){
           document.getElementById("sva3_1").className = "form-group has-error";
		   $('#sva3_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione un paquete</span>').fadeIn(500);
           sva3 = 1;
       }else{
           document.getElementById("sva3_1").className = "form-group has-feedback";
		   $('#sva3_3').hide().html('').fadeIn(500);
		   sva3 = 0;
		   sva5 = 0;
       }
       

       if(document.getElementById("sva3_2").value == "PPV ECUADOR VS COLOMBIA"){
           var camp5 = document.getElementById("telf1").value;
           var val1 = 0;
           for (var i = 0; i < 14; i++) {
                if (camp5.charAt(i) == "_"){
                   val1 = 1;
                }
           }
    	   if(camp5 === ""){
    	      document.getElementById("idz1").className = "form-group has-error";
    	      $('#idz1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	      sva5 = 1;
    	   }else if(val1 == "1"){
    	      document.getElementById("idz1").className = "form-group has-error";
    	      $('#idz1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Teléfono incompleto</span>').fadeIn(500);
    		  sva5 = 1;
    		}else{
    		   document.getElementById("idz1").className = "form-group has-feedback";
    		   $('#idz1-1').hide().html('').fadeIn(500);
    		   sva5 = 0;
    		}
       }  
       
       if(document.getElementById("sva4_2").value == ""){
           document.getElementById("sva4_1").className = "form-group has-error";
		   $('#sva4_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           sva4 = 1;
       }else{
           document.getElementById("sva4_1").className = "form-group has-feedback";
		   $('#sva4_3').hide().html('').fadeIn(500);
		   sva4 = 0;
       }
       
       
       if (sva1 == 0 && sva2 == 0 && sva3 == 0 && sva4 == 0 && sva5 == 0){
            //invierto fecha
                var dia = parseInt(document.getElementById("datemask").value.slice(0,2));
                var mes = parseInt(document.getElementById("datemask").value.slice(3,5));
                var anio = parseInt(document.getElementById("datemask").value.slice(-4));
                    
                var amd = anio + '-' + mes + '-' + dia;
           
           var dataString = 'a1=' + document.getElementById("sva1_2").value + '&a2=' + amd + '&a3=' + document.getElementById("sva3_2").value + '&a4=' + document.getElementById("sva4_2").value + '&a5=' + document.getElementById("telf1").value;
           if (confirm("\xbfContinuar y guardar?")){
               $.ajax({
    			 type: 'POST',
    			 url: 'php/asesores/act_sva/act_sva.php', 
    			 data:  dataString, 
    			 success: function(x){
        			 if(x==1){
                        document.getElementById("sva3_2").value = "";
                        document.getElementById("sva4_2").value = "";
                        document.getElementById("telf1").value = "";
                        document.getElementById("idz1").style.display = "none";
                        alert("Activación Guardada");
                        $('#modal-SVA').modal('hide');
       				 }else if (x==7){
       				    $('#modal-SVA').modal('hide');
       				    alert("Sesion caducada. Inicie sesion nuevamente.");
       				    self.location = "seleccion.php";
       				 }
             	 }
    		 });
           }
       }
       
    }
    
    function send_cas11(){
  
       if(document.getElementById("cas1").value == ""){
           document.getElementById("cas1_1").className = "form-group has-error";
		   $('#cas1_2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           casi1 = 1;
       }else{
           document.getElementById("cas1_1").className = "form-group has-feedback";
		   $('#cas1_2').hide().html('').fadeIn(500);
		   casi1 = 0;
       }
       
       
       if(document.getElementById("cas2").value == ""){
           document.getElementById("cas2_1").className = "form-group has-error";
		   $('#cas2_2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione línea</span>').fadeIn(500);
           casi2 = 1;
       }else{
           document.getElementById("cas2_1").className = "form-group has-feedback";
		   $('#cas2_2').hide().html('').fadeIn(500);
           casi2 = 0;
       }
       
       
       if(document.getElementById("cas3").value == ""){
           document.getElementById("cas3_1").className = "form-group has-error";
		   $('#cas3_2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione un motivo</span>').fadeIn(500);
           casi3 = 1;
       }else{
           document.getElementById("cas3_1").className = "form-group has-feedback";
		   $('#cas3_2').hide().html('').fadeIn(500);
           casi3 = 0;
       }
       

       if (casi1 == 0 && casi2 == 0 && casi3 == 0){

           var dataString = 'a1=' + document.getElementById("cas1").value + '&a2=' + document.getElementById("cas2").value + '&a3=' + document.getElementById("cas3").value + '&a4=' + document.getElementById("cas4").value;
           if (confirm("\xbfContinuar y guardar?")){
               $.ajax({
    			 type: 'POST',
    			 url: '8_ESPECIFICAS_INT/php/act_sva.php', 
    			 data:  dataString, 
    			 success: function(x){
        			 if(x==1){
                        document.getElementById("cas1").value = "";
                        document.getElementById("cas2").value = "";
                        document.getElementById("cas3").value = "";
                        document.getElementById("cas4").value = "";
                        alert("Bitacora Guardada");
                        $('#modal-bit-cas').modal('hide');
       				 }else if (x==7){
       				    $('#modal-bit-cas').modal('hide');
       				    alert("Sesion caducada. Inicie sesion nuevamente.");
       				    self.location = "seleccion.php";
       				 }
             	 }
    		 });
           }
       }
       
    }
    
    pro_charge2();
     pro_charge3();
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
    
     function pro_agendados1(){
        pro_charge2();
        pro_charge3();
    	$("#content1").load('3_fidelizacion_HBO/php/verAgendados/mis_agendados.php');
    }
    

    
    //temporal actvaciones sva
    
    
       function pro_charge3(){
           dataString = '1';
        	$('#ppend').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
        	$.ajax({
        		type: 'POST',
        		url: '5_ESPECIFICAS/charge3.php', 
        		data:  dataString, 
        		success: function(x){
        		    document.getElementById('ppend').innerHTML = x;
        		}
        	});
        }
  
   function pro_pendientes2(){
	$("#cargaMot").load('php/asesores/des_motivos2.php'); 
  }
  pro_charge();
       function pro_charge(){
           dataString = '1';
        	$('#pomniR').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
        	$.ajax({
        		type: 'POST',
        		url: '5_ESPECIFICAS/charge.php', 
        		data:  dataString, 
        		success: function(x){
        		    document.getElementById('pomniR').innerHTML = x;
        		}
        	});
        }

  $('#loader').fadeOut(2300);  
  //$('#modal-INICIO').modal('show');
  
  	function soloNumeros(e){
		var key = window.Event ? e.which : e.keyCode
	    return ((key >= 48 && key <= 57) || (key==8)) 
    }
    
    function gd_carterizado(){
	var cart = document.getElementById("b-carterizado");
	var obs = document.getElementById("obs-car");
	var car1 = document.getElementById("car1");
	var cantidad = cart.value.length;

	cc=0;

    if (cart.value == ""){
            car1.className = "form-group has-error";
            $('#car1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique el RUC.</span>').fadeIn(500);
            cc = 1;
        }else if (cantidad != 13){
            car1.className = "form-group has-error";
            $('#car1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> RUC debe contener 13 dígitos.</span>').fadeIn(500);
            cc = 1;
        }else{ 
            car1.className = "form-group has-feedback";
    	    $('#car1-1').hide().html('').fadeIn(500);
            cc == 0
        }
        
           if(cc == 0){ 
               var dataString = 'a1=' + cart.value + '&a2=' + obs.value;
               if (confirm("\xbfContinuar y guardar?")){
            		$.ajax({
                		type: 'POST',
                		url: '5_ESPECIFICAS/php/carterizado.php', 
                		data:  dataString, 
                		success: function(x){
                		  if(x==1){
                    		alert("Enviado con Éxito");
                    		cart.value = "";
                		    obs.value = "";
                    		$('#modal-carterizado').modal('hide');
                          }else if(x==7){
                            alert("Inicie sesión nuevamente e intentelo de nuevo");
                          }
                		}
                		
                	});
                }
           } 
  }
  
  
  
  function gd_virtual(){
	var vir1 = document.getElementById("a-virtual");
	var vir2 = document.getElementById("a-cedula");
	var vir3 = document.getElementById("a-telefono");
	var vir4 = document.getElementById("obs-vir");
	
	var vir1_1 = document.getElementById("vir1");
	var vir2_2 = document.getElementById("vir2");
	var vir3_3 = document.getElementById("vir3");
	var vir4_4 = document.getElementById("vir4");
	

	    if (vir1.value == ""){
            vir1_1.className = "form-group has-error";
            $('#vir1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique el Virtual.</span>').fadeIn(500);
            cv = 1;
        }else{ 
            vir1_1.className = "form-group has-feedback";
    	    $('#vir1-1').hide().html('').fadeIn(500);
            cv = 0
        }
        
        if (vir2.value == ""){
            vir2_2.className = "form-group has-error";
            $('#vir2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique la Cédula.</span>').fadeIn(500);
            cx = 1;
        }else if (vir2.value.length != 10){
            vir2_2.className = "form-group has-error";
            $('#vir2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Cédula debe contener 10 dígitos.</span>').fadeIn(500);
            cx = 1;
        }else{ 
            vir2_2.className = "form-group has-feedback";
    	    $('#vir2-2').hide().html('').fadeIn(500);
            cx = 0
        }
        
        

        if (vir3.value == ""){
            vir3_3.className = "form-group has-error";
            $('#vir3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique Celular de Contacto.</span>').fadeIn(500);
            cz = 1;
        }else{ 
            vir3_3.className = "form-group has-feedback";
    	    $('#vir3-3').hide().html('').fadeIn(500);
            cz = 0
        }
	
           if(cv == 0  && cx == 0 && cz == 0){ 
               var dataString = 'a1=' + vir1.value + '&a2=' + vir2.value + '&a3=' + vir3.value + '&a4=' + vir4.value
               if (confirm("\xbfContinuar y guardar?")){
            		$.ajax({
                		type: 'POST',
                		url: '5_ESPECIFICAS/php/virtuales.php', 
                		data:  dataString, 
                		success: function(x){
                		  if(x==1){
                		    vir1.value = "";
                		    vir2.value = "";
                		    vir3.value = "";
                		    vir4.value = "";
                    		alert("Enviado con Éxito");
                    		$('#modal-virtuales').modal('hide');
                          }else if(x==7){
                            alert("Inicie sesión nuevamente e intentelo de nuevo");
                          }
                		}
                		
                	});
                }
           } 
  }
  
  
   function gd_ic_open(){
    	var vir1 = document.getElementById("a-serv");
    	var vir2 = document.getElementById("a-queja");
    	var vir3 = document.getElementById("a-ic");
    	var vir4 = document.getElementById("a-open");
    	var vir5 = document.getElementById("obs-ic_open");
    	
    	var vir1_1 = document.getElementById("a1");
    	var vir2_2 = document.getElementById("a2");
    	var vir3_3 = document.getElementById("a3");
    	var vir4_4 = document.getElementById("a4");
    	var vir5_5 = document.getElementById("a5");
    	

	    if (vir1.value == ""){
            vir1_1.className = "form-group has-error";
            $('#a1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique Nº Servicio.</span>').fadeIn(500);
            ic1 = 1;
        }else{ 
            vir1_1.className = "form-group has-feedback";
    	    $('#a1-1').hide().html('').fadeIn(500);
            ic1 = 0;
        }
        
        if (vir2.value == ""){
            vir2_2.className = "form-group has-error";
            $('#a2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique el Nº Queja.</span>').fadeIn(500);
            ic2 = 1;
        }else{ 
            vir2_2.className = "form-group has-feedback";
    	    $('#a2-2').hide().html('').fadeIn(500);
            ic2 = 0;
        }
        
        

        if (vir3.value == ""){
            vir3_3.className = "form-group has-error";
            $('#a3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique estado de queja IC</span>').fadeIn(500);
            ic3 = 1;
        }else{ 
            vir3_3.className = "form-group has-feedback";
    	    $('#a3-3').hide().html('').fadeIn(500);
            ic3 = 0;
        }
        
        
       if (vir4.value == ""){
            vir4_4.className = "form-group has-error";
            $('#a4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique estado de queja OPEN</span>').fadeIn(500);
            ic4 = 1;
        }else{ 
            vir4_4.className = "form-group has-feedback";
    	    $('#a4-4').hide().html('').fadeIn(500);
            ic4 = 0;
        }
	
           if(ic1 == 0  && ic2 == 0 && ic3 == 0 && ic4 == 0){ 
               var dataString = 'a1=' + vir1.value + '&a2=' + vir2.value + '&a3=' + vir3.value + '&a4=' + vir4.value + '&a5=' + vir5.value;
               if (confirm("\xbfContinuar y guardar?")){
            		$.ajax({
                		type: 'POST',
                		url: '8_ESPECIFICAS_INT/php/gestion_cierre.php', 
                		data:  dataString, 
                		success: function(x){
                		  if(x==1){
                		    vir1.value = "";
                		    vir2.value = "";
                		    vir3.value = "";
                		    vir4.value = "";
                		    vir5.value = "";
                    		alert("Enviado con Éxito");
                    		$('#modal-cierres').modal('hide');
                          }else if(x==7){
                            alert("Inicie sesión nuevamente e intentelo de nuevo");
                          }
                		}
                		
                	});
                }
           } 
  }
  
 </script>
 
<script>
src="https://code.jquery.com/jquery-2.2.4.min.js"
integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous">
</script>

<script src="menu/video/js/jquery-modal-video.min.js"></script>

<script>
	$(".js-video-button").modalVideo({
		youtube:{
			controls:0,
			nocookie: true
		}
	});
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