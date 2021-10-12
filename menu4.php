<?php
  //sleep(1);
  ini_set("session.cookie_lifetime","5400");
  ini_set("session.gc_maxlifetime","5400");
  session_start();
  include 'php/conexion_bd.php';
  
  if($_SESSION['servicio'] == "1,2,3" || $_SESSION['servicio'] == "1"  || $_SESSION['servicio'] == "1,3"  || $_SESSION['servicio'] == "3,4"  || $_SESSION['servicio'] == "1,4"  || $_SESSION['servicio'] == "0,1,2,3,4,5,6,7,8"  || $_SESSION['servicio'] == "4"){//valido si pertenece a esta campaña
  
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
    <a href="menu4.php" class="logo">
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
              <span class="label label-warning">2</span>
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
              

              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
          
        
        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-whatsapp "></i>
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
          
                    <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-soccer-ball-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Eliminatorias</li>
              
               <li>
                             
                <ul class="menu">
                  <li>
                    <a href="5_ESPECIFICAS/documentos/CANAL DEL FUTBOL.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Canal de Fútbol
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>

              
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
          

          
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-commenting-o"></i>
              <span class="label label-success">6</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Scripts Colega</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                   <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript">
                      <i class="fa fa-commenting-o text-aqua"></i> Script de Apertura
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScriptD">
                      <i class="fa fa-commenting-o text-yellow"></i> Script de Transferencia
                    </a>
                  </li>

                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript3">
                      <i class="fa fa-commenting-o text-pink"></i> Script Cierre
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript7">
                      <i class="fa fa-commenting-o text-pink"></i> Script Evento Fortuito
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript1">
                      <i class="fa fa-commenting-o text-yellow"></i> Script Sin Audio
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript2">
                      <i class="fa fa-commenting-o text-red"></i> Script Usuario Dificil
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Scripts</a></li>
            </ul>
          </li>
          
                    

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
                      <i class="fa fa-info text-aqua"></i> Guías Comerciales
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
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Herramientas</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
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
			  <a href="#" onclick="javascript:ctrl_menu_user_CGD();" id="btn_ges">
				<i class="fa fa-indent"></i> <span>Gestión Diaria</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			 
			<li>
			  <a href="#" onClick="pro_pendientes();" data-toggle="modal" data-target="#modal-defaultCargas">
				<i class="fa fa-exclamation"></i> <span>Tickets Omnicanal</span>
				<span class="pull-right-container">
                  <span class="label label-primary pull-right" id="pomni"><i class="fa fa-refresh fa-spin"></i></span>
                </span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			

			
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionCO1();"><i class="fa fa-circle-o"></i> Mi gestión</a></li>
			  </ul>
			</li>
			

        
        <li class="header">CALIDAD</li>
        
        	<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Manuales</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="4_COLEGA/documentos/MANUAL DE PROCEDIMIENTOS SOPORTE COLEGA 30_01_2020.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Procedimientos</a></li>
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
  

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Decodificadores Adicionales (promoción válida desde:<strong> 01/09/2019 al 29/02/2020)</strong></h4>
              </div>
              <div class="modal-body">
                <p style="color:#389dec;"><strong><font size=5>Clientes Nuevos: $0,00</font></strong><i style="color:#000000;"> en instalación y renta por 3 meses.</i></p>
                <p><b>Condiciones:</b></p>
                <ul>
                <li><p>Cliente debe contratar al menos un (1) deco adicional. Los decos adicionales que instale tendrán 3 meses sin renta.</p></li>
                <li><p>Una vez que concluya la promoción el costo de renta por cada decodificador adicional es $7,00 + IMP <strong>(Total: $9,02)</strong>.</p></li>
                <li><p><strong>NO APLICA PARA EMPAQUETADOS.</strong></p></li>
                </ul>
                <hr>
                <p style="color:#389dec;"><strong><font size=5>Clientes Antiguos: $0,00</font></strong><i style="color:#000000;"> en instalación y renta por 3 meses.</i></p>
                <p><b>Condiciones:</b></p>
                <ul>
                <li><p>El descuento aplica por 3 facturas consecutivas.</p></li>
                <li><p><strong>Aplica a todos los planes.</strong></p></li>
                <li><p>Una vez que concluya la promoción el costo de renta por cada decodificador adicional es $7,00 + IMP <strong>(Total: $9,02)</strong>.</p></li>
                <li><p><strong>NO APLICA PARA EMPAQUETADOS.</strong></p></li>
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
        
        
        <div class="modal fade" id="modal-hotpack">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HOTPACK - SAN VALENTÍN (promoción válida desde:<strong> 01/02/2020 - 29/02/2020)</strong></h4>
              </div>
              <div class="modal-body">
                <ul>
                    <li><p><font size=4><b>Por la activación del paquete HOTPACK los clientes (Nuevos y Antiguos) disfrutarán de los siguientes descuentos: </b></font></p></li>
                <ul>
                    <li><font size=3 style="color:#e83529;">1er mes: <strong>100%</strong> de descuento.</font></li>
                    <li><font size=3 style="color:#e83529;">2do mes: <strong>50%</strong> de descuento.</font></li>
                    <li><font size=3 style="color:#e83529;">A partir del 3er mes se cobrará la tarifa normal: <strong>$10,00+IMP</strong>.</font></li>
                    <li><font size=3 style="color:#e83529;">El cliente tendrá acceso a <strong>HOT GO</strong>.</font></li>
                </ul>
                </ul>

                <img src="assets/img/canales_feb.png">
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
        
        

        <!-------------------- /.modal de las capsulas ------------------------>
        
        <div class="modal fade" id="modal-defaultRechazos">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Codigos de rechazos</h4>
              </div>
              <div class="modal-body">
                <table id="example2" class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th>Código Rechazo</th>
                  <th>Descripción</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Cuenta errada o inactiva</td>
                </tr>
				<tr>
                  <td>2</td>
                  <td>Sin fondos</td>
                </tr>
				<tr>
                  <td>5</td>
                  <td>Error cuentas de pagos vencidos</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Fondos insuficientes para cupo disponible</td>
                </tr>
				<tr>
                  <td>19</td>
                  <td>Tarjeta no existe</td>
                </tr>
				<tr>
                  <td>28</td>
                  <td>Tarjeta boletinada</td>
                </tr>
				<tr>
                  <td>54</td>
                  <td>Error fecha de expiración</td>
                </tr>
                </tbody>
              </table>
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
        
        
        
        
        <!------------------- /.modal script ------------------>
        
        <div class="modal fade" id="modal-defaultCanalesN">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sustitución de canales Televisa</h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li><i>Las señales del grupo TELEVISA: <b> Canal de las estrellas(151), De peliculas(504), Telenovelas(250), Golden(501)</b>, ya no formarán parte de la oferta comercial de CNT TV, el reemplazo de las señales serán las siguientes:</i></li>
                       <img src="documentos/canales/canales nuevos.png">
                       <li>Estas señales ya se encuentran disponibles y se podrán disfrutar desde planes básicos vigentes y antiguos. El reemplazo de las señales Golden Edge y Golden HD se comunicará en los próximos días.</li>
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
        
        
        
        
      <div class="modal fade" id="modal-cod_rechazos">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Motivos de Rechazos</h4>
              </div>
              <div class="modal-body">
                    
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
        
        
        
        
        
        
        
        
      <div class="modal fade" id="modal-defaultCanalesN2">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sustitución de canal RT (Rusia Today) - 778</h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li><i><b>"Estimado cliente, la CNT  buscando generar la mejor experiencia en el contenido que ofrece a sus suscriptores y enfocado en brindar una programación afín a la familia ecuatoriana ha cambiado la programación de la cadena Rusia Today por tres nuevas señales  adicionales, sin incrementar el costo a sus clientes, las nuevas señales que  ya están disponibles son: TyCSports en SD y HD uno de los canales con el mejor contenido deportivo de Latinoamérica, Vía X y Zona latina que son canales con contenido familiar, variedades y musical"</b></i></li>
                         <p></p>
                         <li>Estas señales ya se encuentran disponibles y se podrán disfrutar desde planes básicos vigentes y antiguos.</li>
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
        
        
        
        <div class="modal fade" id="modal-defaultRetencion">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Área de Retención</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li>Se deberán transferir llamadas de los casos de clientes que <b>solamente</b> tengan intensión de retiro de servicios fijos y móviles.</li>
                        <li>La transferencia de llamadas deberá ser aplicada únicamente en los siguientes horarios:<b> Lunes a Viernes de 8:00 a 19:44 horas al 50242</b>.</li>
                        <li>De Lunes a Viernes de 19:45 a 07:59, fines de semana y feriados, se deberá ingresar quejas <b>110 para servicios fijos</b>.</li>
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
        
        <div class="modal fade" id="modal-defaultTraslados">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Información de Traslados</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i><b>IMPORTANTE ANTES DE REGISTRAR UN TICKET POR TRASLADO:</b>.</i></li>
                        <ol>
                        <li>Validar que el contrato se encuentre activo.</li>
                        <li>Validar que el cliente se encuentre al día en pagos.</li>
                        <li>Verificar que no tenga peticiones pendientes, solicitudes ingresadas, sean estas visitas técnicas, suspensiones temporales y traslados.</li>
                        </ol>
                        <li><i><b>RECORDAR:</b>.</i></li>
                        <ol>
                        <li>El cliente debe descargar y llenar la documentación para la solicitud en el enlace: <b>https://corporativo.cnt.gob.ec/documentos-de-descarga/</b>.</li>
                        <li>Nombre del documento: <b>Solicitud de servicios adicionales de televisión por suscripción</b>.</li>
                        <li>Indicar al cliente que debe llenar el formulario con letra legible  y con esfero azul.</li>
                        <li>El formulario debe ser firmado sólo por el titular del servicio.</li>
                        <li>Si su traslado es externo se debe registrar de forma <b>OBLIGATORIA</b> un número teléfonico de referencia <b>FIJO CNT (NO CELULAR)</b> que se encuentre a una distancia menor a 100 metros de la nueva dirección para poder verificar factibilidad técnica en nuestro sistema.</li>
                        <li>Escanear el documento y enviarlo junto con la copia de la cédula de identidad del titular a la dirección de correo: <b>tramites.n2@hotmail.com</b>.</li>
                        <li>Costo del traslado interno (para Ecuador continental y Galápagos) <b>$15 + Impuestos, TOTAL: $19,32</b>.</li>
                        <li>Costo del traslado externo para Ecuador continental <b>$15 + Impuestos, TOTAL: $19,32</b>. y para Galápagos <b>$50,00 + IMP, TOTAL: $64,40</b>.</li>
                        <li>INDICAR EL SIGUIENTE SCRIPT: <i><b>Sr. Sra. (Nombre del cliente), le informamos que su caso será atendido en un lapso de 5 días laborables, para seguimiento a su petición, favor tomar nota del ticket asignado, en caso de ser necesario un agente se comunicará para completar el Soporte solicitado</b></i></li>
                        <li>Crear el ticket a N2 y documentar el correo de donde enviará el cliente la información y los datos de contacto.</li>
                        </ol>
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
        
        

        <div class="modal fade" id="modal-defaultScript">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script de Apertura</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>"Gracias por llamar a la CNT, le saluda (nombre y apellido del RAC), ¿Con quien tengo el gusto de hablar?".</i></li>
                        <li><i>"Compañero, (Nombre del técnico), ¿En qué le puedo servir?". (Solicitar numero de servicio o Splitter)</i></li>
                        <li><i>(Solicitar Nombre y Apellido del titular), "Compañero, El servicio se encuentra a nombre de.." (Indicar nombre y apellido del titular).</i></li>
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
        
        
        <div class="modal fade" id="modal-defaultScriptD">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script de Transferencia</h4>
              </div>
              <div class="modal-body">
                    
                        <ol style="text-align: justify;">
                                <li><i>"Estimado colega, para solventar su requerimiento, su llamada será transferida al equipo de soporte especializado".</i></li>
                        </ol>
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
        
        
        
        <div class="modal fade" id="modal-defaultScriptVOI">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script VOI</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><b>Solicitar los datos únicamente si el cliente ya no dio los datos antes para su requerimiento</b></li>
                        <p></p>
                        <li><i>"Estimado/a Sr/Sra/XXXX Por procesos de control de calidad solicitamos comedidamente evalúe nuestro servicio mediante una encuesta, para esto agradeceré nos proporcione la siguiente información, la encuesta llegará a su correo, celular y de igual manera en este momento será transferido para que pueda calificar el servicio y la atención prestada".</i></li>
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
        
        
        <div class="modal fade" id="modal-defaultCamiseta">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Promoción Camiseta del Barcelona Autografiada</h4>
              </div>
              <div class="modal-body">

                <ul>
                    <li><p>Camiseta autograﬁada por todo el plantel de Barcelona S.C.</p></li>
					<li><p>Promoción vigente desde: 26 de Septiembre al 4 de Octubre del presente año.</p></li>
					<li><p>Ver: <a href="documentos/promociones/TERMINOS Y CONDICIONES CAMISETA BSC SEPTIEMBRE.pdf" target="_blank" id="ver_pichincha">Detalles de la Promoción</a></p></li>
                    <img src="documentos/promociones/camisetalogo.png">
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
        
        
        
        

        <div class="modal fade" id="modal-defaultScript1">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script llamada Sin Audio</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>1. Estimado Sr. Apellido o nombre, debido a que tenemos problemas de comunicación, por favor vuelva  a comunicarse, que tenga buen día/tardes/noche.</i></li>
                    </ul>
                    <ul>
                        <li><i><b>2. Canal abierto, brindar script establecido:</b> “Estimado  Sr. Apellido o nombre , por favor ayúdeme cerrando la llamada” </i></li>
                    </ul>
                    <ul>
                        <li><i><b>3. Canal abierto, cliente no responde brindar script:</b> ”Estimado cliente al no tener respuesta,  se procede a cerrar la llamada” </i></li>
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
        
        
        <div class="modal fade" id="modal-defaultScript2">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script técnico difícil</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Estimado Sr. Apellido o nombre, en estas condiciones no puedo proseguir con la llamada, por lo que procedo a cerrarla, que tenga buen día/ tarde/noche.</i></li>
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
        
  
  
       <div class="modal fade" id="modal-defaultScript3">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script Cierre de llamada</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Estimado compañero/colega/ nombre técnico (xxxx), (indicar si el  tipo de requerimiento, petición, consulta, reclamo e incidente) ha sido solventado?.</i></li>
                        <li><i>Compañero / colega ha sido un placer atenderle que tenga un buen día/tarde/ noche.</i></li>
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
        
        
        <div class="modal fade" id="modal-defaultScript4">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script Usuario difícil (Agresivo, Violento, Estado Etílico)</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Estimado cliente, en estas condiciones no puedo proseguir con la llamada, por lo que procedo a cerrarla, que tenga buen día/tarde/noche.</i></li>
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
        
        
        <div class="modal fade" id="modal-defaultScript5">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script Encuesta de Satisfacción</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>"Estimado Sr/Sra. <b>(tratar por el apellido)</b> por procesos de control de calidad, solicitamos muy comedidamente nos ayude con una encuesta que nos permitirá mejorar nuestro servicio, en este momento le transfiero. Gracias."</i></li>
                        <li><i>"Sr/Sra. XXXX ha sido un placer servirle, que tenga buen día/tarde/noche."</i></li>
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
        
        
        <div class="modal fade" id="modal-defaultScript6">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script Cliente no pasa validación de datos</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Sr/sra., lastimosamente no ha pasado la validación de datos, por lo que solicito que se comunique una vez tenga la información correcta, posteriormente se aplicará el script de despedida.</i></li>
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
        
        
        
         <div class="modal fade" id="modal-defaultScript7">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script Evento Fortuito</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Estimado compañero/colega/nombre técnico (xxx), nos encontramos realizando un mantenimiento programado en el sistema. Ayúdeme con el número de contacto o el  correo del asistente o jefe de zona para copiar la información del caso que ya se encuentra escaldo al área correspondiente, gracias por su comprensión, que tenga buen día/tarde/noche.</i></li>
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
        
        
        <div class="modal fade" id="modal-defaultScript8">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script Caida de Sistemas</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Estimado sr/a. ((apellido)) al momento presentamos problemas con nuestros sistemas ((xxxx)). Si es tan amble de volverse a comunicar nosotros en el el transcurso del dia/tarde/noche La cnt lamenta los problemas causados. Que tenga un buen ((día/tarde/noche))..</i></li>
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
        
        
        <div class="modal fade" id="modal-defaultScript9">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Otros Scripts</h4>
              </div>
              <div class="modal-body">
                    <p><b>Mantenimiento Programado:</b></p>
                    <ul>
                        <li><i>Estimado cliente, pedimos disculpas por los inconvenientes causados; nos encontramos realizando un mantenimiento programado en el sistema. Comuníquese en el transcurso de XX minutos para atender su requerimiento, gracias por su comprensión, que tenga buen día/tarde/noche.</i></li>
                    </ul>
                    <hr>
                    <p><b>Evento fortuito:</b></p>
                    <ul>
                        <li><i>Estimado Sr/a. ((Apellido)) Al momento presentamos problemas con el servicio en el sector ((XXXX)). Si es tan amble revisar el servicio en el transcurso de ((XXXX)). La CNT lamenta los problemas causados. Que tenga un buen ((día/tarde/noche)).</i></li>
                    </ul>
                    <hr>
                    <p><b>Transferencia a Retención:</b></p>
                    <ul>
                        <li><i>Estimado (a) Sr./Sra. (Nombre o Apellido) para brindarle un mejor servicio voy a transferir su llamada para que le puedan informar sobre alternativas adicionales a su requerimiento. por favor manténgase en la línea.</i></li>
                    </ul>
                    <hr>
                    <p><b>Transferencia a Retención (No Titular):</b></p>
                    <ul>
                        <li><i>Estimado Sr/a. ((Apellido)) me permito comunicarle que la única persona autorizada para solicitar el retiro es el titular del servicio, por lo que solicitamos muy comedidamente que el mismo se comunique para ayudarlo con la petición.</i></li>
                    </ul>
                    <hr>
                    <p><b>Masivo Reportado:</b></p>
                    <ul>
                        <li><i>Estimado sr/a. ((apellido)) al momento presentamos problemas con el servicio en el sector ((xxxx)). Si es tan amble revisar el servicio en el transcurso de ((xxxx)). La cnt lamenta los problemas causados. Que tenga un buen ((día/tarde/noche)).</i></li>
                    </ul>
                    <hr>
                    <p><b>Masivo No Reportado:</b></p>
                    <ul>
                        <li>Cuando se identifica un problema masivo por verificar se indica a cliente que se comunique en el transcurso del día hasta confirmar realmente cual es el problema y cuanto demoraría en ser solventado, remitir al supervisor la novedad indicada.</li>
                        <li><i>Sr./sra./srta. Apellido usuario final, “este momento estamos presentando problemas en la plataforma le pedimos disculpas por las molestias ocasionadas, nuestros tecnicos estan solventando el problema, le rogamos tener pacienca en el lapso de la la mañana/tarde/noche que tenga un buen dia/tarde/ noche).</i></li>
                    </ul>
                    <hr>
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
        
        
        <div class="modal fade" id="modal-defaultSD">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Canales Paquete SD</h4>
              </div>
              <div class="modal-body">
                <img src="assets/img/canalessd.png">
                <ul>
                    <li><p>Las señales promocionales son por tiempo limitado.</p></li>
                    <li><p>Señal RT y 700 se despliega para cliente con equipos HD o Zapper; Señal RTU(46) estará disponible para todos los planes base DTH.</p></li>
                    <li><p>Nuevas señales promocionales(NickJr., ComedyCentral, Enlace, Ewtn y Telefé) estarán disponibles a partir del 28 de marzo únicamente a clientes con el plan activo: Paquete SD.</p></li>
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
        
        <div class="modal fade" id="modal-defaultHD">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Canales Paquete HD</h4>
              </div>
              <div class="modal-body">
                <img src="assets/img/canaleshd.png">
                <ul>
                    <li><p>Las 15 señales HD promocionales mantienen vigencia hasta 31/12/2019.</p></li>
                    <li><p>Las 9 señales SD son promocionales convigencia hasta el 31/12/2019.</p></li>
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
        
        
        <div class="modal fade" id="modal-defaultGalapagos">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Canales Paquete Galápagos</h4>
              </div>
              <div class="modal-body">
                 <img src="assets/img/canalesgalapagos.png">
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
        
        
        <div class="modal fade" id="modal-defaultFOX">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Canales FOX PREMIUM</h4>
              </div>
              <div class="modal-body">
                <img src="assets/img/canales_fox.png">
                <ul>
                    <li><p>El PLAN FOX + PREMIUM mantiene 8 señales en SD + 1 señal  HD precio normal $10,00 + imp.</p></li>
                    <li><p>Para la contratación  de PLAN FOX + PREMIUM, mínimo debe tener contratado el plan Súper(antiguos)o Paquete SD / HD.</p></li>
                    <li><p>La señal HD se reflejará únicamente en decodificadores tipo zapper.</p></li>
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
        
        
        
        <div class="modal fade" id="modal-defaultTotal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Canales Total Plus</h4>
              </div>
              <div class="modal-body">
                <img src="assets/img/canalestotal.png">
                <ul>
                    <li><p>El Plan Total Plus puede ser agregado también para clientes antiguo con el Plan Masivo y Plan Súper.</p></li>
                    <li><p>Costo del plan Total Plus es de $10,00 + imp. ($12,88 incluido imp.).</p></li>
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
        
        
        
        
        
        
      <div class="modal fade" id="modal-defaultHBO">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Canales HBO PREMIUM - <b>Desde el 01 de NOV 2019 al 29 de FEB de 2020.</b></h4>
              </div>
              <div class="modal-body">
                <img src="assets/img/canaleshbo.png">
                <ul>
                    <li><p><b>Clientes nuevos de TV: </b> 1ero y 2do mes GRATIS; a partir del 3er mes tarifa vigente ($10,00 + imp.).</p></li>
                    <li><p><b>Clientes actuales de TV: </b>3 MESES 50% OFF; a partir del 4to mes tarifa vigente ($10,00 + imp.).</p></li>
                </ul>
                <ul>
                    <li>Promoción clientes nuevos que contraten el Paquete SD/HD: 1ro y 2do mes sin cargo, a partir del 3er mes se facturará el valor del plan HBO (+$10,00); cliente deberá permanecer mínimo 6 meses con el PLAN HBO PREMIUM a partir del 3er mes con cargo.</li>
                    <li>Promoción clientes actuales de TV; 1ro, 2do y 3er mes 50% de descuento; a partir del 4to mes se facturará el valor del plan HBO (+$10,00); cliente deberá permanecer mínimo 6 meses con el PLAN HBO PREMIUM a partir del 4to mes con cargo completo.</li>
                    <li>El PLAN HBO PREMIUM mantiene 8 señales en SD a un valor de $ 10,00 + imp. ($12,88 incluido impuestos).</li>
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
        
        
        <div class="modal fade" id="modal-defaultCargas">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="carga">
                            
                    </div>
                </div>
            </div>
        </div>
        
        
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
        
        <div class="modal fade" id="modal-defaultCostos">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="costos">
                            
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="modal-defaultAgencias">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="agencias">
                            
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="modal-defaultCanales">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="canales">
                            
                    </div>
                </div>
            </div>
        </div>
        
        
        
         <!------------------------------ /.Eliminar PPV FORMULARIOS DE PRUEBAS---------------------------->
         
         

        
         <div class="modal fade" id="modal-defaultCumple">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Queremos saber más sobre ti:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-6">
                     <img src="assets/img/ballon.jpg" width="160" height="300">
                 </div>
                 <div class="col-lg-6 col-xs-6">
                     
    				<div id="id11" class="form-group">
                        <label>*Fecha de Nacimiento:</label>
                            
                        <div class="input-group date">
                          <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker" data-mask tabindex="1">
                          </div>
                        <div id="idcumple1"></div>
                    </div>
                     
                	<div id="color" class="form-group">
            			<label>*Color Favorito:</label>
            			<select id="color1"  class="form-control select2" style="width: 100%;" data-mask tabindex="2">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="Negro">Negro</option>
            				<option value="Azul">Azul</option>
            				<option value="Marrón">Marrón</option>
            				<option value="Gris">Gris</option>
            				<option value="Verde">Verde</option>
            				<option value="Naranja">Naranja</option>
            				<option value="Rosa">Rosa</option>
            				<option value="Púrpura">Púrpura</option>
            				<option value="Rojo">Rojo</option>
            				<option value="Blanco">Blanco</option>
            				<option value="Amarillo">Amarillo</option>
            			</select>
            		    <div id="idcumple2"></div>
            		</div>
                	
                	<div id="id1" class="form-group">
						<label>*Comida Favorita:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-birthday-cake"></i>
						  </div>
					    	  <input type="text" class="form-control" id="comida1" data-mask tabindex="3">
						  </div>
						  <div id="idcumple3"></div>
					  </div>	
					  
                	<div id="id1" class="form-group">
						<label>*Pasatiempos (Hobby):</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-bicycle"></i>
						  </div>
					    	  <input type="text" class="form-control" id="hobby1" data-mask tabindex="4">
						  </div>
						  <div id="idcumple4"></div>
					  </div>
					  
					  <div class="form-group">
                           <p class="help-block">* Campos Obligatorios.</p>
                      </div>

                	<table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_cumple" data-mask tabindex="15" onClick="pro_cumple_validacion();" class="btn btn-info pull-center">Guardar</button>
                    		</td>
                		</tr>
                	</table>   
                </div>
                <div class="col-lg-3 col-xs-6">
                     <img src="assets/img/serpentina.jpg" width="135" height="180">
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
        
        
        
        <div class="modal fade" id="modal-pruebaPPV">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Complete información PPV:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-6">
                 </div>
                 <div class="col-lg-6 col-xs-6">
                    <div id="id_v" class="form-group">
                		<label>*Virtual:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-th-list"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="tv1" data-mask tabindex="0" onKeyPress="return soloNumeros(event)" maxlength="9">
                			</div>
                		<div id="v_temp"></div>
                	</div>
                				
                	<div id="id_r" class="form-group">
            			<label>*Respuesta:</label>
            			<select id="tv2"  class="form-control select2" style="width: 100%;" data-mask tabindex="1">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="1">Contrata PPV</option>
            				<option value="2">Contratara despues</option>
            				<option value="3">No contrata por precio</option>
            				<option value="4">No interesa / No desea</option>
            			</select>
            		    <div id="r_temp"></div>
            		</div>
                	<table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_temp" data-mask tabindex="15" onClick="ppv_tmp();" class="btn btn-info pull-center">Guardar</button>
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
        

        
        
        
         <div class="modal fade" id="modal-SVA">
           <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Información activaciones SVA:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-6 col-xs-6">
                    <div id="sva1_1" class="form-group">
                	   <label>*Usuario OPEN: (Confirme)</label>
                	   <div class="input-group">
                	     <div class="input-group-addon">
                			<i class="fa fa-user"></i>
                		 </div>
                		 <input type="text" class="form-control"  id="sva1_2" data-mask tabindex="1" onKeyPress="return sololetras(event)" maxlength="15"  value="<?php echo $filaB['usuario'] ?>">
                		</div>
                		<div id="sva1_3"></div>
                	</div>
                	
                   <div id="sva2_1" class="form-group">
						<label>*Fecha de Activación:</label>
						<div class="input-group">
    					  <div class="input-group-addon">
    						<i class="fa fa-calendar"></i>
    					  </div>
						  <input type="text" class="form-control" id="datemask"  maxlength="10" value="<?php date_default_timezone_set("America/Guayaquil"); echo date("d-m-Y"); ?>" data-mask tabindex="3" >
					   </div>
					  <div id="sva2_3"></div>
					</div>
                	
                	<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
                    </div>
                	
                 </div>
                 

                 
                 <div class="col-lg-6 col-xs-6">

                	<div id="sva3_1" class="form-group">
            			<label>*Paquete activado:</label>
            			<select id="sva3_2"  class="form-control select2" style="width: 100%;" data-mask tabindex="2">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="HBO Premium">HBO Premium</option>
            				<option value="FOX Premium">FOX Premium</option>
            				<option value="Total Plus">Total Plus</option>
            				<option value="Play Boy Diario">Play Boy Diario</option>
            				<option value="Play Boy Mensual">Play Boy Mensual</option>
            				<option value="HOT PACK">HOT PACK</option>
            			</select>
            		    <div id="sva3_3"></div>
            		</div>
            		
            		
            		<div id="sva4_1" class="form-group">
                		<label>*N° Contrato:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-file-text-o"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="sva4_2" data-mask tabindex="4" onKeyPress="return soloNumeros(event)" maxlength="7">
                			</div>
                		<div id="sva4_3"></div>
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
        
        





