<?php
    session_start();
    include '../../../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 

            $a1 = $_GET['a1']; //seleccion
        
            $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
            
            date_default_timezone_set("America/Guayaquil");
            $date_now = date('Y-m-d');
            
            if ($a1 === "0"){
                $fch1 = $date_now;
                $fch2 = $date_now;
            }else if ($a1 === "1"){
                $date_ayer = strtotime('-1 day', strtotime($date_now));
                $date_ayer = date('Y-m-d', $date_ayer);
                $fch1 = $date_ayer;
                $fch2 = $date_ayer;
                //echo 'Ayer fue: ' . $date_ayer;
            }else if ($a1 === "2"){
                $prt = substr($date_now, 0, 8);
                $prt = $prt . '01';
                $fch1 = $prt;
                $fch2 = $date_now;
                //echo 'El mes va desde el: ' . $prt . ' hasta el: ' . $date_now;
            }else if ($a1 === "3"){
                $prt2 = substr($date_now, -5,2);
                $prt3 = $prt2 - 1;
                if ($prt3 === 0){
                    $prt3 = 12;
                }
        
                //valido hasta que meses son de 31
                if ($prt3 === 1 || $prt3 === 3 || $prt3 === 5 || $prt3 === 7 || $prt3 === 8 || $prt3 === 10 || $prt3 === 12){
                    $dia_final_m_a = 31;
                //valido si es hasta el 30
                }else if($prt3 === 4 || $prt3 === 6 || $prt3 === 9 || $prt3 === 11){
                    $dia_final_m_a = 30;
                //sino por defecto es febrero
                }else{
                    $dia_final_m_a = 29;
                }
                
                if ($prt2 === "01"){
                    $prt3 = 12;
                    //validar anio
                    $anio = substr($date_now, 0,5);
                    $anioT = $anio - 1;
                    $prt4 = $anioT . '-' . $prt3 . '-01' ;
                    $prt5 = $anioT . '-' . $prt3 . '-' .$dia_final_m_a ;
                    $fch1 = $prt4;
                    $fch2 = $prt5;
                   //echo 'El mes anterior va desde el: ' . $prt4 . ' hasta el: ' . $prt5;
                }else{
        
                    $prt3 = $prt2 - 1;
                    $anio = substr($date_now, 0,5);
                    if ($prt3 === 10 || $prt3 === 11 || $prt3 === 12){
                        $prt4 = $anio . '-' . $prt3 . '-01' ;
                        $prt5 = $anio . '-' . $prt3 . '-' .$dia_final_m_a ;
                    }else{
                        $prt4 = $anio . '0' . $prt3 . '-01' ;
                        $prt5 = $anio . '0' . $prt3 . '-' .$dia_final_m_a ;
                    }
                    $fch1 = $prt4;	
                    $fch2 = $prt5;
                    //echo 'El mes anterior va desde el: ' . $prt4 . ' hasta el: ' . $prt5;
                }
        
            }
        	
        ?>
        <!DOCTYPE html>
        <html>
        <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
          
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <!-- Tell the browser to be responsive to screen width -->
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
          <!-- DataTables -->
          <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        
        
          <link rel="stylesheet"
                href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        </head>
        
            <div class="modal-body"> 
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
        				<th>Anillamador</th>
        				<th>Fecha llamada</th>
        				<th>TMO</th>
        				<th>Ticket Omnicanal</th>
        				<th>Estado</th>
        				<th>Cedula</th>
        				<th>Observacion</th>
        				<th>Acciones</th>
        			</tr>
                    </thead>
                    <tbody>
        				<?php
        					$block = mysqli_query($enlace, "SELECT id, anillamador, date_format(fecha_call, '%d-%m-%Y') as fecha_call, hora_inicio, tmo, omnicanal, estado, cedula, observacion FROM gestion WHERE id_usuario={$_SESSION['id']} AND fecha_call BETWEEN '$fch1' AND '$fch2'");
        					mysqli_data_seek ($block, 0);
        					while($rows=mysqli_fetch_array($block)){
        				?>
        					<tr id="<?php echo $rows['id']?>">
        						<td><?php echo $rows['anillamador'] ?></td>
        						<td><?php echo $rows['fecha_call'] ?></td>
        						<?php $tmoM = floor($rows['tmo'] / 60);
                                    $tmoM2 = $tmoM * 60;
                                    $tmoS = $rows['tmo'] - $tmoM2;
                                    if(strlen($tmoM) == '1'){
                                        $tmoM = "0" . $tmoM;
                                    }
                                    if(strlen($tmoS) == '1'){
                                        $tmoS = "0" . $tmoS;
                                    }
                                    $tmoT = $tmoM . ":" . $tmoS;
                                ?>
        						<td><?php echo $tmoT ?></td>
        						<td><?php echo $rows['omnicanal'] ?></td>
        						<?php if ($rows['estado'] === "1"){?>
        						   <td>Resuelto</td> 
        						<?php }else if ($rows['estado'] === "2"){ ?>
        						   <td>Interaccion</td>
        						<?php }else if ($rows['estado'] === "3"){ ?>
        						   <td>Escalado N2</td>
        						<?php }else if ( $rows['estado'] === "4"){ ?>
        						   <td>Escalado VT</td>
        						<?php }else if ( $rows['estado'] === "5"){ ?>
        						   <td>Sin audio / Caida</td> 
        						<?php }else if ( $rows['estado'] === "6"){ ?>
        						   <td>Guia Teléfonica</td>
        						<?php } ?>
        						<td><?php echo $rows['cedula'] ?></td>
        						<td><?php echo $rows['observacion'] ?></td>
        						<td><div align="center" id="<?php echo $rows['anillamador']?>"><a href="#"><img src="assets/img/eliiminar.png" onClick="pro_elim(<?php echo $rows['id']?>, <?php echo $rows['anillamador']?>);"  width="15" height="15" title="Eliminar registro"></a></div></td>
        					</tr>
        				<?php
        					} 
        				?>
                    </tbody>
                  </table>
                  </div> 
                    <div class="modal-footer">
                        
                        <button type="button" title="Descargar en formato .xls" onClick="descargar_excel(this);" id="<?php echo $a1 ?>" class="btn btn-success pull-left" data-dismiss="modal"><i class="fa fa-download"></i>&nbsp Excel</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
        
        <!-- DataTables -->
        <script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- page script -->
        <script>
           
          $(function () {
            $('#example2').DataTable( {
                "destroy": true,
                "pageLength": 5,
                "searching": true,
                "lengthChange": true,
                language: {
                    "decimal":        "",
                    "emptyTable":     "No hay registro de gestion",
                    "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                    "infoFiltered":   "(Filtro de _MAX_ total registros)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ registros",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "search":         "Buscar:",
                    "zeroRecords":    "No se encontraron coincidencias",
                    "paginate": {
                    "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "Proximo",
                        "previous":   "Anterior"
                    },
                    "aria": {
                        "sortAscending":  ": Activar orden de columna ascendente",
                        "sortDescending": ": Activar orden de columna desendente"
                    }
                }
            } );
          })
          
            function pro_elim(id, id2){
                if (confirm("\xbfEliminar registro?")){
                    $("#" + id2).hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
                    var dataString = 'a1=' + id;
        		        $.ajax({
        					type: 'POST',
        					url: 'php/user/gestiondiaria/val_tab_elim.php', 
        					data:  dataString, 
        					success: function(x){
                                if(x==1){
        					        $("#" + id).fadeOut(800);
        					        pro_charge();
        					        pro_refresh();
        					    }
        					}
        		        });
                }
            }
            
            function descargar_excel(x){
               self.location = "php/user/gestiondiaria/download_excel.php?a1=" + x.id;
            }
          
        
        </script>
        </body>
        </html>

<?php 

  }else{
    echo '<script language =  javascript>  alert("Sesión Caducada. Vuelve a iniciar sesión"); </script>';
    echo '<script language =  javascript>  self.location = "index.php" </script>';
  }
  mysqli_close($enlace);
?>
