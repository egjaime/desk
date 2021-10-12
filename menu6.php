<?php
  //sleep(1);
  ini_set("session.cookie_lifetime","5400");
  ini_set("session.gc_maxlifetime","5400");
  session_start();
  include 'php/conexion_bd.php';
  
  if($_SESSION['servicio'] == "6" || $_SESSION['servicio'] == "0,1,2,3,4,5,6,7,8"  || $_SESSION['servicio'] == "5,6"){//valido si pertenece a esta campaña
  
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
              <i class="fa fa-commenting-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Omnicanal</li>

              
               <li>
                             
                <ul class="menu">
                  <li>
                    <a href="6_OCULTO/Documentos/plataforma omnicanal-soporte dth ocult-2.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Plataforma Omnicanal
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

        <li class="header">GESTION DIARIA</li>
			<li>
			  <a href="#" onclick="javascript:ctrl_menu_user_oculto();" id="btn_ges1">
				<i class="fa fa-indent"></i> <span>Gestión Diaria</span>
				<span class="pull-right-container">
				  <!-- <small class="label pull-right bg-green">new</small>  MENSAJE NUEVOOOOOO-->
				</span>
			  </a>
			</li>
			
		<li class="header">DESCARGAR</li>	
			<li>
			  <a href="#" onclick="javascript:descarga_ges_oculto_des();">
				<i class="fa fa-download"></i> <span>Descargar gestión</span>
				<span class="pull-right-container">
                  <span class="label label-primary pull-right" id="descargast"></span>
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


        <li class="header">CALIDAD</li>
        
        	<li class="treeview">
			  <a href="#">
				<i class="fa fa-cloud-download"></i> <span>Manuales</span>
				<span class="pull-right-container">
				    <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <li><a href="6_OCULTO/Documentos/MANUAL DE PROCEDIMIENTOS CAMPAÑA BACK OFFICE ACTIVACIONES DTH.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Procedimientos 1</a></li>
			    <li><a href="6_OCULTO/Documentos/MANUAL DE USUARIO DTH OCULTO FINAL - PARTE 1.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Procedimientos 2</a></li>
			    <li><a href="6_OCULTO/Documentos/MANUAL DE USUARIO DTH OCULTO FINAL - PARTE 2.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Procedimientos 3</a></li>
			    <li><a href="6_OCULTO/Documentos/PROCESOS LLAMADAS COLGADAS ICC.pdf" target="_blank"><i class="fa fa-circle-o"></i> Llamadas Colgadas</a></li>
			    <li><a href="6_OCULTO/Documentos/GUIA DE USUARIO INTERACTION CENTER.pdf" target="_blank"><i class="fa fa-circle-o"></i> Guía de Usuario IC</a></li>
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
        
        <div class="modal fade" id="modal-comandos">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Reportar Error en envío de comandos:</h4>
              </div>
              <div class="modal-body">
                  <div class="col-lg-1 col-xs-1">
                  </div>
                 <div class="col-lg-5 col-xs-8">
                     
					<div id="COM0" class="form-group">
						<label>*Cédula del cliente:</label>
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-user"></i>
							  </div>
							  <input type="text" class="form-control" id="COM-CED" onKeyPress="return soloNumeros(event)" maxlength="12" data-mask tabindex="0" >
							</div>
						<div id="COM0-0"></div>
					</div>
					
					<div id="COM2" class="form-group">
            			<label>*Provincia:</label>
            			<select id="COM-PROV" class="form-control select2" style="width: 100%;" data-mask tabindex="2">
            				<option selected="selected" value="" disabled>Seleccione..</option>
                            <option value="AZUAY">Azuay.</option>
                            <option value="BOLÍVAR">Bolívar.</option>
                            <option value="CAÑAR">Cañar.</option>
                            <option value="CARCHI">Carchi.</option>
                            <option value="CHIMBORAZO">Chimborazo.</option>
                            <option value="COTOPAXI">Cotopaxi.</option>
                            <option value="EL ORO">El Oro.</option>
                            <option value="ESMERALDAS">Esmeraldas.</option>
                            <option value="GALAPAGOS">Galápagos.</option>
                            <option value="GUAYAS">Guayas.</option>
                            <option value="IMBABURA">Imbabura.</option>
                            <option value="LOJA">Loja.</option>
                            <option value="LOS RIOS">Los Ríos.</option>
                            <option value="MANABI">Manabí.</option>
                            <option value="MORONA SANTIAGO">Morona Santiago.</option>
                            <option value="NAPO">Napo.</option>
                            <option value="ORELLANA">Orellana.</option>
                            <option value="PASTAZA">Pastaza.</option>
                            <option value="PICHINCHA">Pichincha.</option>
                            <option value="SANTA ELENA">Santa Elena.</option>
                            <option value="SANTO DOMINGO DE LOS TSACHILAS">Santo Domingo de los Tsáchilas.</option>
                            <option value="SUCUMBIOS">Sucumbíos.</option>
                            <option value="TUNGURAHUA">Tungurahua.</option>
                            <option value="ZAMORA CHINCHIPE">Zamora Chinchipe.</option>
            			</select>
            		    <div id="COM2-2"></div>
            		</div>
            		
            		<div id="COM4" class="form-group">
            			<label>*Modelo del Decodificador:</label>
            			<select id="COM-IDDEC" class="form-control select2" style="width: 100%;" data-mask tabindex="4">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="ECHOSTAR">Echostar.</option>
            				<option value="JIUZHOU DTS5422">Jiuzhou (Serie 18).</option>
            				<option value="JIUZHOU DTS6929">Jiuzhou (Serie 21).</option>
            				<option value="ZAPPER">Zapper.</option>
            				<option value="SAGEMCOM">Sagemcom.</option>
            				<option value="NEWLAND">Newland.</option>
            			</select>
            		    <div id="COM4-4"></div>
            		</div>
            		
            		<div id="COM6" class="form-group">
            			<label>*Estado Actual OPEN:</label>
            			<select id="COM-EDACT" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="ACTIVO">Servicio Activo.</option>
            				<option value="SUSPENDIDO">Servicio Suspendido.</option>
            			</select>
            		    <div id="COM6-6"></div>
            		</div>
					<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
                    </div>
                 </div>

                 <div class="col-lg-5 col-xs-8">
                     
                    <div id="COM1" class="form-group">
						<label>*Número Virtual:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="COM-NUMVIR" onKeyPress="return soloNumeros(event)" maxlength="9" data-mask tabindex="1" >
						</div>
						<div id="COM1-1"></div>
					</div>
                     
                    <div id="COM3" class="form-group">
						<label>*Serie del Deco:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-tv"></i>
						  </div>
					  <input type="text" class="form-control" id="COM-SERDE" onKeyPress="return soloNumeros(event)" maxlength="12" data-mask tabindex="3" >
						</div>
						<div id="COM3-3"></div>
					</div>
					            		
                    <div id="COM5" class="form-group">
            			<label>*Comando Enviado:</label>
            			<select id="COM-COMEN" class="form-control select2" style="width: 100%;" data-mask tabindex="5">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="REACTIVACION">Reactivación.</option>
            				<option value="REFRESH">Refresh.</option>
            				<option value="ACTIVACION CONTRATO">Activación de Contrato.</option>
            				<option value="CAMBIO DE EQUIPO">Cambio de Equipo.</option>
            				<option value="MIGRACION">Migración.</option>
            				<option value="ACTIVACION DECODIFICADOR">Activación de Decodificador.</option>
            			</select>
            		    <div id="COM5-5"></div>
            		</div>
            		
            		<div id="COM7" class="form-group">
            			<label>*¿Cliente desea retiro?:</label>
            			<select id="COM-RETIR" class="form-control select2" style="width: 100%;" data-mask tabindex="7">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="SI">Si.</option>
            				<option value="NO">No.</option>
            			</select>
            		    <div id="COM7-7"></div>
            		</div>

                 </div>
                    <table class="table text-center">
                	    <tr>
                        	<td width="49%">
                        	    <button type="button" id="limpiar_comandos" data-mask tabindex="15" onClick="ppv_coman1();" class="btn btn-info pull-center">Limpiar</button>
                        	    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                    			<button type="button" id="guardar_comandos" data-mask tabindex="15" onClick="ppv_coman2();" class="btn btn-info pull-center">Guardar</button>
                    		</td>
                		</tr>
                	</table> 

              </div>
              <div class="modal-footer">
                
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
        
        
                <div class="modal fade" id="modal-CAPACITACIONES">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HORARIOS CAPACITACIONES GUÍA COMERCIAL AGOSTO! <i class="fa fa-warning bg-yellow (alias)"></i></h4>
              </div>
              <div class="modal-body">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="documentos/capacitaciones/OCULTO.jpg">
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
    <strong>Impulsa SC &copy; 2019-2023 <a href="#">www.impulsasc.com</a></strong>
    
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
    
    
    //FUNCION TEMPORAL ERRORES DE COMANDO 
  
  function ppv_coman1(){
      if (confirm("\xbfBorrar registro? Se perderá la información.")){
         clean_command();
      }
  }  
  
  function clean_command(){
      document.getElementById("COM-CED").value="";
      document.getElementById("COM-PROV").value="";
      document.getElementById("COM-IDDEC").value="";
      document.getElementById("COM-EDACT").value="";
      
      document.getElementById("COM-NUMVIR").value="";
      document.getElementById("COM-SERDE").value="";
      document.getElementById("COM-COMEN").value="";
      document.getElementById("COM-RETIR").value="";
      
      //LIMPIO ERRORES
      document.getElementById("COM0").className = "form-group has-feedback";
      $('#COM0-0').hide().html('').fadeIn(500);
      
      document.getElementById("COM2").className = "form-group has-feedback";
      $('#COM2-2').hide().html('').fadeIn(500);
      
      document.getElementById("COM4").className = "form-group has-feedback";
      $('#COM4-4').hide().html('').fadeIn(500);
      
      document.getElementById("COM6").className = "form-group has-feedback";
      $('#COM6-6').hide().html('').fadeIn(500);
      
      //----------------

      document.getElementById("COM1").className = "form-group has-feedback";
      $('#COM1-1').hide().html('').fadeIn(500);
      
      document.getElementById("COM3").className = "form-group has-feedback";
      $('#COM3-3').hide().html('').fadeIn(500);
          	   
      document.getElementById("COM5").className = "form-group has-feedback";
      $('#COM5-5').hide().html('').fadeIn(500);
      
      document.getElementById("COM7").className = "form-group has-feedback";
      $('#COM7-7').hide().html('').fadeIn(500);
      
    } 
  
  function ppv_coman2(){
      
      // valido CEDULA
        
        if(document.getElementById("COM-CED").value === ""){
    	   document.getElementById("COM0").className = "form-group has-error";
    	   $('#COM0-0').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   COM0 = 1;
    	}else{
    	   document.getElementById("COM0").className = "form-group has-feedback";
    	   $('#COM0-0').hide().html('').fadeIn(500);
    	   COM0 = 0;
    	}
    	
    	// valido PROVINCIA
    	if(document.getElementById("COM-PROV").value === ""){
    	   document.getElementById("COM2").className = "form-group has-error";
    	   $('#COM2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione opción</span>').fadeIn(500);
    	   COM2 = 1;
    	}else{
    	   document.getElementById("COM2").className = "form-group has-feedback";
    	   $('#COM2-2').hide().html('').fadeIn(500);
    	   COM2 = 0;
    	}
    	
    	// valido MODELO DECO
    	if(document.getElementById("COM-IDDEC").value === ""){
    	   document.getElementById("COM4").className = "form-group has-error";
    	   $('#COM4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione opción</span>').fadeIn(500);
    	   COM4 = 1;
    	}else{
    	   document.getElementById("COM4").className = "form-group has-feedback";
    	   $('#COM4-4').hide().html('').fadeIn(500);
    	   COM4 = 0;
    	}
    	
    	// valido ESTADO ACTUAL
    	if(document.getElementById("COM-EDACT").value === ""){
    	   document.getElementById("COM6").className = "form-group has-error";
    	   $('#COM6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione opción</span>').fadeIn(500);
    	   COM6 = 1;
    	}else{
    	   document.getElementById("COM6").className = "form-group has-feedback";
    	   $('#COM6-6').hide().html('').fadeIn(500);
    	   COM6 = 0;
    	}
    	
    	// valido NUMERO VIRTUAL
    	if(document.getElementById("COM-NUMVIR").value === ""){
    	   document.getElementById("COM1").className = "form-group has-error";
    	   $('#COM1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   COM1 = 1;
    	}else{
    	   document.getElementById("COM1").className = "form-group has-feedback";
    	   $('#COM1-1').hide().html('').fadeIn(500);
    	   COM1 = 0;
    	}
    	
    	// valido SERIE DECODIFICADOR
    	if(document.getElementById("COM-SERDE").value === ""){
    	   document.getElementById("COM3").className = "form-group has-error";
    	   $('#COM3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   COM3 = 1;
    	}else{
    	   document.getElementById("COM3").className = "form-group has-feedback";
    	   $('#COM3-3').hide().html('').fadeIn(500);
    	   COM3 = 0;
    	}
    	
    	// valido COMANDO ENVIADO
    	if(document.getElementById("COM-COMEN").value === ""){
    	   document.getElementById("COM5").className = "form-group has-error";
    	   $('#COM5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione opción</span>').fadeIn(500);
    	   COM5 = 1;
    	}else{
    	   document.getElementById("COM5").className = "form-group has-feedback";
    	   $('#COM5-5').hide().html('').fadeIn(500);
    	   COM5 = 0;
    	}
    	
    	// valido RETIRO
    	if(document.getElementById("COM-RETIR").value === ""){
    	   document.getElementById("COM7").className = "form-group has-error";
    	   $('#COM7-7').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione opción</span>').fadeIn(500);
    	   COM7 = 1;
    	}else{
    	   document.getElementById("COM7").className = "form-group has-feedback";
    	   $('#COM7-7').hide().html('').fadeIn(500);
    	   COM7 = 0;
    	}
    	
    	//VALIDO QUE LOS CAMPOS ESTEN COMPLETADOS
    	var camp1 = document.getElementById("COM-CED").value;
    	var camp2 = document.getElementById("COM-PROV").value;
    	var camp3 = document.getElementById("COM-IDDEC").value;
    	var camp4 = document.getElementById("COM-EDACT").value;
    	
    	var camp5 = document.getElementById("COM-NUMVIR").value;
    	var camp6 = document.getElementById("COM-SERDE").value;
    	var camp7 = document.getElementById("COM-COMEN").value;
    	var camp8 = document.getElementById("COM-RETIR").value;
    	
    	var camp9 = 'DTH OCULTO';
    	
    	if(COM0 == 0 && COM1 == 0 && COM2 == 0 && COM3 == 0 && COM4 == 0 && COM5 == 0 && COM6 == 0 && COM7 == 0){
            if (confirm("\xbfContinuar y guardar?")){
              var dataString = 'a1=' + camp1 + '&a2=' + camp2 + '&a3=' + camp3 + '&a4=' + camp4 + '&a5=' + camp5 + '&a6=' + camp6 + '&a7=' + camp7 + '&a8=' + camp8 + '&a9=' + camp9;
              $.ajax({
                  type: 'POST',
                  url: 'php/val_ppvTmp4.php', 
                  data:  dataString,
                  success: function(x){
                      alert("Guardado con Éxito");
                      clean_command();
                      $('#modal-comandos').modal('hide');
                  }
              });

            }
        }    
              
              
    } 
  
  // FIN JS TEMPORAL ERRRORES DE COMANDO
    
  
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