<!------------------------------ /.Intencion de retiro ---------------------------->



         <div class="modal fade" id="modal-retiro">
           <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Posible retiro del servicio:</h4>
              </div>
              <div class="modal-body">
                  <div class="callout callout-warning">
                    <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                    <p>Sólo retiros por la NO transmisión de Noche Amarilla, Noche Blanca y Explosión Azul.</p>
                  </div>
                  <p></p>
                  <p></p>
                  <p></p>
                 <div class="col-lg-3 col-xs-4">
                 </div>
                 <div class="col-lg-6 col-xs-8">

            		<div id="ret1_1" class="form-group">
                		<label>*N° Cédula:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-list-alt"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="ret1_2" data-mask tabindex="1" onKeyPress="return soloNumeros(event)" maxlength="13">
                			</div>
                		<div id="ret1_3"></div>
                	</div>
                	
            		<div id="ret2_1" class="form-group">
                		<label>*N° Contrato:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-file-text-o"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="ret2_2" data-mask tabindex="2" onKeyPress="return soloNumeros(event)" maxlength="7">
                			</div>
                		<div id="ret2_3"></div>
                	</div>
                	
                	<div id="ret3_1" class="form-group">
                		<label>*N° Queja:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-calendar-times-o"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="ret3_2" data-mask tabindex="3" onKeyPress="return soloNumeros(event)" maxlength="6">
                			</div>
                		<div id="ret3_3"></div>
                	</div>
                	
                	<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
                    </div>
                	
                 </div>
                 



                    <table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_retiro" data-mask tabindex="4" onClick="send_retiro();" class="btn btn-info pull-center">Guardar</button>
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
        
        
                <div class="modal fade" id="modal-CAPACITACIONES">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HORARIOS CAPACITACIONES GUÍA COMERCIAL AGOSTO! <i class="fa fa-warning bg-yellow (alias)"></i></h4>
              </div>
              <div class="modal-body">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="documentos/capacitaciones/COLEGA.jpg">
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
     //aqui llamo a la funcion que valida si necesito el modal
     pro_cumple();
     function pro_cumple(){
       dataString = '1';
       $.ajax({
       		type: 'POST',
       		url: 'php/cumple/val_cumple.php', 
       		data:  dataString, 
       		success: function(x){
       		    if(x=='1'){
       		        $('#modal-defaultCumple').modal('show');
       		    }
       		}
       	});
     }
     
     function pro_cumple_validacion(){
       
       if(document.getElementById('datepicker').value == "" || document.getElementById('color1').value == "" || document.getElementById('comida1').value == "" || document.getElementById('hobby1').value == ""){
           alert("Por favor, complete todos los campos.");
       }else{
           if (confirm("\xbfContinuar y guardar?")){
               var dataString = 'a1=' + document.getElementById('datepicker').value + '&a2=' + document.getElementById('color1').value + '&a3=' + document.getElementById('comida1').value + '&a4=' + document.getElementById('hobby1').value;
               $.ajax({
               		type: 'POST',
               		url: 'php/cumple/registrar.php', 
               		data:  dataString, 
               		success: function(x){
               		    if(x=='1'){
               		        alert("Información registrada.");
               		        $('#modal-defaultCumple').modal('hide');
               		    }
               		}
               	});
           }
       }
     }

    //aqui llamo a la funcion que valida si necesito el modal
    
    
    
       $('#datepicker').datepicker({
           autoclose: true
       })
       
       pro_charge();
       function pro_charge(){
           dataString = '1';
        	$('#pomni').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
        	$.ajax({
        		type: 'POST',
        		url: '4_COLEGA/charge.php', 
        		data:  dataString, 
        		success: function(x){
        		    document.getElementById('pomni').innerHTML = x;
        		}
        	});
        }
    </script>
    


 <script>
    $("#content1").load('5_ESPECIFICAS/imagen_inicio.html');
    //$("#content1").load('4_COLEGA/dashboard.php');
    
  function pro_cargaGHJ(){
	$("#costos").load('menu/capsulas/costos.php'); 
  }
  
  function pro_cargaY(){
	$("#agencias").load('menu/capsulas/agencias.php'); 
  }
  
  function pro_canales(){
	$("#canales").load('menu/capsulas/canales.php'); 
  }
  
  function pro_pendientes(){
	$("#carga").load('4_COLEGA/php/gestiondiaria/val_omni_pendientes.php'); 
  }
  
  function pro_pendientes2(){
	$("#cargaMot").load('php/asesores/des_motivos2.php'); 
  }
  
  
  function mensaje(){
	alert("Javascript msj"); 
  }
  
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
  
  function newland_3(){
	window.open("menu/configuraciones/Demo/newland_3.html", '_blank');
    window.focus();
  }
  
  function newland_4(){
	window.open("menu/configuraciones/Demo/newland_4.html", '_blank');
    window.focus();
  } 
  
  
  function IrCitrix(){
             //validar primero que ya no tenga una cuenta asignada. De ser así mostrar Modal con datos de cuenta sin preguntar.
        if(confirm("¿Solicitar datos de cuenta Citrix?")){
             alert("Modal");
             //sino tiene, mostrar datos de cuenta, en BD asignar datos, preguntar si funciona
             //Si funciona queda asi.. listo.
             //sino funciona, preguntar el motivo.. seguido en BD esa cuenta marcar como bloqueada y mostrar a sup
             //asignar una nueva y hacer proceso..
        }
  }
  

  
  function ppv_tmp(){
    var tv1 = document.getElementById("tv1");
	var tv2 = document.getElementById("tv2");
    var dataString = 'a1=' + tv1.value + '&a2=' + tv2.value;
    if (tv1.value == "" || tv2.value ==0 || tv1.value ==0){
        alert("Complete todos los campos");
    }else{
       if (confirm("\xbfContinuar y guardar?")){
    		$.ajax({
        		type: 'POST',
        		url: 'php/val_ppvTmp.php', 
        		data:  dataString, 
        		success: function(x){
        		    tv1.value = "";
        		    tv2.value = "";
            		alert("Guardado con Éxito");
            		$('#modal-pruebaPPV').modal('hide');
            		
                }
        	});
        }
    }
  }
  

  //temporal SVA
  
	$(function () {
		//Datemask dd/mm/yyyy
		$('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-aaaa' })
  })

  
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
       }else if(!/^[0-9\-]+$/.test(document.getElementById("datemask").value)){
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
		   $('#sva3_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           sva3 = 1;
       }else{
           document.getElementById("sva3_1").className = "form-group has-feedback";
		   $('#sva3_3').hide().html('').fadeIn(500);
		   sva3 = 0;
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
       
       if (sva1 == 0 && sva2 == 0 && sva3 == 0 && sva4 == 0){
            //invierto fecha
                var dia = parseInt(document.getElementById("datemask").value.slice(0,2));
                var mes = parseInt(document.getElementById("datemask").value.slice(3,5));
                var anio = parseInt(document.getElementById("datemask").value.slice(-4));
                    
                var amd = anio + '-' + mes + '-' + dia;
           
           var dataString = 'a1=' + document.getElementById("sva1_2").value + '&a2=' + amd + '&a3=' + document.getElementById("sva3_2").value + '&a4=' + document.getElementById("sva4_2").value;
           if (confirm("\xbfContinuar y guardar?")){
               $.ajax({
    			 type: 'POST',
    			 url: 'php/asesores/act_sva/act_sva.php', 
    			 data:  dataString, 
    			 success: function(x){
        			 if(x==1){
                        document.getElementById("sva3_2").value = "";
                        document.getElementById("sva4_2").value = "";
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
       
    }//funcion guardar principal
    
    
    

       function send_retiro(){
   
        
       if(document.getElementById("ret1_2").value == ""){
           document.getElementById("ret1_1").className = "form-group has-error";
		   $('#ret1_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           ret1 = 1;
       }else{
           document.getElementById("ret1_1").className = "form-group has-feedback";
		   $('#ret1_3').hide().html('').fadeIn(500);
		   ret1 = 0;
       }
       
       if(document.getElementById("ret2_2").value == ""){
           document.getElementById("ret2_1").className = "form-group has-error";
		   $('#ret2_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           ret2 = 1;
       }else{
           document.getElementById("ret2_1").className = "form-group has-feedback";
		   $('#ret2_3').hide().html('').fadeIn(500);
		   ret2 = 0;
       }
       
       if(document.getElementById("ret3_2").value == ""){
           document.getElementById("ret3_1").className = "form-group has-error";
		   $('#ret3_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           ret3 = 1;
       }else{
           document.getElementById("ret3_1").className = "form-group has-feedback";
		   $('#ret3_3').hide().html('').fadeIn(500);
		   ret3 = 0;
       }

       
       if (ret1 == 0 && ret2 == 0 && ret3 == 0){

           var dataString = 'a1=' + document.getElementById("ret1_2").value + '&a2=' + document.getElementById("ret2_2").value + '&a3=' + document.getElementById("ret3_2").value;
           if (confirm("\xbfContinuar y guardar?")){
               $.ajax({
    			 type: 'POST',
    			 url: 'php/intencion_retiro/ret_ser.php', 
    			 data:  dataString, 
    			 success: function(x){
        			 if(x==1){
                        document.getElementById("ret1_2").value = "";
                        document.getElementById("ret2_2").value = "";
                        document.getElementById("ret3_2").value = "";
                        alert("Intención de Retiro Guardada");
                        $('#modal-retiro').modal('hide');
       				 }else if (x==7){
       				    $('#modal-retiro').modal('hide');
       				    alert("Sesion caducada. Inicie sesion nuevamente.");
       				    self.location = "seleccion.php";
       				 }
             	 }
    		 });
           }
       }
       
    }//funcion guardar principal de retiro
    
    
    
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
    
    //temporal actvaciones sva
    
    
    
    
    
  
    function sololetras(e) {
        key=e.keyCode || e.which;
        teclado=String.fromCharCode(key).toLowerCase();
        letras="qwertyuiopasdfghjklñzxcvbnm ";
        especiales="8-37-38-46-164";
        teclado_especial=false;
        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
                break;
            }
        }
        if(letras.indexOf(teclado)==-1 && !teclado_especial){
            return false;
        }
    }
				
	function soloNumeros(e){
		var key = window.Event ? e.which : e.keyCode
	    return ((key >= 48 && key <= 57) || (key==8)) 
    }
				  

  

  $('#loader').fadeOut(2300);  
  //$('#modal-CAPACITACIONES').modal('show');
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