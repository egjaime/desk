<?php
  //sleep(1);
  ini_set("session.cookie_lifetime","5400");
  ini_set("session.gc_maxlifetime","5400");
  session_start();
  include 'php/conexion_bd.php';
  
  if($_SESSION['servicio'] == "1,3,5" || $_SESSION['servicio'] == "1"  || $_SESSION['servicio'] == "1,3" || $_SESSION['servicio'] == "1,4" || $_SESSION['servicio'] == "1,5" || $_SESSION['servicio'] == "1,2,3,4,5" || $_SESSION['servicio'] == "0,1,2,3,4,5,6,7,8" || $_SESSION['servicio'] == "1,7"){//valido si pertenece a esta campaña
  
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
        
        <!--
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-soccer-ball-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Archivo</li>
              

               <li>
                <ul class="menu">
                  <li>
                    <a href="#"  data-toggle="modal" data-target="#modal-conmebol">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Eliminatorias Conmebol 2021
                      </h4>
                      <p>Ver detalles</p>
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
              <i class="fa fa-home"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Info Impulsa</li>
              <!--
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
              -->
              
              
              
               <li>
                <ul class="menu">
                  <li>
                     <a href="documentos/capacitaciones/Programaciòn de Carga de Valores.pdf" target="_blank">

                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Carga de Valores
                      </h4>
                      <p>Ver procedimiento</p>
                    </a>
                  </li>
                </ul>
              </li>
              

              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
   


        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-building-o"></i>
              <span class="label label-success">2</span>
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
                    <a href="documentos/agencias/Listado de centros de atencion al 16-03-2021.pdf" target="_blank">
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

          
          
          
         <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-exclamation-triangle"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Bitácora Coactivas</li>
              
               <li>
                             
                <ul class="menu">
                  <li>
                    <a href="#"  data-toggle="modal" data-target="#modal-coactivas">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Procesos Emergentes
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                   
                </ul>
              </li>
              
              <li>
                <ul class="menu">
                  <li>
                    <a href="documentos/manual_procedimiento/CUENTAS BANCARIAS EXTRAJUDICIAL Y COACTIVAS.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Cuentas Bancarias
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              
              <li>
                             
                <ul class="menu">
                  <li>
                    <a href="documentos/emergentes/CAMBIO DE FORMA DE PAGO.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Cambio forma de pago
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                   
                </ul>
              </li>
              
               <li>
                <ul class="menu">
                  <li>
                    <a href="documentos/emergentes/Devolucion Interés por Mora- Servicios CNT.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Devolución Intereses por Mora
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
              <i class="fa fa-bell-o"></i>
              <span class="label label-success">5</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Contingencia CNT - COVID19</li>
              
              <li>
                             
                <ul class="menu">
                    

                    
                   <li>
                    <a href="documentos/capsulas/Validaciones_retencion.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Validaciones Retención
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                    
                  <li>
                    <a href="documentos/promociones/TIPOS DE DEUDA Y FORMAS DE PAGO.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Deudas y Formas de Pago
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                    
                  <li>
                    <a href="documentos/promociones/Boton_de_pagos.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Botón de Pagos (Actualizado)
                      </h4>
                      <p>Ver detalle</p>
                    </a>
                  </li>
                   
                </ul>
              </li>
              
              <li>
                <!-- inner menu: contains the actual data -->                
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#"  data-toggle="modal" data-target="#modal-recaudacion2">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Cambio forma de pago DTH N1
                      </h4>
                      <p>Ver Procedimiento</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              
               <li>
                <!-- inner menu: contains the actual data -->                
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#"  data-toggle="modal" data-target="#modal-recaudacion">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Bancos y Tarjetas Recaudadoras
                      </h4>
                      <p>Ver promoción</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              

              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>

          

          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-commenting-o"></i>
              <span class="label label-success">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Scripts CNT</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                   <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript">
                      <i class="fa fa-commenting-o text-aqua"></i> Script de Bienvenida
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScriptD">
                      <i class="fa fa-commenting-o text-yellow"></i> Script de Despedida
                    </a>
                  </li>

                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript3">
                      <i class="fa fa-commenting-o text-pink"></i> Script Sin Audio
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript7">
                      <i class="fa fa-commenting-o text-aqua"></i> Script LLuvia/Tormenta Solar
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript1">
                      <i class="fa fa-commenting-o text-yellow"></i> Script de Escalamiento
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript2">
                      <i class="fa fa-commenting-o text-red"></i> Script Escalamiento VT
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript6">
                      <i class="fa fa-commenting-o text-green"></i> Script No validación de datos
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript4">
                      <i class="fa fa-commenting-o text-aqua"></i> Script para Usuario Difícil
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript8">
                      <i class="fa fa-commenting-o text-aqua"></i> Script para Caida de Sistemas
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultScript9">
                      <i class="fa fa-commenting-o text-yellow"></i> Otros Scripts..
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
              <span class="label label-success">8</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Cápsulas de información</li>
              <li>
                
                <ul class="menu">
                    <!-- 
                    <li>
                        <a href="#" onClick="pro_cargaY();" data-toggle="modal" data-target="#modal-defaultAgencias">
                    <i class="fa fa-info text-red"></i> Agencias PRUEBA
                               </a>
                    </li>
                    -->
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-linksGuia">
                      <i class="fa fa-info text-aqua"></i> Guías Comerciales
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultRetencion">
                      <i class="fa fa-info text-red"></i> Retención
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultTraslados">
                      <i class="fa fa-info text-green"></i> Traslados
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultCiclos">
                      <i class="fa fa-info text-aqua"></i> Ciclos de Facturación
                    </a>
                  </li>
                  <li>
                    <a href="#" onClick="pro_cargaGHJ();" data-toggle="modal" data-target="#modal-defaultCostos">
                      <i class="fa fa-info text-red"></i> Costos
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#modal-defaultRechazos">
                      <i class="fa fa-info text-green"></i> Códigos de Rechazos
                    </a>
                  </li>
                  <li>
                    <a href="#" onClick="pro_canales();" data-toggle="modal" data-target="#modal-defaultCanales">
                      <i class="fa fa-info text-pink"></i> Canales
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Cápsulas</a></li>
            </ul>
          </li>


          
          
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-check-square-o"></i>
              <span class="label label-success">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Información del mes</li>
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#" data-toggle="modal" data-target="#modal-defaultCanalesN2">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Cambio de canal - RT
                      </h4>
                      <p>Ver detalles</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
 
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#" data-toggle="modal" data-target="#modal-defaultCanalesN">
                      <div class="pull-left">
                        <img src="assets/img/cnt_logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Cambio de canales - TELEVISA
                      </h4>
                      <p>Ver detalles</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              


              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          
          
          
          

          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-success">3</span>
            </a>
			
			
            <ul class="dropdown-menu">
              <li class="header">Promociones del Mes - DTH</li>
              
                <li>
                <!-- inner menu: contains the actual data -->                
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#"  data-toggle="modal" data-target="#modal-promoAdic">
                      <div class="pull-left">
                        <img src="assets/img/promo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Decos Adicionales
                      </h4>
                      <p>Ver promoción</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              

              <li>
                <!-- inner menu: contains the actual data -->                
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#"  data-toggle="modal" data-target="#modal-default">
                      <div class="pull-left">
                        <img src="assets/img/promo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Cero Costo de Instalación
                      </h4>
                      <p>Ver promoción</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              
              
              <li>
             
                <ul class="menu">
                  <li>
                    <a href="documentos/capsulas/Conversión a Zapper.pdf" target="_blank">
                      <div class="pull-left">
                        <img src="assets/img/promo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Conversión Zapper
                      </h4>
                      <p>Ver detalles</p>
                    </a>
                  </li>

                </ul>
              </li>
             
			  <!-- aqui va otra informacion -->
			  
              <li class="footer"><a href="#"></a></li>
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
                    <!--
                   <li>
                    <a href="#" onclick="javascript:IrCitrix();" class="dropdown-toggle" data-toggle="dropdown" title="Solicitar Citrix">
                      <i class="fa fa-share-alt text-red"></i> Solicitar cuenta Citrix
                    </a>
                  </li>
                  -->
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
			  <a href="#" onclick="javascript:ctrl_menu_user_gd();" id="btn_ges">
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
				<i class="fa fa-server"></i> <span>Bitácoras</span>

				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				  <!--<small class="label pull-right bg-green">Nuevo</small>-->
				</span>
			  </a>
			  <ul class="treeview-menu">
			    <!--<li><a href="#" data-toggle="modal" data-target="#modal-AMC"><i class="fa fa-circle-o"></i> Consultas canal AMC (505)</a></li>-->
				<li><a href="#" data-toggle="modal" data-target="#modal-SVA"><i class="fa fa-circle-o"></i> Activaciones SVA</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-pruebaPPV2"><i class="fa fa-circle-o"></i> Casos No Atendidos</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-pruebaPPV3"><i class="fa fa-circle-o"></i> ECDF y PPV<small class="label pull-right bg-yellow">Nuevo</small></a></li>
				<!--<li><a href="#" data-toggle="modal" data-target="#modal-pruebaPPV"><i class="fa fa-circle-o"></i> Consultas SuperCopa<small class="label pull-right bg-yellow">Nuevo</small></a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal-comandos"><i class="fa fa-circle-o"></i> Consultas Liga Pro<small class="label pull-right bg-yellow">Nuevo</small></a></li>-->
			  </ul>
			</li>
			

			
            <!--
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-edit"></i> <span>Escalar</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="#"  onclick="javascript:ctrl_menu_user_escalado();"><i class="fa fa-circle-o"></i> Nivel 2</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_user_escaladovt();"><i class="fa fa-circle-o"></i> Visita Técnica</a></li>
				<li><a href="#"  onclick="javascript:ctrl_menu_user_escaladoCNTPlay();"><i class="fa fa-circle-o"></i> CNT Play</a></li>
			  </ul>
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
			    <li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionGE1();"><i class="fa fa-circle-o"></i> Mi gestión</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionSA1();"><i class="fa fa-circle-o"></i> Llamadas Sin Audio - Caidas</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionSVA1();"><i class="fa fa-circle-o"></i> Activaciones SVA</a></li>
				<li><a href="#" onclick="javascript:ctrl_menu_sup_export_gestionPPV8();"><i class="fa fa-circle-o"></i> Activaciones ECDF-PPV </a></li>
			  </ul>
			</li>
			

			<li class="header">SOPORTE</li>
			
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


        
        <li class="header">CALIDAD</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i> <span>Manuales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> DTH
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
			  
              <ul class="treeview-menu">
                <li><a href="documentos/manual_procedimiento/MANUAL DE PROCEDIMIENTOS CAMPAÑA DTH N1 12_01_2021-PDF.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Procedimientos</a></li>
                <li><a href="documentos/manual_procedimiento/ARBOL DE TIPIFICACIÓN DTH N1.pdf" target="_blank"><i class="fa fa-circle-o"></i> Árbol de Tipificaciones</a></li>
                <li><a href="documentos/manual_procedimiento/OBJECIONES-DTH.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manejo de Objeciones</a></li>
              </ul>
			  
            </li>
			
			<li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> GUIA
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
			  
              <ul class="treeview-menu">
                <li><a href="documentos/manual_procedimiento/GUIA DE INFORMACION PRESENTACION JULIO 2019.pdf" target="_blank"><i class="fa fa-circle-o"></i> Guía de Información</a></li>
                <li><a href="documentos/manual_procedimiento/MANUAL DE USUARIOS DE GUIA.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Usuario</a></li>
              </ul>
			  
            </li>

          </ul>
        </li>


		<?php } ?>
		
		<?php if($_SESSION['nivel'] == "2"){?>		  
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
			
			<li class="header">CALIDAD</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i> <span>Manuales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> DTH
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
			
			<li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> GUIA
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
			  
              <ul class="treeview-menu">
                <li><a href="documentos/manual_procedimiento/GUIA DE INFORMACION PRESENTACION JULIO 2019.pdf" target="_blank"><i class="fa fa-circle-o"></i> Guía de Información</a></li>
                <li><a href="documentos/manual_procedimiento/MANUAL DE USUARIOS DE GUIA.pdf" target="_blank"><i class="fa fa-circle-o"></i> Manual de Usuario</a></li>
              </ul>
			  
            </li>

          </ul>
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
                <h4 class="modal-title">Cero costo de Instalación (promoción válida desde: 01/06/2020 al 30/09/2020)</h4>
              </div>
              <div class="modal-body">
                  <img src="documentos/promociones/promoCero.JPG">
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
        
          <div class="modal fade" id="modal-cnt-barsa">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Promoción CNT-Barcelona</h4>
              </div>
              <div class="modal-body">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a title="Promoción CNT - Barcelona" href="https://entrenamientocomercial.cnt.gob.ec/biblioteca-virtual/cnt-y-barcelona-se-unen-para-brindar-a-nuestros-clientes-la-mejor-experiencia/#1582830144260-568838f2-c8d8" target="_blank"><img src="assets/img/promo-cnt-barsa.jpg" alt="CNT" /></a>
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
        
        
        <div class="modal fade" id="modal-INICIO">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">RECUERDA! <i class="fa fa-warning bg-yellow (alias)"></i></h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li><b>Comentarios para registro en Omnicanal de los clientes con intención de retiro:</b>.</li>
                       <ul>
                           <li>ACEPTA BENEFICIO POR CC / COMPENSACIÓN FOX PREMIUM</li>
                           <li>ACEPTA BENEFICIO POR CC / COMPENSACIÓN 50% X DOS MESES</li>
                           <li>ACEPTA BENEFICIO POR CC / COMPENSACIÓN 50% X TRES MESES</li>
                           <li>ACEPTA BENEFICIO POR CC / COMPENSACIÓN 100% X DOS MESES</li>
                           <li>ACEPTA BENEFICIO POR CC / COMPENSACIÓN 50% X SEIS MESES</li>
                       </ul>
                    </ul>
                    <ul>
                       <li>Horario especial de Retención, Sábado 16 y Domingo 17 <b>de 7:00 a 21:00</b>.</li>
                    </ul>
                  <ul>
                       <li><b><em><u>"Estimado cliente, debido a incumplimientos a nivel contractual por parte de GOL TV, CNT NO transmitira los partidos del Campeonato Nacional de Fútbol. Pedimos disculpas por las molestias causadas. Estamos tratando de resolver este inconveniente con GOL TV. Agradecemos su lealtad y confianza."</u></em></b></li>
                    </ul>
                    <ul>
                       <li><b>En caso de consulta el PIR de carga en Omnicanal es: CONSULTA - COMERCIAL - SERVICIOS ADICIONALES. y en el comentario colocar textualmente: <em><u>"No transmisión campeonato ecuatoriano por imcumplimiento de contrato GOL TV".</u></em></b></li>
                    </ul>
                    <ul>
                       <li><b>En caso de ingresar queja por retiro del servicio por la no transmisión del campeonato nacional de Fútbol se debe colocar el siguiente comentario: <em><u>"Cliente solicita el retiro de servicio por no transmisión Campeonato Ecuatoriano por incumplimiento del contrato GOL TV".</u></em></b></li>
                    </ul>
                  <ul>
                       <li>El horario de atención de <b>INTERNET BAF</b> es de 7:00 A 21:00.</li>
                    </ul>
                    <ul>
                       <li>El horario de atención de <b>SMA</b> es de 24 horas.</li>
                    </ul>
                  <ul>
                       <li>Recuerda indicar el nuevo <b>Script de despedida</b>: <a href="#" data-toggle="modal" data-target="#modal-defaultScriptD">Ver Script</a>.</li>
                    </ul> 
                   <ul>
                       <li>El horario de atención de <b>VENTAS</b> es de <b>7:00 a 20:00</b>. Fuera de ese horario no se podrá realizar transferencias y se debe crear caso correspondiente a través de Omnicanal.</li>
                    </ul> 
                    
                    <ul>
                       <li><b>NUEVOS VDN PARA TRANSFERENCIA:</b></li>
                       <ul>
                           <li> Ventas Internet: <b>50004</b></li>
                           <li> Ventas Móvil: <b>50005</b></li>
                           <li> Ventas DTH: <b>50006</b></li>
                       </ul>
                    </ul>
                    <ul>
                       <li>El Canal 14 <b>Max TV Online</b> desde ahora se encuentra disponible en la oferta básica.<small class="label pull-right bg-yellow">NUEVO</small></li>
                       <li>El Canal 60 <b>Baby TV</b> desde ahora se encuentra disponible en la oferta básica.</li>
                       <li>El Canal 160 <b>INTI</b> ya <b>NO</b> forma parte de la señal de CNT-TV.</li>
                       <li>El Canal 505 <b>AMC</b> pasa a ser parte del plan <b>Total Plus</b>.</li>
                       <li>El Canal 61 <b>CLAN</b> ya <b>NO</b> forma parte de la señal de CNT-TV.</li>
                       <li>El Canal 150 <b>Food Network</b> es la nueva señal del <b>Plan Básico</b>.</li>
                    </ul>
                    <ul>
                       <li><b>PROMOCIONES AGOSTO:</b>&nbsp;&nbsp;<small class="label pull-rigth bg-yellow">ACTUALIZACIÓN</small></li>
                       <ul>
                           <li> 50% de descuento en decos adicionales por 3 meses.</li>
                           <li> 0$ costo de instalación si se instala al menos un deco adicional.</li>
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
        
        
        <div class="modal fade" id="modal-CAPACITACIONES">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HORARIOS CAPACITACIONES GUÍA COMERCIAL AGOSTO! <i class="fa fa-warning bg-yellow (alias)"></i></h4>
              </div>
              <div class="modal-body">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="documentos/capacitaciones/DTH_N1.jpg">
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
        
        
        
        
        
        <div class="modal fade" id="modal-promoAdic">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">50% de descuento en decodificadores adicionales (promoción válida desde: 01/06/2020 al 30/09/2020)</h4>
                
              </div>
              <div class="modal-body">
                  <img src="documentos/promociones/promoAdic.JPG">
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
        
        <div class="modal fade" id="modal-recaudacion">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Bancos y tarjetas recaudadoras</h4>
              </div>
              <div class="modal-body">
                  <img src="documentos/capsulas/recaudadora1.png">
                  <p></p>
                  <img src="documentos/capsulas/recaudadora2.png">
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
        
        
        <div class="modal fade" id="modal-recaudacion2">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Proceso DTH N1 Cambio forma de pago</h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li><i><strong>INICIO Y FIN: </strong>16 DE MARZO AL 16 DE JUNIO 2020. </i></li>
                       <li><i><strong>BENEFICIOS: </strong></i></li>
                       <ul>
                           <li><i><strong>TELEFONÍA E INTERNET: </strong>50% DE DESCUENTO EN LA PENSIÓN BÁSICA DE INTERNET FIJO O TELEFONÍA FIJA POR UN MES. </i></li>
                           <li><i><strong>TV SATELITAL: </strong>APERTURA DE GRILLA DEL PLAN TOTAL PLUS POR UN MES. SI YA TIENE CONTRATADO EL PAQUETE SE LE HARÁ EL DESCUENTO POR ESE MES ÚNICAMENTE.</i></li>
                           <li><i>EL BENEFICIO APLICA PARA NUEVAS FORMA DE PAGO. CAMBIO A OTRA CUENTA BANCARIA O TARJETA DE CRÉDITO. </i></li>
                       </ul>
                       <li><i><strong>CONDICIONES: </strong></i></li>
                       <ul>
                           <li><i>ANTIGÜEDAD CON EL O LOS SERVICIOS MINÍMO DE 3 MESES.</i></li>
                           <li><i>SOLO CONVIVE CON 360, RESTANDO DEL 50% DE DESCUENTO DE LA CAMPAÑA EL DESCUENTO CORRESPONDIENTE A 360 (10% O 15%).</i></li>
                           <li><i>SOLO CLIENTES QUE TENGAN CONTRATADO UNO DE LOS SIGUIENTES PLANES EN TELEFONIA FIJA: </i></li>
                           <p></p>
                       </ul>
                       <img src="documentos/capsulas/proceso1.png">
                       <p></p>
                       <li><i><strong>RESTRICCIONES: </strong></i></li>
                       <ul>
                           <li><i>NO APLICA PARA CLIENTES CON DESCUENTO DE 3RA EDAD Y PLAN DISCAPACIDAD. SOLO CONVIVE CON 360.</i></li>
                           <li><i>NO APLICA PARA LA PROVINCIA DE GALÁPAGOS.</i></li>
                           <li><i>NO APLICA PARA CLIENTES CON PLAN DE INTERNET COBRE $6,20 ONLY QUE NO HAYAN CANCELADO COSTO DE INSCRIPCIÓN. INSCRIPCIÓN EN COBRE: 60 + IMP.</i></li>
                           <li><i>NO CONVIVE CON NINGUNA OTRA PROMOCIÓN OTORGADA PARA LOS SERVICIOS DE TELEFONÍA E INTERNET; POR EJEMPLO, PROMOCIÓN CAMBIO DE PROVEEDOR, AUMENTO DE VELOCIDAD, DESCUENTO EMPLEADO PÚBLICO.</i></li>
                           <li><i>PERMANENCIA MÍNIMA DE 3 MESES CON EL SERVICIO.</i></li>
                           <p></p>
                       </ul>
                       <li><i><strong>PROCESO A SEGUIR EN DTH N1: </strong></i></li>
                       <ul>
                           <p></p>
                           <li><i><strong>VALIDACIONES (OPEN): </strong></i></li>
                           <ul>
                               <li><i>EL TITULAR DEL SERVICIO DEBE SER EL TITULAR DE LA CUENTA O TARJETA.</i></li>
                               <li><i>QUE EL CONTRATO ESTÉ ACTIVO (ATCDTH).</i></li>
                               <li><i>QUE ESTÉ AL DIA EN PAGOS (FOES- ACMT).</i></li>
                               <li><i>VERIFICAR LA FORMA DE PAGO (FSUS).</i></li>
                               <li><i>INFORMAR AL CLIENTE QUE DEBE INGRESAR A LA PÁGINA DE CNT WWW.CNT.GOB.EC IR AL ENLACE DOCUMENTOS DE DESCARGA Y ABRIR EL FORMULARIO AUTORIZACIÓN DE DÉBITO, LLENAR, FIRMAR Y ESCANAER CONJUNTAENTE CON LA CÉDULA DE IDENTIDAD.</i></li>
                               <li><i>INFORMAR AL CLIENTE QUE DEBE ENVIAR LOS DOCUMENTOS ESCANEADOS A LA CUENTA DE CORREO tramites.n2@hotmail.com Y SOLICITAR OBLIGATORIAMENTE LA DIRECCIÓN DE CORREO ELÉCTRONICO DESDE DONDE ENVIARÁ LOS DOCUMENTOS.</i></li>
                               <li><i>REALIZAR EL ESCALAMIENTO POR OMNICANAL:</i></li>
                               <ul>
                                   <li><i>RUTA:</i></li>
                               </ul>
                               <p></p>
                               <img src="documentos/capsulas/proceso2.png">
                               <p></p>
                               <ul>
                                   <li><i>CAMPO DE OBSERVACION:</i></li>
                                   <ul>
                                       <li><i>DEJAR PLASMADO NOMBRES DEL TITULAR.</i></li>
                                       <li><i>CAMBIO DE MEDIO DE PAGO (A QUE SERVICIO).</i></li>
                                       <li><i>TELÉFONOS DE CONTACTOS.</i></li>
                                       <li><i>DIRECCIÓN DE CORREO DE DONDE ENVIARÁ LA INFORMACIÓN (FORMULARIO Y COPIA DE CÉDULA).</i></li>
                                   </ul>
                               </ul>
                               <p></p>
                               <li><i><STRONG>SCRIPT ESTABLECIDO:</STRONG></i></li>
                               <ul>
                                   <li><i><STRONG>“SR/A. APELLIDO, LE INFORMAMOS QUE SU CASO SERÁ ATENDIDO EN EL LAPSO DE 24 HORAS, PARA SEGUIMIENTO A SU PETICIÓN, FAVOR TOME NOTA DEL TICKET ASIGNADO, EN CASO DE NO CONTAR CON LA DOCUMENTACIÓN SOLICITADA EN EL TIEMPO INDICADO SE PROCEDERÁ CON EL CIERRE DEL TICKET Y DEBERÁ COMUNICARSE NUEVAMENTE PARA REGISTRAR LA SOLICITUD”</STRONG></i></li>
                                </ul>
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
        
        <div class="modal fade" id="modal-coactivas">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Proceso Emergentes</h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li>Recuerda la normativa legal haciendo <a href="documentos/emergentes/NORMATIVA LEGAL.pdf" target="_blank">Clic aquí.</a></li>
                       <li>Proceso Cartera Temprana <a href="documentos/emergentes/PROCESO CARTERA TEMPRANA.pdf" target="_blank">Clic aquí.</a></li>
                       <li>Proceso Cartera Extrajudicial <a href="documentos/emergentes/PROCESO CARTERA EXTRAJUDICIAL.pdf" target="_blank">Clic aquí.</a></li>
                       <li>Proceso Cartera Coactiva <a href="documentos/emergentes/PROCESO CARTERA COACTIVA.pdf" target="_blank">Clic aquí.</a></li>
                       <li><b>Cargar Bitácora</b> <a href="#" data-toggle="modal" data-target="#modal-Emergente"> Clic aquí.</a></li>
                       
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
        
        <!------------------- /.inicio informacion conmebol ------------------>
        
        <div class="modal fade" id="modal-conmebol">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Jornada Eliminatoria Conmebol Junio 2021</h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li>Todos los Partidos: <a href="#" data-toggle="modal" data-target="#modal-conmebol1"> Clic aquí.</a></li>
                       <li>PPV Partidos de Ecuador: <a href="#" data-toggle="modal" data-target="#modal-conmebol2"> Clic aquí.</a></li>
                       <li>El Canal del Fútbol: <a href="#" data-toggle="modal" data-target="#modal-conmebol3"> Clic aquí.</a></li>
                       <li>Proceso de activación en OPEN: <a href="#" data-toggle="modal" data-target="#modal-conmebol4"> Clic aquí.</a></li>
                       <li><b>Script de cierre: </b> <a href="#" data-toggle="modal" data-target="#modal-conmebol5"> Clic aquí.</a></li>
                       
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
        
        
        <div class="modal fade" id="modal-conmebol1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Juegos eliminatorias: <b> Fechas 7 y 8</b> </h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <img src="documentos/img/juegos conmebol 2.jpg" width="400" height="400">
                       <img src="documentos/img/juegos conmebol 1.jpg" width="400" height="400">
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
        
        
        <div class="modal fade" id="modal-conmebol2">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">PPV Partidos de la selección de Ecuador: </h4>
              </div>
              <div class="modal-body">
                    <ul>
                      
                       <li><i><b> Brasil vs Ecuador</b>: Viernes 04 de Junio de 2021.</i></li>
                       <li><i><b> Ecuador vs Perú</b>: Martes 08 de Junio de 2021.</i></li>
                        <p></p>
                       <li><i> Costo por partido: <b>10$</b> incluidos impuestos. </i></li>
                       <li><i><b> Transmisión por los canales</b>: <b> 300 SD </b> y <b> 700 HD </b>.</i></li>
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
        
        
        <div class="modal fade" id="modal-conmebol3">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Transmisión por El Canal de Fútbol</h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li><i><b> TODOS LOS PARTIDOS DISPONIBLES POR EL PLAN CANAL DEL FÚTBOL: </b></i></li>
                       <p></p>
                       <li><i><b> Canal 3 SD </b></i></li>
                       <li><i><b> Canal 333 SD </b></i></li>
                       <li><i><b> Canal 777 HD </b></i></li>
                       <li><i><b> Canal 305 SD en Galápagos (oferta residencial masiva pospago) </b></i></li>
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
        
        
        <div class="modal fade" id="modal-conmebol4">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Proceso activación en OPEN:</h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li><i><b>Automático</b>, activación código venta PLAN ECDF (cód. 256) disponible en transaccional. Recordar que para el presente mes, se encuentra habilitada la promoción con el 50% de descuento con activación Cod. 260.</i></li>
                       <p> </p>    
                       <li><i>Código de venta <b>Brasil vs Ecuador</b> PPV:  <b> 75</b></i></li>
                       <img src="documentos/img/open1.jpg" width="600" height="250">
                       <p> </p> 
                       <li><i>Código de venta <b>Ecuador vs Perú</b> PPV:  <b> 76</b></i></li>
                       <img src="documentos/img/open2.jpg" width="600" height="250">
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
        
        
        <div class="modal fade" id="modal-conmebol5">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script de cierre de llamadas: </h4>
              </div>
              <div class="modal-body">
                    <ul>
                       <li><i><b>“Estimado cliente, antes de finalizar CNT lo invita a disfrutar de la nueva programación deportiva premium con nuestro paquete EL CANAL DEL FÚTBOL, en Mayo usted podrá obtener el 50% de descuento y 24 horas de programación. Lo invitamos a disfrutar del partido de Ecuador VS Brasil, y Ecuador Vs Perú, en el mes de Junio a través de nuestras señales 300 SD y 700 HD, desea contratarlo?"</b>.</i></li>
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
        
         <!------------------- /.fin informacion conmebol ------------------>
         
         
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
                <h4 class="modal-title">Script de Bienvenida</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>"Gracias por comunicarse con la CNT, mi nombre es (nombre y apellido del RAC), es un gusto poder servirle, ¿En qué le puedo ayudar?".</i></li>
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
                <h4 class="modal-title">Script de Despedida</h4>
              </div>
              <div class="modal-body">
                    
                        <ol style="text-align: justify;">
                            <li value="1"><i>"Estimado cliente, CNT le hace una cordial invitación para que conozca del mejor contenido y disfrute de nuestros paquetes Premium, con ellos ud. podrá disfrutar de programación variada y de calidad".</i></li>
                            <li value="2">Si el cliente acepta, nombrar los paquetes que tenemos: <i>"FOX PREMIUM, HBO PREMIUM, HOT PACK, TOTAL PLUS"</i></li>
                            <li value="3">De no aceptar, envíar a encuesta junto al script correspondiente.</li>
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
        


        <div class="modal fade" id="modal-defaultScript1">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script de Escalamiento</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Sr/a. ((Apellido)), su caso será revisado por un especialista con el Ticket ((XXXX)), nos comunicaremos en el lapso ((tiempo aproximado)) para solventar su problema, Gracias por su atención. Que tenga buen ((día/tarde/noche))..</i></li>
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
                <h4 class="modal-title">Script Orden de Reparación</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Sr/a. ((Apellido)), tome nota de su código de reparación, su caso será atendido de ((24 a 48 horas)) laborables, personal técnico se comunicará para coordinar la hora de atención. Que tenga buen ((día/tarde/noche)).</i></li>
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
                <h4 class="modal-title">Script Sin Audio de Retorno o Canal Abierto</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Estimado cliente, debido a que tenemos problemas de comunicación, por favor vuelva a contactarse con nosotros, que tenga buen día/tardes/noche.</i></li>
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
        
        
         <div class="modal fade" id="modal-defaultScript7">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Script LLuvia - Tormentas Solares</h4>
              </div>
              <div class="modal-body">
                    <ul>
                        <li><i>Sr./sra./srta. Apellido usuario final, “este momento las condiciones meteorológicas son adversas para el correcto funcionamiento, solicitamos espere hasta que las condiciones mejoren para que se restablezca el servicio caso contrario comunicarse nuevamente, gracias.</i></li>
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
        
        
        
         <!------------------------------ /.Eliminar PPV FORMULARIOS DE PRUEBAS---------------------------->
         
         <div class="modal fade" id="modal-conver_zapp">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Consultas generales:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-6">
                 </div>
                 <div class="col-lg-6 col-xs-6">

                	<div id="id_zap1" class="form-group">
            			<label>*¿Caso de conversión Zapper?</label>
            			<select id="tvz1"  class="form-control select2" style="width: 100%;" data-mask tabindex="1">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="Si">Sí</option>
            				<option value="No">No</option>
            			</select>
            		    <div id="id_zap-1"></div>
            		</div>

            		<div id="id_zap2" class="form-group">
						<label>*Cedula/RUC:</label>
							<div class="input-group">
						  <div class="input-group-addon">
								<i class="fa fa-id"></i>
						  </div>
							  <input type="text" class="form-control" id="tvz2" data-mask tabindex="1" onKeyPress="return soloNumeros(event)" maxlength="12">
						</div>
						<div id="id_zap-2"></div>
					</div>
            		
                	<table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_temp" data-mask tabindex="15" onClick="con_zap_tmp();" class="btn btn-info pull-center">Guardar</button>
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
        
        
        
 
        
        <div class="modal fade" id="modal-pruebaPPV">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h3 class="modal-title">Consultas SuperCopa Ecuador:</h3>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-6">
                 </div>
                 <div class="col-lg-6 col-xs-6">

            		<div id="id_r2" class="form-group">
            			<label>*¿Solicita información de la SuperCopa?</label>
            			<select id="tv22" class="form-control select2" style="width: 100%;" data-mask tabindex="1">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="SOLICITA INFORMACION DE SUPERCOPA">Si, sólo consulta.</option>
            			</select>
            		    <div id="r_temp2"></div>
            		</div>

					<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
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
        
        
       <div class="modal fade" id="modal-pruebaPPV2">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Reportar casos No atendidos:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-9">
                 </div>
                 <div class="col-lg-6 col-xs-9">
                     
					<div id="b1" class="form-group">
						<label>*Número Virtual:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="b-virtual" onKeyPress="return soloNumeros(event)" maxlength="9" data-mask tabindex="1" >
						</div>
						<div id="b1-1"></div>
					</div>	
					
					<div id="b2" class="form-group">
						<label>*Teléfono Contacto:</label>
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-phone"></i>
							  </div>
							  <input type="text" class="form-control" id="b-contac" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="2" >
							</div>
							<div id="b2-2"></div>
					</div>
                     
					            		
            		<div id="b3" class="form-group">
            			<label>*Motivo de reclamo:</label>
            			<select id="b-sel" class="form-control select2" style="width: 100%;" data-mask tabindex="3">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="VISITA TECNICA">Visita Técnica No atendida.</option>
            				<option value="TRASLADO DE SERVICIO">Traslado No atendido.</option>
            				<option value="MIGRACION DE SERVICIO">Migración No atendida</option>
            				<option value="INSTALACION DECO ADICIONAL">Instalación de Deco No realizada.</option>
            				<option value="ACTIVACION DE CONTRATO">Activación de Servicio No realizada.</option>
            			</select>
            		    <div id="b3-3"></div>
            		</div>
            		
            		<table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_b" data-mask tabindex="15" onClick="ppv_tmp2();" class="btn btn-info pull-center">Guardar</button>
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


       <div class="modal fade" id="modal-comandos">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Consultas y retiros No transmisión LIGA PRO:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-3 col-xs-12">
                 </div>
                 <div class="col-lg-6 col-xs-8">
                     
            		<div id="COM0" class="form-group">
            			<label>*Solicitud del cliente:</label>
            			<select id="COM-OPC" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="ACTIVO">Sólo consulta.</option>
            				<option value="SUSPENDIDO">Retiro del servicio.</option>
            			</select>
            		    <div id="COM0-0"></div>
            		</div>
					
					
					<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
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
        
        
         <div class="modal fade" id="modal-pruebaPPV3">
             
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Activaciones ECDF y PPV:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-6 col-xs-9">
                     
                    <div id="ECDF0" class="form-group">
            			<label>*Señal activada:</label>
            			<select id="lista_ppv"  class="form-control select2" style="width: 100%;" data-mask tabindex="0" onclick="cambio_sva();">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="ECDF">El Canal del Fútbol</option>
            				<option value="PPV ECUADOR VS BOLIVIA">PPV Ecuador Vs Bolivia</option>
            				<option value="PPV VENEZUELA VS ECUADOR">PPV Venezuela Vs Ecuador</option>
            				<option value="PPV COLOMBIA VS ECUADOR">PPV Colombia Vs Ecuador</option>
            			</select>
            		    <div id="ECDF0-0"></div>
            		</div>  
            		
            		
            		<div id="ECDF2" class="form-group">
						<label>*Nombres cliente:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-user"></i>
						  </div>
					  <input type="text" class="form-control" id="ECDF2-NOM" onKeyPress="return sololetras(event)" maxlength="50" data-mask tabindex="2" >
						</div>
						<div id="ECDF2-2"></div>
					</div>	
					
					<div id="ECDF5" class="form-group">
                	   <label>*Usuario OPEN que activó:</label>
                	   <div class="input-group">
                	     <div class="input-group-addon">
                			<i class="fa fa-user"></i>
                		 </div>
                		 <input type="text" class="form-control"  id="open5" data-mask tabindex="4" onKeyPress="return sololetras(event)" maxlength="15"  value="">
                		</div>
                		<div id="ECDF5-5"></div>
                	</div>
                     
                 </div>
                 <div class="col-lg-6 col-xs-9">
                     

					<div id="ECDF1" class="form-group">
						<label>*Cedula/RUC Cliente:</label>
							<div class="input-group">
						  <div class="input-group-addon">
								<i class="fa fa-user"></i>
						  </div>
							  <input type="text" class="form-control" id="ECDF1-CED" data-mask tabindex="1" onKeyPress="return soloNumeros(event)" maxlength="13">
						</div>
						<div id="ECDF1-1"></div>
					</div>
                     
                     
					<div id="ECDF3" class="form-group">
						<label>*N° Contrato:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="ECDF3-CONT" onKeyPress="return soloNumeros(event)" maxlength="9" data-mask tabindex="3" >
						</div>
						<div id="ECDF3-3"></div>
					</div>	
					

                   <div id="ECDF4" class="form-group">
						<label>*Fecha de Activación:</label>
						<div class="input-group">
    					  <div class="input-group-addon">
    						<i class="fa fa-calendar"></i>
    					  </div>
						  <input type="text" class="form-control" id="datemask"  maxlength="10" value="<?php date_default_timezone_set("America/Guayaquil"); echo date("d/m/Y"); ?>" data-mask tabindex="5" >
					   </div>
					  <div id="ECDF4-4"></div>
					</div>
            		
                 	<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
                    </div>
            	

                 </div>
                 
                    <table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_b" data-mask tabindex="6" onClick="ppv_tmp3();" class="btn btn-info pull-center">Guardar</button>
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
        


        <div class="modal fade" id="modal-ret-ligapro">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Retención Liga Pro:</h5>
              </div>
              <div class="modal-body">
                  <h5><b><em>*Cliente No debe tener factura vencida para aplicar al beneficio. En caso de preguntas: </em></b><a href="documentos/ligapro/Banco de Preguntas-ligapro.pdf" target="_blank">Clic Aquí</a></h5>
                   
                 <div class="col-lg-6 col-xs-6">
                     
					<div id="id1" class="form-group">
						<label>*Nombre Cliente:</label>
							<div class="input-group">
							  <div class="input-group-addon">
									<i class="fa fa-user"></i>
							  </div>
							  <input type="text" class="form-control" id="name-ret" data-mask tabindex="1" onKeyPress="return soloLetras(event)" maxlength="50">
							</div>
						<div id="id1-1"></div>
					</div>


            		
					<div id="id3" class="form-group">
						<label>*Numero Virtual:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="nv-ret" onKeyPress="return soloNumeros(event)" maxlength="9" data-mask tabindex="3" >
						</div>
						<div id="id3-3"></div>
					</div>	
					
					            		
            		<div id="id5" class="form-group">
            			<label>*Plan del Cliente:</label>
            			<select id="plan-ret" onChange="mostrar();" class="form-control select2" style="width: 100%;" data-mask tabindex="5">
            				<option selected="selected" value="" disabled>Seleccione..</option>
            				<option value="SUPER SD 18,50$">SUPER SD 18,50$.</option>
            				<option value="PAQUETE SD 20,50$">PAQUETE SD 20,50$.</option>
            				<option value="PAQUETE HD 36$">PAQUETE HD 36$</option>
            			</select>
            		    <div id="id5-5"></div>
            		</div>


            		<div id="id7" class="form-group">
						<label>*Anipagador:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="ani-ret" onKeyPress="return soloNumeros(event)" maxlength="10" data-mask tabindex="7" >
						</div>
						<div id="id7-7"></div>
					</div>	
                     
                 </div>
                 <div class="col-lg-6 col-xs-6">

					<div id="id2" class="form-group">
						<label>*Cedula/RUC:</label>
							<div class="input-group">
						  <div class="input-group-addon">
								<i class="fa fa-id"></i>
						  </div>
							  <input type="text" class="form-control" id="ced-ret" data-mask tabindex="1" onKeyPress="return soloNumeros(event)" maxlength="12">
						</div>
						<div id="id2-2"></div>
					</div>

            		<div id="id4" class="form-group">
						<label>*N° Contrato:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-share-alt"></i>
						  </div>
					  <input type="text" class="form-control" id="con-ret" onKeyPress="return soloNumeros(event)" maxlength="10" data-mask tabindex="4" >
						</div>
						<div id="id4-4"></div>
					</div>	

            		<div id="id6" class="form-group">
            			<label>*Beneficio ofrecido:</label>
                			<select id="ben-ret"  class="form-control select2" style="width: 100%;" data-mask tabindex="6">
            				<option selected="selected" value="" disabled>Seleccione Plan..</option>
            				<option id="o1" value="FOX PREMIUN POR 1 MES" style="display:none">FOX PREMIUN POR 1 MES.</option>
            				<option id="o2" value="DESCUENTO 50% POR 2 MESES NO CONSECUTIVOS" style="display:none">DESCUENTO 50% POR 2 MESES NO CONSECUTIVOS.</option>
            				<option id="o3" value="DESCUENTO 50% POR 3 MESES NO CONSECUTIVOS" style="display:none">DESCUENTO 50% POR 3 MESES NO CONSECUTIVOS.</option>
            				<option id="o4" value="DESCUENTO 100% POR 2 MESES NO CONSECUTIVOS" style="display:none">DESCUENTO 100% POR 2 MESES NO CONSECUTIVOS.</option>
            				<option id="o5" value="DESCUENTO 50% POR 6 MESES NO CONSECUTIVOS" style="display:none">DESCUENTO 50% POR 6 MESES NO CONSECUTIVOS.</option>
            			</select>
            		    <div id="id6-6"></div>
            		</div>


					<div id="id8" class="form-group">
						 <label>Observación:</label>
						 <textarea class="form-control" rows="2" id="obs-ret" placeholder="..." style="resize: none; " data-mask tabindex="8" maxlength="245"></textarea>
					     <div id="id8-8"></div>
					</div>
            		
                </div>
                    <table class="table text-center">
                	    <tr>
                        	<td width="49%">
                        	    <button type="button" data-mask tabindex="16" onClick="delete_all();" class="btn btn-info pull-center">Reiniciar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    			<button type="button" id="guardar_ret_dth" data-mask tabindex="15" onClick="ret_dth();" class="btn btn-info pull-center">Guardar</button>
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
        
<!------------------------------ /.MODAL AMC---------------------------->        
        <div class="modal fade" id="modal-AMC">
           <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                 <h4 class="modal-title">Cliente solicita información de AMC:</h4>
              </div>
              <div class="modal-body">
                 <div class="col-lg-6 col-xs-6">
                     
            		<div id="amc1_1" class="form-group">
                		<label>*N° Contrato:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-file-text-o"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="contrato_amc" data-mask tabindex="4" onKeyPress="return soloNumeros(event)" maxlength="9">
                			</div>
                		<div id="amc1_2"></div>
                	</div>
                	
                	<div class="form-group">
                       <p class="help-block">* Campos Obligatorios.</p>
                    </div>
                	
                 </div>
                 

                 
                 <div class="col-lg-6 col-xs-6">

            		<div id="amc2_1" class="form-group">
                		<label>*Cédula/RUC:</label>
                			<div class="input-group">
                			  <div class="input-group-addon">
                				<i class="fa fa-file-text-o"></i>
                			  </div>
                			    <input type="text" class="form-control"  id="cedula_amc" data-mask tabindex="4" onKeyPress="return soloNumeros(event)" maxlength="13">
                			</div>
                		<div id="amc2_2"></div>
                	</div>
                </div>


                    <table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_amc" data-mask tabindex="5" onClick="send_amc();" class="btn btn-info pull-center">Guardar</button>
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
<!------------------------------ /.MODAL AMC ---------------------------->
        
<!------------------------------ /.proceso emergente ---------------------------->


         <div class="modal fade" id="modal-Emergente">
           <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                    <h4 class="modal-title">Bitácora procesos emergentes:</h4>
              </div>
              <div class="modal-body">
                  
                 <div class="col-lg-6 col-xs-6">
                     
					<div id="id1_1" class="form-group">
						<label>*Nombre del Cliente:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-user"></i>
						  </div>
						  <input type="text" class="form-control" id="nombre" onBlur="pro_nom();" onKeyPress="return soloLetras(event)" maxlength="50" data-mask tabindex="1" >
					    </div>
					    <div id="id1-1"></div>
					</div>
                	
            		<div id="id3_3" class="form-group">
						<label>*Cédula/RUC del cliente:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-list-alt"></i>
						  </div>
							  <input type="text" class="form-control" id="cedula" onBlur="pro_ced();" onKeyPress="return soloNumeros(event)" maxlength="13" data-mask tabindex="3" >
							</div>
						<div id="id3-3"></div>
					</div>
					
					
					<div id="id5_5" class="form-group">
        				<label>*Ciudad:</label>
        				<div id="charge_select2">
        					<select id="localidad" onchange="pro_localidad();" class="form-control select2" style="width: 100%;" data-mask tabindex="5">
        			      <option selected="selected" value="" disabled>Seleccione provincia..</option>
        				</select>
        				</div>
        				<div id="id5-5"></div>
        			</div>
        			
        			<div id="id7_7" class="form-group">
						<label>*Teléfono Celular:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-mobile"></i>
						  </div>
					  <input type="text" class="form-control" id="celular" onBlur="pro_celular2();" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="7" >
						</div>
						<div id="id7-7"></div>
					</div>
					
					
					<div id="id9_9" class="form-group">
						<label>*Producto:</label>
						<select id="producto" onBlur="pro_producto();"  class="form-control select2" style="width: 100%;" data-mask tabindex="9">
						  <option selected="selected" value="" disabled>Seleccione..</option>
						  <option value="DTH">DTH</option>
						  <option value="TELEFONIA FIJA">TELEFONIA FIJA</option>
						  <option value="INTERNET FIJO">INTERNET FIJO</option>
						  <option value="TELEFONIA MOVIL">TELEFONIA MOVIL</option>
						</select>
					  <div id="id9-9"></div>
					</div>
					
				<div id="id11" class="form-group">
				 <label>Observación:</label>
					 <textarea class="form-control" rows="2" id="observacion" placeholder="..." style="resize: none; " data-mask tabindex="11" maxlength="245"></textarea>
				     <div id="id11-11"></div>
				</div>
					
             </div>
                 

                 
                 <div class="col-lg-6 col-xs-6">

					<div id="id2_2" class="form-group">
						<label>*Apellido del Cliente:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-user"></i>
						  </div>
						  <input type="text" class="form-control" id="apellido" onBlur="pro_ape();" onKeyPress="return soloLetras(event)" maxlength="50" data-mask tabindex="2" >
					    </div>
					    <div id="id2-2"></div>
					</div>
            		
            		
					<div id="id4_4" class="form-group">
						<label>*Provincia:</label>
						<select id="provincia" onchange="OnClickCombo();"  class="form-control select2" style="width: 100%;" data-mask tabindex="4">
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
					  <div id="id4-4"></div>
					</div>
            		
            		
            		<div id="id6_6" class="form-group">
						<label>Teléfono Convencional:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-phone"></i>
						  </div>
					  <input type="text" class="form-control" id="convencional" onBlur="pro_local();" data-inputmask='"mask": "(99) 999-99-99"' data-mask tabindex="6" >
						</div>
						<div id="id6-6"></div>
					</div>
					
					
					<div id="id8_8" class="form-group">
                	    <label for="exampleInputEmail1">*Correo Eléctronico:</label>
                	     <div class="input-group">
                        <div class="input-group-addon">
        					<i class="fa fa-envelope-o"></i>
        				</div>
                	    <input type="email" class="form-control" id="correo" onBlur="pro_mail(correo.value);" placeholder="correo@dominio.com" data-mask tabindex="8">
                	     </div>	
                	     <div id="id8-8"></div>
            		</div>
            		
            		<div id="id10_10" class="form-group">
						<label>*Numero Servicio/DUMMY:</label>
						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-tasks"></i>
						  </div>
							  <input type="text" class="form-control" id="dummy" onBlur="pro_dummy();" onKeyPress="return soloNumeros(event)" maxlength="9" data-mask tabindex="10" >
							</div>
						<div id="id10-10"></div>
					</div>
					
                 <div class="form-group">
                   <p class="help-block">* Campos Obligatorios.</p>
                </div>
 
 
                </div>
                

                    <table class="table text-center">
                	    <tr>
                        	<td width="49%">
                    			<button type="button" id="guardar_emergente" data-mask tabindex="11" onClick="send_eme();" class="btn btn-info pull-center">Guardar</button>
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
                    <li><b> Tarjeta Inteligente: </b> Panel frontal - a la derecha (Chip hacia arriba y hacia adentro).</li>
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
    $("#content1").load('menu/dashboard.php');
    
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
  var camp1 = document.getElementById("b-virtual");
  var camp2 = document.getElementById("b-contac");
  var camp3 = document.getElementById("b-sel");
  
  var b1 = document.getElementById("b1");
  var b2 = document.getElementById("b2");
  var b3 = document.getElementById("b3");
  
  //FUNCION TEMPORAL ERRORES DE COMANDO 
  
  function ppv_coman1(){
      if (confirm("\xbfBorrar registro? Se perderá la información.")){
         clean_command();
      }
  }  
  
  function clean_command(){
      document.getElementById("COM-CED").value="";
      document.getElementById("COM-NUMVIR").value="";

      
      //LIMPIO ERRORES
      document.getElementById("COM0").className = "form-group has-feedback";
      $('#COM0-0').hide().html('').fadeIn(500);

      //----------------

      document.getElementById("COM1").className = "form-group has-feedback";
      $('#COM1-1').hide().html('').fadeIn(500);

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
    	
    	// valido NNUMERO DE QUEJA
    	if(document.getElementById("COM-NUMVIR").value === ""){
    	   document.getElementById("COM1").className = "form-group has-error";
    	   $('#COM1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   COM1 = 1;
    	}else{
    	   document.getElementById("COM1").className = "form-group has-feedback";
    	   $('#COM1-1').hide().html('').fadeIn(500);
    	   COM1 = 0;
    	}
    	

    	//VALIDO QUE LOS CAMPOS ESTEN COMPLETADOS
    	var camp1 = document.getElementById("COM-CED").value;
    	var camp5 = document.getElementById("COM-NUMVIR").value;

    	if(COM0 == 0 && COM1 == 0){
            if (confirm("\xbfContinuar y guardar?")){
              var dataString = 'a1=' + camp1 + '&a2=' + camp5;
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
  
  function ppv_tmp2(){
      
        // valido numero virtual
        
        if(camp1.value === ""){
    	   b1.className = "form-group has-error";
    	   $('#b1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   a = 1;
    	}else{
    	   b1.className = "form-group has-feedback";
    	   $('#b1-1').hide().html('').fadeIn(500);
    	   a = 0;
    	}
      
        // valido numero telefonico completo

        for (var i = 0; i < 14; i++) {
            if (camp2.value.charAt(i) == "_"){
               val2 = 1;
            }
        }
    	if(camp2.value === ""){
    	   b2.className = "form-group has-error";
    	   $('#b2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   b = 1;
    	}else if(val2 == "1" ){
    	   b2.className = "form-group has-error";
    	   $('#b2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Teléfono incompleto</span>').fadeIn(500);
    	   b = 1;
    	}else{
    	   b2.className = "form-group has-feedback";
    	   $('#b2-2').hide().html('').fadeIn(500);
    	   b = 0;
    	}
    	var val2 = 0;
    	
    	// valido la seleccion
    	
    	if(camp3.value === ""){
    	   b3.className = "form-group has-error";
    	   $('#b3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
    	   c = 1;
    	}else{
    	   b3.className = "form-group has-feedback";
    	   $('#b3-3').hide().html('').fadeIn(500);
    	   c = 0;
    	}
    	
    	
      if(a == 0 && b == 0 && c == 0){
          if (confirm("\xbfContinuar y guardar?")){
              var dataString = 'a1=' + camp1.value + '&a2=' + camp2.value + '&a3=' + camp3.value;
              $.ajax({
                  type: 'POST',
                  url: 'php/val_ppvTmp2.php', 
                  data:  dataString,
                  success: function(x){
                      alert("Guardado con Éxito");
                      camp1.value = "";
                      camp2.value = "";
                      camp3.value = "";
                      $('#modal-pruebaPPV2').modal('hide');
                  }
              });
          }
      }
  }
  
  var campc1 = document.getElementById("ECDF1-CED");
  var campc2 = document.getElementById("ECDF2-NOM");
  var campc3 = document.getElementById("ECDF3-CONT");
  var campc4 = document.getElementById("datemask");
  var campc5 = document.getElementById("open5");
  var campc0 = document.getElementById("lista_ppv");
  
  var c1 = document.getElementById("ECDF1");
  var c2 = document.getElementById("ECDF2");
  var c3 = document.getElementById("ECDF3");
  var c4 = document.getElementById("ECDF4");
  var c5 = document.getElementById("ECDF5");
  var c0 = document.getElementById("ECDF0");

  
  function ppv_tmp3(){
      
    	// valido lista
    	if(campc0.value === ""){
    	   c0.className = "form-group has-error";
    	   $('#ECDF0-0').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
    	   agg = 1;
    	}else{
    	   c0.className = "form-group has-feedback";
    	   $('#ECDF0-0').hide().html('').fadeIn(500);
    	   agg = 0;
    	}

      
        // valido cedula
        if(campc1.value === ""){
    	   c1.className = "form-group has-error";
    	   $('#ECDF1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   ac = 1;
    	}else if(campc1.value.length < 10){
    	   c1.className = "form-group  has-error";
    	   $('#ECDF1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Cédula/RUC incompleta</span>').fadeIn(500);
    	   ac = 1;
    	}else{
    	   c1.className = "form-group has-feedback";
    	   $('#ECDF1-1').hide().html('').fadeIn(500);
    	   ac = 0;
    	}
    	
    	// valido nombre
    	if(campc2.value === ""){
    	   c2.className = "form-group has-error";
    	   $('#ECDF2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   ax = 1;
    	}else{
    	   c2.className = "form-group has-feedback";
    	   $('#ECDF2-2').hide().html('').fadeIn(500);
    	   ax = 0;
    	}

    	// valido contrato
    	if(campc3.value === ""){
    	   c3.className = "form-group has-error";
    	   $('#ECDF3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   az = 1;
    	}else{
    	   c3.className = "form-group has-feedback";
    	   $('#ECDF3-3').hide().html('').fadeIn(500);
    	   az = 0;
    	}


    	// valido fecha
    	if(campc4.value === ""){
    	   c4.className = "form-group has-error";
    	   $('#ECDF4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   ay = 1;
    	}else{
    	   c4.className = "form-group has-feedback";
    	   $('#ECDF4-4').hide().html('').fadeIn(500);
    	   ay = 0;
    	}
    	
    	// valido open
    	if(campc5.value === ""){
    	   c5.className = "form-group has-error";
    	   $('#ECDF5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
    	   au = 1;
    	}else{
    	   c5.className = "form-group has-feedback";
    	   $('#ECDF5-5').hide().html('').fadeIn(500);
    	   au = 0;
    	}

      if(ac == 0 && ax == 0 && az == 0 && ay == 0 && au == 0 && agg == 0){
                //invierto fecha
                var dia = parseInt(document.getElementById("datemask").value.slice(0,2));
                var mes = parseInt(document.getElementById("datemask").value.slice(3,5));
                var anio = parseInt(document.getElementById("datemask").value.slice(-4));
                    
                var amd = anio + '-' + mes + '-' + dia;
          if (confirm("\xbfContinuar y guardar?")){
              var dataString = 'a1=' + campc1.value + '&a2=' + campc2.value + '&a3=' + campc3.value + '&a4=' + amd + '&a5=' + campc5.value + '&a6=' + campc0.value;
              $.ajax({
                  type: 'POST',
                  url: 'php/val_ppvTmp3.php', 
                  data:  dataString,
                  success: function(x){
                      alert("Guardado con Éxito. Nº Ticket: " + x);
                      campc1.value = "";
                      campc2.value = "";
                      campc3.value = "";
                      campc0.value = "";
                      $('#modal-pruebaPPV3').modal('hide');
                  }
              });
          }
      }
  }
  
  function ppv_tmp(){
	var tv22 = document.getElementById("tv22");

    if (tv22.value == ""){
        alert("Seleccione, ¿Fue una consulta de LIGA PRO?");
    }else{
       var dataString = 'a3=' + tv22.value;
       if (confirm("\xbfContinuar y guardar?")){
       		$.ajax({
           		type: 'POST',
           		url: 'php/val_ppvTmp.php', 
           		data:  dataString, 
           		success: function(x){
           		    if(x == 1){
           		       tv22.value = "";
            		   alert("Guardado con Éxito");
                       $('#modal-pruebaPPV').modal('hide');
           		    }else if(x == 7){
            		   alert("Error al intentar guardar. Intente nuevamente.");
           		    }
                }
           });
        }
    }

  }
  
  function con_zap_tmp(){
	var tvz2 = document.getElementById("tvz1");
	var tvz22 = document.getElementById("tvz2");
    var dataStringZ = 'a1=' + tvz2.value + '&a2=' + tvz22.value;
    if (tvz2.value == ""){
        alert("Seleccione, ¿Es caso conversión Zapper?");
    }else if (tvz22.value == ""){
        alert("Indique cedula del cliente.");
    }else{
       if (confirm("\xbfContinuar y guardar?")){
    		$.ajax({
        		type: 'POST',
        		url: 'php/val_zapper.php', 
        		data:  dataStringZ, 
        		success: function(x){
        		  if(x==1){
        		    tvz2.value = "";
        		    tvz22.value = "";
            		alert("Guardado con Éxito");
            		$('#modal-conver_zapp').modal('hide');
            	  }else if(x==7){
                    alert("Sesión Caducada. Vuelve a iniciar sesión");
    				self.location = "index.php";
                  }
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
    
    function cambio_sva(){
       if(document.getElementById("sva3_2").value == "PPV ECUADOR VS COLOMBIA"){
           document.getElementById("idz1").style.display = "";
       }else{
           document.getElementById("idz1").style.display = "none";
       }
    }
    
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