<?php
  //sleep(1);
  ini_set("session.cookie_lifetime","5400");
  ini_set("session.gc_maxlifetime","5400");
  session_start();
  include 'php/conexion_bd.php';
  
  if($_SESSION['servicio'] == "1,2,3" || $_SESSION['servicio'] == "1"  || $_SESSION['servicio'] == "1,3" || $_SESSION['servicio'] == "1,4" || $_SESSION['servicio'] == "3,4" || $_SESSION['servicio'] == "1,2,3,4,5" || $_SESSION['servicio'] == "0,1,2,3,4,5,6,7,8" || $_SESSION['servicio'] == "1,7"){//valido si pertenece a esta campaña
  
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
    <a href="menu.php" class="logo">
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
        
        
         <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-info"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Cápsulas de información</li>
              <li>
                
                <ul class="menu">
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
  
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-cogs"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Herramientas</li>
              <li>
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
              
              <?php if($_SESSION['servicio'] == "0,1,2,3,4,5,6,7" || $_SESSION['servicio'] == "1,3" || $_SESSION['servicio'] == "3,4" || $_SESSION['servicio'] == "1,4" || $_SESSION['servicio'] == "1,7"){?>
              
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
			  
			  <?php } ?>
			  
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
			
			<li class="header">Cobranzas Transvial</li>
			
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-indent"></i> <span>Gestionar multas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_anadir_multa();"><i class="fa fa-circle-o"></i> Añadir Multa</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_modificar_multa();"><i class="fa fa-circle-o"></i> Modificar Multa</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_eliminar_multa();"><i class="fa fa-circle-o"></i> Eliminar Multa</a></li>
				<!--<li><a href="#"  onclick="javascript:ctrl_menu_unidas();"><i class="fa fa-circle-o"></i> NO USAR..</a></li>-->
			  </ul>
			</li>
			
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-info"></i> <span>Consultas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:gestion_asesores_transvial();"><i class="fa fa-circle-o"></i> Casos x asesor</a></li>
				<li><a href="#"  onclick="javascript:sin_gestion_asesores_transvial();"><i class="fa fa-circle-o"></i> Casos sin gestionar</a></li>
			  </ul>
			</li>
			

			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_trasnvial();"><i class="fa fa-circle-o"></i> Descargar Gestión</a></li>
			  </ul>
			</li>
            

			
            <li class="header">SOPORTE DTH</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<!--<li><a href="#"  onclick="javascript:ctrl_menu_sup_escalado2nv();"><i class="fa fa-circle-o"></i> Consultas Liga Pro</a></li> 
				<li><a href="#" onclick="javascript:ctrl_menu_sup_escaladovt();"><i class="fa fa-circle-o"></i> Super Copa Ecuador</a></li> -->
				<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionSVA2();"><i class="fa fa-circle-o"></i> Casos no atendidos</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionECDF();"><i class="fa fa-circle-o"></i> Activaciones ECDF - PPV</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_escalado2nv();"><i class="fa fa-circle-o"></i> Consultas SuperCopa</a></li>
			  	<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionSA();"><i class="fa fa-circle-o"></i> Llamadas sin audio</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionGE();"><i class="fa fa-circle-o"></i> Gestión de asesores</a></li>
			  </ul>
			  
			  
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i> <span>Manuales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

            <ul class="treeview-menu">
                <li><a href="documentos/manual_procedimiento/MANUAL DE PROCEDIMIENTOS CAMPAÑA DTH N1 18_11_2019-PDF.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Procedimientos</a></li>
                <li><a href="documentos/manual_procedimiento/ARBOL DE TIPIFICACIÓN DTH N1.pdf" target="_blank"><i class="fa fa-circle-o"></i> Árbol de Tipificaciones</a></li>
                <li><a href="documentos/manual_procedimiento/OBJECIONES-DTH.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manejo de Objeciones</a></li>
              </ul>

        </li>
        <li class="header">SOPORTE DTH OCULTO</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_sup_oculto();"><i class="fa fa-circle-o"></i> Descargar Gestión</a></li>
			  </ul>
			</li>
			
			<!-- 
        
        <li class="header">RETENCIÓN DTH Y TF</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_ret_new();"><i class="fa fa-circle-o"></i> Gestión de asesores</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_vir_new();"><i class="fa fa-circle-o"></i> Virtuales</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_car_new();"><i class="fa fa-circle-o"></i> Carterizados</a></li>
			  </ul>
			</li>
			
        <li class="header">RETENCIÓN INTERNET</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_ret_new();"><i class="fa fa-circle-o"></i> Gestión de asesores</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_vir_new();"><i class="fa fa-circle-o"></i> Virtuales</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_car_new();"><i class="fa fa-circle-o"></i> Carterizados</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_cie_new();"><i class="fa fa-circle-o"></i> Cierres IC-OPEN</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_bit_new();"><i class="fa fa-circle-o"></i> Entrantes - Sin alcance</a></li>
			  </ul>
			</li>
			
			 
		<li class="header">VENTAS ECDF</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_tmp_ecdf();"><i class="fa fa-circle-o"></i> Gestión de asesores</a></li>
			  </ul>
			</li>

        <li class="header">GUIA TELEFÓNICA</li>

		<li class="treeview">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i> <span>Manuales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

            <ul class="treeview-menu">
                <li><a href="documentos/manual_procedimiento/GUIA DE INFORMACION PRESENTACION JULIO 2019.pdf" target="_blank"><i class="fa fa-circle-o"></i> Guía de Información</a></li>
                <li><a href="documentos/manual_procedimiento/MANUAL DE USUARIOS DE GUIA.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Usuario</a></li>
            </ul>

        </li>
        
         
			<li class="header">RETENCIÓN</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_sup_escalado2nv();"><i class="fa fa-circle-o"></i> Gestión de asesores</a></li>
			  </ul>
			</li>

			<li class="header">SOPORTE COLEGA</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Descargas</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_sup_escalado2nv();"><i class="fa fa-circle-o"></i> Gestión de asesores</a></li>
			  </ul>
			</li>


             
        
			<li class="header">MISCELANEOS</li>
            <li><a href="#" onclick="javascript:ctrl_menu_cumples();">
				<i class="fa fa-birthday-cake"></i> <span>Cumplea&ntilde;os</span>
				<span class="pull-right-container">
				</span>
			  </a>
			</li>
			</li>
			  <li><a href="documentos/capsulas/DIRECTORIO ZONAS INTEGRALES.xlsx">
				<i class="fa fa-cog"></i> <span>Zonas Técnicas</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			
-->
        


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
  
<div class="modal fade" id="modal-linksGuia">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Guías Comerciales 2019-2020</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><b>2020</b></li>
                        
                        <ul>
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
        
        <div class="modal fade" id="modal-defaultAgencias_cierre">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="agencias_Z">
                            
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
            <a href="http://impulsasc.com/entrenamiento/index.php" target="_blank"">
              <i class="menu-icon fa fa-pencil bg-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Exámen Interno</h4>

                <p>Online..</p>
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
     
     //aqui comienza proceso emergente - eliminar
     
    $(function () {
    	//Datemask dd/mm/yyyy
       $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    	//Datemask2 mm/dd/yyyy
       $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
       //Money Euro
    	$('[data-mask]').inputmask()
  	})
     
     var camp8 = document.getElementById("provincia");
     
      function soloLetras(e) {
         tecla = (document.all) ? e.keyCode : e.which;
         if (tecla==8) return true;
            patron =/[A-Za-z\s]/;
            te = String.fromCharCode(tecla);
            return patron.test(te);
      }
     
      function OnClickCombo(){
	    var dataString = 'a1=' + camp8.value;
	     $.ajax({
    		type: 'POST',
    		url: 'php/user/escalarvt/cargar_list.php', 
    		data:  dataString, 
    		success: function(x){
    		    $('#charge_select2').hide().html(x).fadeIn(1);
         	}
		  });
	   }
	   
	   $('#charge_select2').hide().html('<select id="localidad" onchange="pro_localidad();" class="form-control select2" style="width: 100%;" data-mask tabindex="4"><option selected="selected" value="" disabled>Seleccione provincia..</option></select>').fadeIn(1);
     
     
    function pro_mail(valor){
      re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
      if(!re.exec(valor)){
         document.getElementById("id8_8").className = "form-group has-error";
         $('#id8-8').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Formato incorrecto</span>').fadeIn(500);
       }else{
         document.getElementById("id8_8").className = "form-group has-feedback";
         $('#id8-8').hide().html('').fadeIn(500);
       }
	}
     
    function send_eme(){
        
        var eme1;
        var eme2;
        var eme3;
        var eme4;
        var eme5;
        var eme6;
        var eme7;
        var eme8;
        var eme9;
        var eme10;
        
        //nombre
        if(document.getElementById("nombre").value == ""){
           document.getElementById("id1_1").className = "form-group has-error";
		   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique Nombres del Cliente/span>').fadeIn(500);
           eme1 = 1;
       }else{
           document.getElementById("id1_1").className = "form-group has-feedback";
		   $('#id1-1').hide().html('').fadeIn(500);
		   eme1 = 0;
       }
       
       //apellido
       if(document.getElementById("apellido").value == ""){
           document.getElementById("id2_2").className = "form-group has-error";
		   $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique Apellidos del Cliente</span>').fadeIn(500);
           eme2 = 1;
       }else{
           document.getElementById("id2_2").className = "form-group has-feedback";
		   $('#id2-2').hide().html('').fadeIn(500);
		   eme2 = 0;
       }
       
       //cedula
       if(document.getElementById("cedula").value == ""){
           document.getElementById("id3_3").className = "form-group has-error";
		   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique Cédula/RUC</span>').fadeIn(500);
           eme3 = 1;
       }else if(document.getElementById("cedula").value.length < 10){
    	   document.getElementById("id3_3").className = "form-group has-error";
    	   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Cédula/RUC incompleta</span>').fadeIn(500);
    	   eme3 = 1;
    	}else{
           document.getElementById("id3_3").className = "form-group has-feedback";
		   $('#id3-3').hide().html('').fadeIn(500);
		   eme3 = 0;
       }
       
       //provincia
       if(document.getElementById("provincia").value == ""){
           document.getElementById("id4_4").className = "form-group has-error";
		   $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione provincia</span>').fadeIn(500);
           eme4 = 1;
       }else{
           document.getElementById("id4_4").className = "form-group has-feedback";
		   $('#id4-4').hide().html('').fadeIn(500);
		   eme4 = 0;
       }
       
       //ciudad o localidad
       if(document.getElementById("localidad").value == ""){
           document.getElementById("id5_5").className = "form-group has-error";
		   $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione ciudad</span>').fadeIn(500);
           eme5 = 1;
       }else{
           document.getElementById("id5_5").className = "form-group has-feedback";
		   $('#id5-5').hide().html('').fadeIn(500);
		   eme5 = 0;
       }
       
       if(document.getElementById("correo").value == ""){
           document.getElementById("id8_8").className = "form-group has-error";
		   $('#id8-8').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique Correo Eléctronico</span>').fadeIn(500);
           eme8 = 1;
       }else{
          re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
          if(!re.exec(document.getElementById("correo").value)){
             document.getElementById("id8").className = "form-group has-error";
             $('#id8-8').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Formato incorrecto</span>').fadeIn(500);
             eme8 = 1;
          }else{
             document.getElementById("id8_8").className = "form-group has-feedback";
             $('#id8-8').hide().html('').fadeIn(500);
             eme8 = 0;
           }
       }
       
       //convenconal
       eme6 = 0;
       
       
        //celular
        if(document.getElementById("celular").value == ""){
           document.getElementById("id7_7").className = "form-group has-error";
		   $('#id7-7').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique Celular</span>').fadeIn(500);
           eme7 = 1;
       }else{
           document.getElementById("id7_7").className = "form-group has-feedback";
		   $('#id7-7').hide().html('').fadeIn(500);
		   eme7 = 0;
       }
       
       
        //producto
        if(document.getElementById("producto").value == ""){
           document.getElementById("id9_9").className = "form-group has-error";
		   $('#id9-9').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione producto</span>').fadeIn(500);
           eme9 = 1;
       }else{
           document.getElementById("id9_9").className = "form-group has-feedback";
		   $('#id9-9').hide().html('').fadeIn(500);
		   eme9 = 0;
       }
       
       //dummy
        if(document.getElementById("dummy").value == ""){
           document.getElementById("id10_10").className = "form-group has-error";
		   $('#id10-10').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique NS/Dummy</span>').fadeIn(500);
           eme10 = 1;
       }else{
           document.getElementById("id10_10").className = "form-group has-feedback";
		   $('#id10-10').hide().html('').fadeIn(500);
		   eme10 = 0;
       }
       
       
       //comienzo a validar que todos esten en 0. excepto el 6. eme
       
       if (eme1 == 0 && eme2 == 0 && eme3 == 0 && eme4 == 0 && eme5 == 0 && eme7 == 0 && eme8 == 0 && eme9 == 0 && eme10 == 0){

           var dataStringEme = 'a1=' + document.getElementById("nombre").value + '&a2=' + document.getElementById("apellido").value + '&a3=' + document.getElementById("cedula").value + '&a4=' + document.getElementById("provincia").value + '&a5=' + document.getElementById("localidad").value + '&a6=' + document.getElementById("convencional").value  + '&a7=' + document.getElementById("celular").value  + '&a8=' + document.getElementById("correo").value  + '&a9=' + document.getElementById("producto").value  + '&a10=' + document.getElementById("dummy").value  + '&a11=' + document.getElementById("observacion").value;
           if (confirm("\xbfContinuar y guardar?")){
               $.ajax({
    			 type: 'POST',
    			 url: 'php/asesores/emergente/emergente.php', 
    			 data:  dataStringEme, 
    			 success: function(x){
        			 if(x==1){
        			    document.getElementById("nombre").value = "";
        			    document.getElementById("apellido").value = "";
        			    document.getElementById("cedula").value = "";
        			    document.getElementById("provincia").value = "";
        			    document.getElementById("localidad").value = "";
        			    document.getElementById("convencional").value = "";
        			    document.getElementById("celular").value = "";
        			    document.getElementById("correo").value = "";
        			    document.getElementById("producto").value = "";
                        document.getElementById("dummy").value = "";
                        document.getElementById("observacion").value = "";
                        alert("Bitácora Guardada");
                        $('#modal-Emergente').modal('hide');
       				 }else if (x==7){
       				    $('#modal-Emergente').modal('hide');
       				    alert("Sesion caducada. Inicie sesion nuevamente.");
       				    self.location = "seleccion.php";
       				 }
             	 }
    		 });
           }
       }
       

       
    }//prncpal
     
     
     
     //aqui termina formulario proceso emergente - eliminar
     
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
        		url: 'charge.php', 
        		data:  dataString, 
        		success: function(x){
        		    document.getElementById('pomni').innerHTML = x;
        		}
        	});
        }
    </script>
    


 <script>
    $("#content1").load('5_ESPECIFICAS/imagen_inicio.html');
    
  function pro_cargaGHJ(){
	$("#costos").load('menu/capsulas/costos.php'); 
  }
  
  function pro_cargaY(){
	$("#agencias").load('menu/capsulas/agencias.php'); 
  }
  
   function pro_cargaZ(){
	$("#agencias_Z").load('menu/capsulas/agencias_cierre.php'); 
  }
  
  function pro_canales(){
	$("#canales").load('menu/capsulas/canales.php'); 
  }
  
  function pro_pendientes(){
	$("#carga").load('php/user/gestiondiaria/val_omni_pendientes.php'); 
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
	var tv2 = document.getElementById("tv2");
	var tv22 = document.getElementById("tv22");
	var tv3 = document.getElementById("ced-ret2");
    var dataString = 'a2=' + tv2.value + '&a3=' + tv22.value + '&a4=' + tv3.value;
    if (tv2.value == ""){
        alert("Seleccione, ¿Es caso conversión Zapper?");
    }else if (tv22.value == ""){
        alert("Seleccione, ¿Fue una consulta de Campeonato Nacional de Fútbol?");
    }else if (tv3.value == ""){
        alert("Indique cedula del cliente.");
    }else{
       if (confirm("\xbfContinuar y guardar?")){
    		$.ajax({
        		type: 'POST',
        		url: 'php/val_ppvTmp.php', 
        		data:  dataString, 
        		success: function(x){
        		    tv2.value = "";
        		    tv22.value = "";
        		    tv3.value = "";
            		alert("Guardado con Éxito");
            		$('#modal-pruebaPPV').modal('hide');
            		
                }
        	});
        }
    }
  }
  
    function delete_all() {
       if (confirm("\xbfLimpiar todos los campos?")){
           	var ret1 = document.getElementById("name-ret");
        	var ret2 = document.getElementById("nv-ret");
        	var ret3 = document.getElementById("plan-ret");
        	var ret4 = document.getElementById("ani-ret");
        	var ret5 = document.getElementById("ced-ret");
        	var ret6 = document.getElementById("con-ret");
        	var ret7 = document.getElementById("ben-ret");
        	var ret8 = document.getElementById("obs-ret");
            ret1.value = "";
        	ret2.value = "";
        	ret3.value = "";
        	ret4.value = "";
        	ret5.value = "";
        	ret6.value = "";
        	ret7.value = "";
        	ret8.value = "";
       }
    }
    
    function mostrar() {
       	plan1 = document.getElementById('plan-ret');
       	var ret7 = document.getElementById("ben-ret");
        o1 = document.getElementById('o1');
       	o2 = document.getElementById('o2');
       	o3 = document.getElementById('o3');
       	o4 = document.getElementById('o4');
       	o5 = document.getElementById('o5');
       	

        if (plan1.value == "SUPER SD 18,50$"){
            ret7.value = "";
            o1.style.display = '';
            o2.style.display = 'none';
            o3.style.display = 'none';
            o4.style.display = 'none';
            o5.style.display = 'none';
        }else if (plan1.value == "PAQUETE SD 20,50$") {
            ret7.value = "";
            o1.style.display = 'none';
            o2.style.display = '';
            o3.style.display = '';
            o4.style.display = '';
            o5.style.display = 'none';
        }else if (plan1.value == "PAQUETE HD 36$") {
            ret7.value = "";
            o1.style.display = '';
            o2.style.display = 'none';
            o3.style.display = 'none';
            o4.style.display = 'none';
            o5.style.display = '';
        }
    }


   function ret_dth(){
	var ret1 = document.getElementById("name-ret");
	var ret2 = document.getElementById("nv-ret");
	var ret3 = document.getElementById("plan-ret");
	var ret4 = document.getElementById("ani-ret");
	var ret5 = document.getElementById("ced-ret");
	var ret6 = document.getElementById("con-ret");
	var ret7 = document.getElementById("ben-ret");
	var ret8 = document.getElementById("obs-ret");
    
    if (ret1.value == "" || ret2.value == "" || ret3.value == "" || ret4.value == "" || ret5.value == "" || ret6.value == "" || ret7.value == ""){
        alert("Complete todos los campos");
    }else{
       var dataString33 = 'a1=' + ret1.value + '&a2=' + ret2.value + '&a3=' + ret3.value + '&a4=' + ret4.value + '&a5=' + ret5.value + '&a6=' + ret6.value + '&a7=' + ret7.value + '&a8=' + ret8.value;
       if (confirm("\xbfContinuar y guardar?")){
    		$.ajax({
        		type: 'POST',
        		url: 'php/val_ret_dth.php', 
        		data:  dataString33, 
        		success: function(x){
        		    ret1.value = "";
        		    ret2.value = "";
        		    ret3.value = "";
        		    ret4.value = "";
        		    ret5.value = "";
        		    ret6.value = "";
        		    ret7.value = "";
        		    ret8.value = "";
            		alert("Guardado con Éxito");
            		$('#modal-ret-ligapro').modal('hide');
            		
                }
        	});
        }
    }
  }

  //temporal SVA
  
	$(function () {
		//Datemask dd/mm/yyyy
		$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/aaaa' })
  })
  
  
    function send_amc(){
        
        if(document.getElementById("contrato_amc").value == ""){
           document.getElementById("amc1_1").className = "form-group has-error";
		   $('#amc1_2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique el contrato</span>').fadeIn(500);
           amc1 = 1;
       }else{
           document.getElementById("amc1_1").className = "form-group has-feedback";
		   $('#amc1_2').hide().html('').fadeIn(500);
		   amc1 = 0;
       }
       
       if(document.getElementById("cedula_amc").value == ""){
           document.getElementById("amc2_1").className = "form-group has-error";
		   $('#amc2_2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Indique la cédula</span>').fadeIn(500);
           amc2 = 1;
       }else{
           document.getElementById("amc2_1").className = "form-group has-feedback";
		   $('#amc2_2').hide().html('').fadeIn(500);
		   amc2 = 0;
       }
       
       if (amc1 == 0 && amc2 == 0){

           var dataStringAMC = 'a1=' + document.getElementById("contrato_amc").value + '&a2=' + document.getElementById("cedula_amc").value;
           if (confirm("\xbfContinuar y guardar?")){
               $.ajax({
    			 type: 'POST',
    			 url: 'php/asesores/amc/amc.php', 
    			 data:  dataStringAMC, 
    			 success: function(x){
        			 if(x==1){
                        document.getElementById("contrato_amc").value = "";
                        document.getElementById("cedula_amc").value = "";
                        alert("Bitácora Guardada");
                        $('#modal-AMC').modal('hide');
       				 }else if (x==7){
       				    $('#modal-AMC').modal('hide');
       				    alert("Sesion caducada. Inicie sesion nuevamente.");
       				    self.location = "seleccion.php";
       				 }
             	 }
    		 });
           }
       }//fin del if
        
        
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
    
    
    
    
    function send_tplus(){
  
        
       if(document.getElementById("t1_2").value == ""){
           document.getElementById("t1_1").className = "form-group has-error";
		   $('#t1_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           t1 = 1;
       }else{
           document.getElementById("t1_1").className = "form-group has-feedback";
		   $('#t1_3').hide().html('').fadeIn(500);
		   t1 = 0;
       }
       
       
       if(document.getElementById("datemask").value == ""){
           document.getElementById("t2_1").className = "form-group has-error";
		   $('#t2_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           t2 = 1;
       }else if(!/^[0-9\/]+$/.test(document.getElementById("datemask").value)){
		   document.getElementById("t2_1").className = "form-group has-error";
		   $('#t2_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Fecha incompleta/Incorrecta</span>').fadeIn(500);
           t2 = 1;
       }else{
           document.getElementById("t2_1").className = "form-group has-feedback";
		   $('#t2_3').hide().html('').fadeIn(500);
		   t2 = 0;
       }
       
       
       if(document.getElementById("t3_2").value == ""){
           document.getElementById("t3_1").className = "form-group has-error";
		   $('#t3_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           t3 = 1;
       }else{
           document.getElementById("t3_1").className = "form-group has-feedback";
		   $('#t3_3').hide().html('').fadeIn(500);
		   t3 = 0;
       }
       
       
       if(document.getElementById("t4_2").value == ""){
           document.getElementById("t4_1").className = "form-group has-error";
		   $('#t4_3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
           t4 = 1;
       }else{
           document.getElementById("t4_1").className = "form-group has-feedback";
		   $('#t4_3').hide().html('').fadeIn(500);
		   t4 = 0;
       }
       
       if (t1 == 0 && t2 == 0 && t3 == 0 && t4 == 0){
            //invierto fecha
                var dia = parseInt(document.getElementById("datemask").value.slice(0,2));
                var mes = parseInt(document.getElementById("datemask").value.slice(3,5));
                var anio = parseInt(document.getElementById("datemask").value.slice(-4));
                    
                var amd = anio + '-' + mes + '-' + dia;
           
           var dataString3 = 'a1=' + document.getElementById("t1_2").value + '&a2=' + amd + '&a3=' + document.getElementById("t3_2").value + '&a4=' + document.getElementById("t4_2").value + '&a5=' + document.getElementById("dirTP").value;
           if (confirm("\xbfContinuar y guardar?")){
               $.ajax({
    			 type: 'POST',
    			 url: 'php/asesores/total_plus/act_tplus.php', 
    			 data:  dataString3, 
    			 success: function(x){
        			 if(x==1){
        			    document.getElementById("t1_2").value = "";
                        document.getElementById("t3_2").value = "";
                        document.getElementById("t4_2").value = "";
                        document.getElementById("dirTP").value = "";
                        alert("Reclamo Registrado");
                        $('#modal-tp').modal('hide');
       				 }else if (x==7){
       				    $('#modal-tp').modal('hide');
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
  //$('#modal-INICIO').modal('show');
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
			echo '<script language =  javascript>  alert("Usuario Bloqueado, contacte al administrador"); self.location = "../index.php"; </script>';
		}
	}else{
	   echo '<script language =  javascript>  self.location = "../index.php" </script>';
	}
	
  }else{
        echo '<script language =  javascript>  alert("Sesión Caducada. Ingrese nuevamente"); self.location = "seleccion.php"; </script>';
  }
	
	mysqli_close($enlace);
?>