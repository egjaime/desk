<?php
  //sleep(1);
  session_start();
  include '../php/conexion_bd.php';
  if(!empty($_SESSION['id'])){ 
  //valido si el usuario esta bloqueado
  		$trx="SELECT activo FROM usuarios WHERE id={$_SESSION['id']}";  
		$resB=mysqli_query($enlace,$trx);
		$filaB = mysqli_fetch_array($resB);
		if ($filaB['activo'] != 3){
?>
 
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

 </head>
 
<body class="hold-transition skin-blue sidebar-mini">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Impulsa SC - Colega
        <small id="fecha_prin"><i class="fa fa-refresh fa-spin"></i></small>&nbsp<small><div id="carga_spin_2"></div></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-2 col-xs-5">
		
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
               <h3 style="font-size: 25px; text-align:'center'" id="tmo_id"><i class="fa fa-refresh fa-spin"></i><sup style="font-size: 10px"> %</sup></h3>
              <p style="font-size: 12px" id="tmo_meta">Meta: <i class="fa fa-refresh fa-spin"></i> %</p>
            </div>
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <a href="#" class="small-box-footer">TMO</a>
          </div>
        </div>
        <!-- ./col -->

		
        <div class="col-lg-2 col-xs-5">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3 style="font-size: 25px" id="ns"><i class="fa fa-refresh fa-spin"></i><sup style="font-size: 10px">%</sup></h3>

              <p style="font-size: 12px" id="meta_ns">Meta: <i class="fa fa-refresh fa-spin"></i> %</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Nivel de Servicio</a>
          </div>
        </div>
		<!-- ./col -->
		
		
		
        <!-- ./col -->
        <div class="col-lg-2 col-xs-5">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
               <h3 style="font-size: 25px" id="ad"><i class="fa fa-refresh fa-spin"></i><sup style="font-size: 15px">%</sup></h3>

               <p style="font-size: 12px" id="meta_ad">Meta: <i class="fa fa-refresh fa-spin"></i> %</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
            <a href="#" class="small-box-footer">Adherencia</a>
          </div>
        </div>
		<!-- ./col -->
		
		
		
		
		
        <!-- ./col -->
        <div class="col-lg-2 col-xs-5">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3 style="font-size: 25px" id="con"><i class="fa fa-refresh fa-spin"></i><sup style="font-size: 15px">%</sup></h3>

               <p style="font-size: 12px" id="meta_con">Meta: <i class="fa fa-refresh fa-spin"></i> %</p>
            </div>
            <div class="icon">
              <i class="fa fa-pie-chart"></i>
            </div>
            <a href="#" class="small-box-footer">Convertibilidad</i></a>
          </div>
        </div>
        <!-- ./col -->
		
		
		
		
		<!-- ./col -->
        <div class="col-lg-2 col-xs-5">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
               <h3 style="font-size: 25px" id="par"><i class="fa fa-refresh fa-spin"></i><sup style="font-size: 15px">%</sup></h3>

               <p style="font-size: 12px" id="meta_par">Meta: <i class="fa fa-refresh fa-spin"></i> %</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">Ocupaci&oacute;n</i></a>
          </div>
        </div>
        <!-- ./col -->
		
		
		
		<!-- ./col -->
        <div class="col-lg-2 col-xs-5">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
               <h3 style="font-size: 25px" id="cierre"><i class="fa fa-refresh fa-spin"></i><sup style="font-size: 15px">%</sup></h3>

               <p style="font-size: 12px" id="meta_cierre">Meta: <i class="fa fa-refresh fa-spin"></i> %</p>
            </div>
            <div class="icon">
              <i class="fa fa-phone"></i>
            </div>
            <a href="#" class="small-box-footer">Cierre de Llamadas</i></a>
          </div>
        </div>
        <!-- ./col -->
		
		
		
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Estado de Casos:</h3>&nbsp&nbsp&nbsp
              <img src="documentos/graficos/anterior.png"> Mes Anterior  &nbsp &nbsp <img src="documentos/graficos/actual.png"> Mes Actual <div class="pull-right">  <a href="#" id="iconact">&nbsp &nbsp <i id="refresh7" style="display:none"> Actualizando.. &nbsp</i><i id="refresh1" style="display:none" class="fa fa-refresh fa-spin"></i><i id="refresh2" class="fa fa-refresh" onClick="actu_graf();"  title="Actualizar Estado de Casos"></i>&nbsp &nbsp</a></div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:198px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

        </section>
        
        <section class="col-lg-5 connectedSortable">
            
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">TOP 5 TMO</h3>
              <div class="pull-right"> &nbsp   <a href="#" id="allTMO" data-toggle="modal" data-target="#modal-eyeTMO">&nbsp <i class="fa fa-eye" onClick="pro_cargaeyeall();" title="Ver Todos los TMO"></i></a><a href="#" id="iconact2">&nbsp &nbsp <i id="refresh8" style="display:none"> Actualizando.. &nbsp</i><i id="refresh3" style="display:none" class="fa fa-refresh fa-spin"></i><i id="refresh4" class="fa fa-refresh" onClick="actu_tmo();"  title="Actualizar TOP 5 TMO"></i></a> &nbsp</div>
            </div>   
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Asesor</th>
                  <th>Tickets creados</th>
                  <th style="width: 40px">TMO</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td><span id="nom_1"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 48px;"><span id="tick_1"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td><span class="badge bg-aqua" id="tmo_1"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td><span id="nom_2"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 48px;"><span id="tick_2"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td><span class="badge bg-aqua" id="tmo_2"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td><span id="nom_3"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 48px;"><span id="tick_3"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td><span class="badge bg-aqua" id="tmo_3"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td><span id="nom_4"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 48px;"><span id="tick_4"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td><span class="badge bg-aqua" id="tmo_4"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
				<tr>
                  <td>5.</td>
                  <td><span id="nom_5"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 48px;"><span id="tick_5"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td><span class="badge bg-aqua" id="tmo_5"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		 
            
        </section>

      </div>
      <!-- /.row (main row) -->


    </section>

  <div class="control-sidebar-bg"></div>
  

        <div class="modal fade" id="modal-eyeTMO">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div id="eyeall1">
                            
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="modal-onetmo">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div id="eyeone1">
                            
                    </div>
                </div>
            </div>
        </div>
  
  
          <div class="modal fade" id="modal-alltmo">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">En construccion</h4>
              </div>
              <div class="modal-body">
                  <img src="documentos/graficos/construccion.png">
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


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- ChartJS -->
<script src="assets/bower_components/chart.js/Chart.js"></script>


<script>
  //definicion de variables
  var var1 = 0;
  var var2 = 0;
  var var3 = 0;
  var var4 = 0;
  var var5 = 0;
  
  var var6 = 0;
  var var7 = 0;
  var var8 = 0;
  var var9 = 0;
  var var10 = 0;

  function spin(){
      //carga de spin Nombres
      $('#nom_2').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#nom_3').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#nom_4').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#nom_5').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#nom_1').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      
      //carga de spin cantidad de tickets
      $('#tick_1').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tick_2').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tick_3').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tick_4').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tick_5').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      
      //carga de spin cantidad de tickets
      $('#tmo_1').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tmo_2').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tmo_3').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tmo_4').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tmo_5').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
  }
  
    function spin2(){
      //carga de spin cuadros
      $('#fecha_prin').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tmo_id').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#tmo_meta').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#ns').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#meta_ns').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#ad').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#meta_ad').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#con').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#meta_con').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#par').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#meta_par').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#cierre').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      $('#meta_cierre').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(100);
      
  }
  
  spin();
  
  function cuadros(){
        $.ajax({
            async: false,
          	type: 'POST',
          	url: '4_COLEGA/php/dash/val_boards.php', 
          	success: function(x){
                document.getElementById('fecha_prin').innerHTML = x.split('$$')[1];
                $('#carga_spin_2').hide().html('<a href="#" id="iconact5">&nbsp <i id="refresh9" style="display:none"> Actualizando.. &nbsp</i><i id="refresh5" style="display:none" class="fa fa-refresh fa-spin"></i><i id="refresh6" class="fa fa-refresh" onClick="act_board();"  title="Actualizar Tablas"></i></a>').fadeIn(1);
				document.getElementById('tmo_id').innerHTML = x.split('$$')[2] + "%";
				document.getElementById('tmo_meta').innerHTML = "Meta: " + x.split('$$')[3] + "%";
				document.getElementById('ns').innerHTML = x.split('$$')[4] + "%";
				document.getElementById('meta_ns').innerHTML = "Meta: " + x.split('$$')[5] + "%";
				document.getElementById('ad').innerHTML = x.split('$$')[6] + "%";
				document.getElementById('meta_ad').innerHTML = "Meta: " + x.split('$$')[7] + "%";
				document.getElementById('con').innerHTML = x.split('$$')[8] + "%";
				document.getElementById('meta_con').innerHTML = "Meta: " + x.split('$$')[9] + "%";
				document.getElementById('par').innerHTML = x.split('$$')[10] + "%";
				document.getElementById('meta_par').innerHTML = "Meta: " + x.split('$$')[11] + "%";
				document.getElementById('cierre').innerHTML = x.split('$$')[12] + "%";
				document.getElementById('meta_cierre').innerHTML = "Meta: " + x.split('$$')[13] + "%";
          	}
        });
    }
  
  function busquedaGraf(){
        $.ajax({
            async: false,
          	type: 'POST',
          	url: '4_COLEGA/php/dash/val_Graf.php', 
          	success: function(x){
                if(x==1){
                    var1 = 0;
                    var2 = 0;
                    var3 = 0;
                    var5 = 0;
                }else{ 
                    for (i = 1; i < 11; i+=2) {
                        if(x.split('$$')[i] == '1'){
                          var1 = x.split('$$')[i+1];
                        }
                        if(x.split('$$')[i] == '2'){
                          var2 = x.split('$$')[i+1];
                        }
                        if(x.split('$$')[i] == '3'){
                          var3 = x.split('$$')[i+1];
                        }
                        if(x.split('$$')[i] == '5'){
                          var5 = x.split('$$')[i+1];
                        }
                        if(typeof (x.split('$$')[i]) === "undefined"){
                          if(i == '1'){
                             var1 = '0';
                          }
                          if(i == '3'){
                             var2 = '0';
                          }
                          if(i == '5'){
                             var3 = '0';
                          }
                          if(i == '7'){
                            var5 = '0';
                          }
                        }
                    }
                }
          	}
        });
    }
  
    function busquedaGraf2(){
        $.ajax({
            async: false,
          	type: 'POST',
          	url: '4_COLEGA/php/dash/val_Graf2.php', 
          	success: function(p){
                if(p==1){
                         var6 = 0;
                         var7 = 0;
                         var8 = 0;
                         var10 = 0;
                }else{ 
                    for (j = 1; j < 11; j+=2) {
                        if(p.split('$$')[j] == '1'){
                          var6 = p.split('$$')[j+1];
                        }
                        if(p.split('$$')[j] == '2'){
                          var7 = p.split('$$')[j+1];
                        }
                        if(p.split('$$')[j] == '3'){
                          var8 = p.split('$$')[j+1];
                        }
                        if(p.split('$$')[j] == '5'){
                          var10 = p.split('$$')[j+1];
                        }
                        if(typeof (p.split('$$')[j]) === "undefined"){
                          if(j == '1'){
                             var6 = '0';
                          }
                          if(j == '3'){
                             var7 = '0';
                          }
                          if(j == '5'){
                             var8 = '0';
                          }
                          if(j == '7'){
                             var10 = '0';
                          }

                        }
                    }
                }
          	}
        });
    }
  
  $.widget.bridge('uibutton', $.ui.button);
  function grafico(){
    var areaChartData = {
      labels  : ['Resuelto', 'Escalado', 'LLamadas Colgadas'],
      datasets: [
        {
          label               : 'Mes anterior',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [var6, var7, var10]
        },
        {
          label               : 'Mes Actual',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [var1, var2, var5]
        }
      ]
    }


    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#264BE0'
    barChartData.datasets[1].strokeColor = '#264BE0'
    barChartData.datasets[1].pointColor  = '#264BE0'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  }
  
  
  //se inicia la carga de los div
  
    function busqueda(){
    	$.ajax({
    		type: 'POST',
    		url: '4_COLEGA/php/dash/val_dash.php', 
    		success: function(x){
    		    if(x==1){
    		        document.getElementById('nom_1').innerHTML = 'No info';
					document.getElementById('tick_1').innerHTML = 'No info';
					document.getElementById('tmo_1').innerHTML = 'NI';
					document.getElementById('nom_2').innerHTML = 'No info';
					document.getElementById('tick_2').innerHTML = 'No info';
					document.getElementById('tmo_2').innerHTML = 'NI';
					document.getElementById('nom_3').innerHTML = 'No info';
					document.getElementById('tick_3').innerHTML = 'No info';
					document.getElementById('tmo_3').innerHTML = 'NI';
					document.getElementById('nom_4').innerHTML = 'No info';
					document.getElementById('tick_4').innerHTML = 'No info';
					document.getElementById('tmo_4').innerHTML = 'NI';
					document.getElementById('nom_5').innerHTML = 'No info';
					document.getElementById('tick_5').innerHTML = 'No info';
					document.getElementById('tmo_5').innerHTML = 'NI';
					document.getElementById('refresh3').style.display = 'none';
					document.getElementById('refresh4').style.display = '';
					document.getElementById('refresh8').style.display = 'none';
    		    }else{
    		        document.getElementById('nom_1').innerHTML = x.split('$$')[1];
					document.getElementById('tick_1').innerHTML = x.split('$$')[2];
					document.getElementById('tmo_1').innerHTML = x.split('$$')[3];
					document.getElementById('nom_2').innerHTML = x.split('$$')[4];
					document.getElementById('tick_2').innerHTML = x.split('$$')[5];
					document.getElementById('tmo_2').innerHTML = x.split('$$')[6];
					document.getElementById('nom_3').innerHTML = x.split('$$')[7];
					document.getElementById('tick_3').innerHTML = x.split('$$')[8];
					document.getElementById('tmo_3').innerHTML = x.split('$$')[9];
					document.getElementById('nom_4').innerHTML = x.split('$$')[10];
					document.getElementById('tick_4').innerHTML = x.split('$$')[11];
					document.getElementById('tmo_4').innerHTML = x.split('$$')[12];
					document.getElementById('nom_5').innerHTML = x.split('$$')[13];
					document.getElementById('tick_5').innerHTML = x.split('$$')[14];
					document.getElementById('tmo_5').innerHTML = x.split('$$')[15];
					document.getElementById('refresh3').style.display = 'none';
					document.getElementById('refresh4').style.display = '';
					document.getElementById('refresh8').style.display = 'none';
    		    }
    		}
    	});
	}
	cuadros();
	busquedaGraf();
	busquedaGraf2();
    grafico();
	busqueda();
	

	function act_board(){
	    document.getElementById("refresh5").style.display = '';
	    document.getElementById('refresh9').style.display = '';
	    document.getElementById('refresh6').style.display = 'none';
	    spin2();
        setTimeout("cuadros();document.getElementById('refresh5').style.display = 'none';document.getElementById('refresh6').style.display = '';document.getElementById('refresh9').style.display = 'none';", 2000);
	}
	

	function actu_graf(){
	    document.getElementById("refresh1").style.display = '';
	    document.getElementById('refresh7').style.display = '';
	    document.getElementById('refresh2').style.display = 'none';
	    setTimeout("busquedaGraf();busquedaGraf2();grafico();document.getElementById('refresh1').style.display = 'none';document.getElementById('refresh2').style.display = '';document.getElementById('refresh7').style.display = 'none';", 2000);
	}
	
	function actu_tmo(){
	    document.getElementById("refresh3").style.display = '';
	    document.getElementById('refresh8').style.display = '';
	    document.getElementById('refresh4').style.display = 'none';
	    spin();
	    setTimeout("busqueda();", 2000);
	}
	
  function pro_cargaeyeall(){
	$("#eyeall1").load('4_COLEGA/php/dash/tmo_all.php'); 
  }
	
  function pro_cargaeyeone(){
	$("#eyeone1").load('4_COLEGA/php/dash/tmo_one.php'); 
  }
	
</script>

</body>
</html>

<?php
        }else{//else del validar si esta bloqueado.
		    session_destroy();
			echo '<script language =  javascript>  alert("Usuario Bloqueado, contacte al administrador"); self.location = "index.php"; </script>';
		}
	}else{
	   echo '<script language =  javascript>  alert("Sesión Caducada. Vuelve a iniciar sesión"); </script>';
	   echo '<script language =  javascript>  self.location = "index.php" </script>';
	}
	mysqli_close($enlace);
?>