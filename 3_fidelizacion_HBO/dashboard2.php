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
        Ventas HBO - Impulsa SC
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
       
       		
        <!-- ./col -->
        <div class="col-lg-4 col-xs-7">

        </div>
		<!-- ./col -->
		
		
		
		
		
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <img src="3_fidelizacion_HBO/img/3_fidelizacion_HBO.png" width="250" height="180">
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
              <h3 class="box-title">Estado de Ventas:</h3>&nbsp&nbsp&nbsp
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
              <h3 class="box-title">TOP 5 VENTAS</h3>
              <div class="pull-right"><a href="#" id="allTMO" data-toggle="modal" data-target="#modal-eyeHBO">&nbsp <i class="fa fa-eye" onClick="pro_cargaeyeallHBO();" title="Ver Todas las Ventas"></i></a><a href="#" id="iconact2">&nbsp &nbsp <i id="refresh8" style="display:none"> Actualizando.. &nbsp</i><i id="refresh3" style="display:none" class="fa fa-refresh fa-spin"></i><i id="refresh4" class="fa fa-refresh" onClick="actu_tmo();"  title="Actualizar TOP 5 Ventas"></i></a> &nbsp</div>
            </div>   
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Asesor</th>
                  <th style="padding-right: 35px;">Ventas</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td><span id="nom_1"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 27px;"><span id="tick_1"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td><span id="nom_2"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 27px;"><span id="tick_2"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td><span id="nom_3"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 27px;"><span id="tick_3"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td><span id="nom_4"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 27px;"><span id="tick_4"><i class="fa fa-refresh fa-spin"></i></span></td>
                </tr>
				<tr>
                  <td>5.</td>
                  <td><span id="nom_5"><i class="fa fa-refresh fa-spin"></i></span></td>
                  <td style="padding-left: 27px;"><span id="tick_5"><i class="fa fa-refresh fa-spin"></i></span></td>
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
  

        <div class="modal fade" id="modal-eyeHBO">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div id="eyeall1HBO">
                            
                    </div>
                </div>
            </div>
        </div>
        


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
      
  }
  

  spin();
  

  function busquedaGrafHBO(){
        $.ajax({
            async: false,
          	type: 'POST',
          	url: '3_fidelizacion_HBO/dashboard/val_GrafHBO.php', 
          	success: function(x){
                if(x==1){
                    var1 = 0;
                    var2 = 0;
                    var3 = 0;
                    var4 = 0;
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
                        if(x.split('$$')[i] == '4'){
                          var4 = x.split('$$')[i+1];
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
                            var4 = '0';
                          }
                          if(i == '9'){
                            var5 = '0';
                          }
                        }
                    }

                }
          	}
        });
    }
  
    function busquedaGraf2HBO(){
        $.ajax({
            async: false,
          	type: 'POST',
          	url: '3_fidelizacion_HBO/dashboard/val_Graf2HBO.php', 
          	success: function(p){
                if(p==1){
                         var6 = 0;
                         var7 = 0;
                         var8 = 0;
                         var9 = 0;
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
                        if(p.split('$$')[j] == '4'){
                          var9 = p.split('$$')[j+1];
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
                             var9 = '0';
                          }
                          if(j == '9'){
                             var10 = '0';
                          }
                        }
                    }
                }
          	}
        });
    }
  
  $.widget.bridge('uibutton', $.ui.button);
  function graficoHBO(){
    var areaChartData = {
      labels  : ['Venta Efectiva', 'No Contesta', 'Agendado', 'No desea', 'Equivocado'],
      datasets: [
        {
          label               : 'Mes anterior',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [var6, var7, var8, var9, var10]
        },
        {
          label               : 'Mes Actual',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [var1, var2, var3, var4, var5]
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
  
  
    function busquedaHBO(){
    	$.ajax({
    		type: 'POST',
    		url: '3_fidelizacion_HBO/dashboard/val_dash.php', 
    		success: function(x){
    		    if(x==1){
    		        document.getElementById('nom_1').innerHTML = 'No info';
					document.getElementById('tick_1').innerHTML = 'No info';
					document.getElementById('nom_2').innerHTML = 'No info';
					document.getElementById('tick_2').innerHTML = 'No info';
					document.getElementById('nom_3').innerHTML = 'No info';
					document.getElementById('tick_3').innerHTML = 'No info';
					document.getElementById('nom_4').innerHTML = 'No info';
					document.getElementById('tick_4').innerHTML = 'No info';
					document.getElementById('nom_5').innerHTML = 'No info';
					document.getElementById('tick_5').innerHTML = 'No info';
					document.getElementById('refresh3').style.display = 'none';
					document.getElementById('refresh4').style.display = '';
					document.getElementById('refresh8').style.display = 'none';
    		    }else{
    		        document.getElementById('nom_1').innerHTML = x.split('$$')[1];
					document.getElementById('tick_1').innerHTML = x.split('$$')[2];
					document.getElementById('nom_2').innerHTML = x.split('$$')[4];
					document.getElementById('tick_2').innerHTML = x.split('$$')[5];
					document.getElementById('nom_3').innerHTML = x.split('$$')[7];
					document.getElementById('tick_3').innerHTML = x.split('$$')[8];
					document.getElementById('nom_4').innerHTML = x.split('$$')[10];
					document.getElementById('tick_4').innerHTML = x.split('$$')[11];
					document.getElementById('nom_5').innerHTML = x.split('$$')[13];
					document.getElementById('tick_5').innerHTML = x.split('$$')[14];
					document.getElementById('refresh3').style.display = 'none';
					document.getElementById('refresh4').style.display = '';
					document.getElementById('refresh8').style.display = 'none';
    		    }
    		}
    	});
	}

	busquedaGrafHBO();
	busquedaGraf2HBO();
    graficoHBO();
	busquedaHBO();
	


	function actu_graf(){
	    document.getElementById("refresh1").style.display = '';
	    document.getElementById('refresh7').style.display = '';
	    document.getElementById('refresh2').style.display = 'none';
	    setTimeout("busquedaGrafHBO();busquedaGraf2HBO();graficoHBO();document.getElementById('refresh1').style.display = 'none';document.getElementById('refresh2').style.display = '';document.getElementById('refresh7').style.display = 'none';", 2000);
	}
	
	function actu_tmo(){
	    document.getElementById("refresh3").style.display = '';
	    document.getElementById('refresh8').style.display = '';
	    document.getElementById('refresh4').style.display = 'none';
	    spin();
	    setTimeout("busquedaHBO();", 2000);
	}
	
  function pro_cargaeyeallHBO(){
	$("#eyeall1HBO").load('3_fidelizacion_HBO/dashboard/tmo_allHBO.php'); 
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