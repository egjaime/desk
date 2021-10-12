<?php
  //sleep(1);
  ini_set("session.cookie_lifetime","5400");
  ini_set("session.gc_maxlifetime","5400");
  session_start();
  include 'php/conexion_bd.php';
  
  if($_SESSION['servicio'] == "7" || $_SESSION['servicio'] == "0,1,2,3,4,5,6,7,8"  || $_SESSION['servicio'] == "1,7"){//valido si pertenece a esta campaña
  
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
        
        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-whatsapp "></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Catálogo CNT</li>
              
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
              <i class="fa fa-home"></i>
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
                    <a href="documentos/agencias/Listado de centros de atencion al cliente abiertos 02-09-2020.pdf" target="_blank">
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


        <li class="header">CALIDAD</li>
        
        	<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Manuales</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="7_GUIA/Documentos/GUIA DE INFORMACION PRESENTACION JULIO 2019.pdf" target="_blank"><i class="fa fa-circle-o"></i> Guía de Información</a></li>
			    <li><a href="7_GUIA/Documentos/MANUAL DE USUARIOS DE GUIA.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Usuario</a></li>
			    <li><a href="7_GUIA/Documentos/TIPIFICACION GUIA INFORMACION 104.pdf" target="_blank"><i class="fa fa-circle-o"></i> Tipificación de Guía</a></li>
			    <li><a href="7_GUIA/Documentos/MANUAL DE PROCEDIMIENTOS GUIA TELEFONICA 04_08_2020-PDF.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de procedimientos</a></li>
			    <li><a href="7_GUIA/Documentos/GUÍA TELEFÓNICA MATERIAL BPM3 OCT 2020 CAPACITACION.pptx"><i class="fa fa-circle-o"></i> Guía Telefónica</a></li>
			    <li><a href="7_GUIA/Documentos/PLANTILLA 116 GUIA - CNT_SAC_GUIA_SALA_V2 OCTUBRE 2020.xlsx"><i class="fa fa-circle-o"></i> Plantilla 116</a></li>
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

        <div class="modal fade" id="modal-CAPACITACIONES">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HORARIOS CAPACITACIONES GUÍA COMERCIAL AGOSTO! <i class="fa fa-warning bg-yellow (alias)"></i></h4>
              </div>
              <div class="modal-body">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="documentos/capacitaciones/GUÍA_104.jpg">
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
  
  function newland_3(){
	window.open("menu/configuraciones/Demo/newland_3.html", '_blank');
    window.focus();
  }
  
  function newland_4(){
	window.open("menu/configuraciones/Demo/newland_4.html", '_blank');
    window.focus();
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
    
    //temporal actvaciones sva
    

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