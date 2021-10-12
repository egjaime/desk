<?php
  //sleep(1);
  session_start();
  include '../../php/conexion_bd.php';
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
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

    <div class="modal-body"> 
      <table id="exampleTB" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>Plan - Servicio - Equipo</th>
              <th>Precio sin IMP</th>
              <th>Precio con IMP</th>
              <th>Observaciones</th>
            </tr>

            </thead>
           <tbody>
                <tr>
                  <td>Paquete SD</td>
                  <td>$20,50</td>
                  <td>$26,40</td>
                  <td>71 canales SD (Incluido 10 de audio) y 9 promocionales (7 SD y 2HD)</td>
                </tr>
                <tr>
                  <td>Paquete HD</td>
                  <td>$28,50</td>
                  <td>$36,71</td>
                  <td>71 canales SD (Incluido 10 de audio) + (10 canales HD) 9 promocionales (7 SD y 2HD)</td>
                </tr>
                <tr>
                  <td>Plan Galápagos</td>
                  <td>$30,00</td>
                  <td>$38,64</td>
                  <td>30 canales SD</td>
                </tr>
                <tr>
                  <td>Plan Total Plus</td>
                  <td>$10,00</td>
                  <td>$12,88</td>
                  <td>29 canales SD</td>
                </tr>
                <tr>
                  <td>Fox Premium</td>
                  <td>$10,00</td>
                  <td>$12,88</td>
                  <td>8 canales SD y 1 canal HD</td>
                </tr>
                <tr>
                  <td>HBO Premium</td>
                  <td>$10,00</td>
                  <td>$12,88</td>
                  <td>8 canales SD</td>
                </tr>
                <tr>
                <td>Play Boy Mensual</td>
                  <td>$5,50</td>
                  <td>$7,08</td>
                  <td>1 canales SD. NO EXISTE PRORRATEO. Se activa en 1 o todos los decodificadores.</td>
                </tr>
                <tr>
                <td>Play Boy Diario</td>
                  <td>$3,90</td>
                  <td>$5,02</td>
                  <td>1 canales SD (Por 24 horas desde la activación). NO EXISTE PRORRATEO. Se activa en 1 o todos los decodificadores.</td>
                </tr>
                <tr>
                  <td>Hot Pack</td>
                  <td>$10,00</td>
                  <td>$12,88</td>
                  <td>3 canales SD (Play Boy, Venus, Sextreme). Costo aplica por cada deco activado. Se podrá activar en 1 o todos los decos. Sólo modalidad mensual. Si activa en todos los decos, los próximos decos que instale se le activará automaticamente el plan.</td>
                </tr>
                <tr>
                  <td>Traslado Interno - Galápagos</td>
                  <td>$15,00</td>
                  <td>$19,32</td>
                  <td>Entiéndase traslado interno a todo movimiento de antena o decodificadores que se realice dentro de una misma unidad habitacional sin que esto implique una actualización de dirección del contrato.</td>
                </tr>
                <tr>
                  <td>Traslado Externo - Galápagos</td>
                  <td>$50,00</td>
                  <td>$64,40</td>
                  <td>El cliente deberá trasladar los equipos (Decodificadores SD/HD, Tarjeta Inteligente,Controles remotos SD/HD, Cables RCA/HDMI)a la nueva dirección. </td>
                </tr>
                <tr>
                  <td>Traslado Interno - Resto del País</td>
                  <td>$15,00</td>
                  <td>$19,32</td>
                  <td>Entiéndase traslado interno a todo movimiento de antena o decodificadores que se realice dentro de una misma unidad habitacional sin que esto implique una actualización de dirección del contrato.</td>
                </tr>
               <tr>
                  <td>Traslado Externo - Resto del País</td>
                  <td>$15,00</td>
                  <td>$19,32</td>
                  <td>El cliente deberá trasladar los equipos (Decodificadores SD/HD, Tarjeta Inteligente,Controles remotos SD/HD, Cables RCA/HDMI)a la nueva dirección. </td>
                </tr>
                <tr>
                  <td>Migración Deco Principal</td>
                  <td>$20,00</td>
                  <td>$25,76</td>
                  <td>El cliente deberá trasladar los equipos (Decodificadores SD/HD, Tarjeta Inteligente,Controles remotos SD/HD, Cables RCA/HDMI)a la nueva dirección. </td>
                </tr>
                <tr>
                  <td>Migración Deco Adicional</td>
                  <td>$10,00</td>
                  <td>$12,88</td>
                  <td>El cliente deberá trasladar los equipos (Decodificadores SD/HD, Tarjeta Inteligente,Controles remotos SD/HD, Cables RCA/HDMI)a la nueva dirección. </td>
                </tr>
                <tr>
                  <td>Garantia SD</td>
                  <td>$2,00</td>
                  <td>$2,24</td>
                  <td>Sólo para paquetes Zapper, Paquete SD y Paquete HD. (Cubre): Decodificador, Antena, LNB, Control, Cables (RCA, HDMI), Cable de poder, Tarjeta Inteligente.(Eventos): Robo (1 vez al año), Desperfecto de fabrica (Ilimitado), Desperfecto por uso (Ilimitado), Traslado (2 veces al año), Visita Técnica (Ilimitado). No aplica ICE solo IVA. Aplica 45 días despues de la celebración del contrato.</td>
                </tr>
                <tr>
                  <td>Garantia HD</td>
                  <td>$4,00</td>
                  <td>$4,48</td>
                  <td>Sólo para paquetes Zapper, Paquete SD y Paquete HD. (Cubre): Decodificador, Antena, LNB, Control, Cables (RCA, HDMI), Cable de poder, Tarjeta Inteligente.(Eventos): Robo (1 vez al año), Desperfecto de fabrica (Ilimitado), Desperfecto por uso (Ilimitado), Traslado (2 veces al año), Visita Técnica (Ilimitado). No aplica ICE solo IVA. Aplica 45 días despues de la celebración del contrato.</td>
                </tr>
                <tr>
                  <td>Kit Prepago</td>
                  <td>$58,04</td>
                  <td>$65,00</td>
                  <td>Por la compra del Kit el cliente recibe 15 DÍAS de servicio precargado-Paquete Básico. Luego de esto el cliente puede recargar en los puntos autorizados.</td>
                </tr>
                <tr>
                  <td>Reposición Deco SD</td>
                  <td>$60,04</td>
                  <td>$77,28</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición Deco HD</td>
                  <td>$140,00</td>
                  <td>$180,32</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición Antena</td>
                  <td>$30,00</td>
                  <td>$38,64</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición LNB</td>
                  <td>$12,00</td>
                  <td>$15,46</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición Tarjeta Inteligente</td>
                  <td>$20,00</td>
                  <td>$25,76</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición Control Remoto</td>
                  <td>$8,00</td>
                  <td>$10,30</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición Cable de Poder</td>
                  <td>$5,00</td>
                  <td>$6,44</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición Cable HDMI</td>
                  <td>$40,00</td>
                  <td>$52,52</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición Disco DVR</td>
                  <td>$72,00</td>
                  <td>$92,74</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Reposición Cable RCA</td>
                  <td>$10,00</td>
                  <td>$12,88</td>
                  <td>Valores aplican en el Continente Ecuatoriano como en las Islas Galápagos. Los impuestos a cargar se corresponde al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Suspensión Temporal</td>
                  <td>$5,00</td>
                  <td>$6,44</td>
                  <td>CLIENTE DEBE SOLICITAR ESTE SERVICIO POR EL CIS. Se puede  solicitar 2 veces al año por 30 días cada vez, no consecutivas. </td>
                </tr>
                <tr>
                  <td>Renta deco adicional</td>
                  <td>$7,00</td>
                  <td>$9,02</td>
                  <td>Ver promociones activas. Los impuestos a cargar se corresponden al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Renta deco adicional - Galápagos</td>
                  <td>$10,00</td>
                  <td>$12,88</td>
                  <td>Ver promociones activas. Los impuestos a cargar se corresponden al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Instalación Deco Principal</td>
                  <td>$20,00</td>
                  <td>$25,76</td>
                  <td>Ver promociones activas. Los impuestos a cargar se corresponden al 15% del ICE y 12% del IVA.</td>
                </tr>
                <tr>
                  <td>Instalación Deco Adicional</td>
                  <td>$10,00</td>
                  <td>$19,32</td>
                  <td>Ver promociones activas. Los impuestos a cargar se corresponden al 15% del ICE y 12% del IVA.</td>
                </tr>
            </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>


<!-- page script -->
<script>
   
  $(function () {
    $('#exampleTB').DataTable( {
        "destroy": true,
        "pageLength": 4,
        "searching": true,
        "lengthChange": false,
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
	mysqli_close($enlace);
?>
