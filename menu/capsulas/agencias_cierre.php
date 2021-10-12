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
      <table id="exampleC2019" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Región</th>
                <th>Provincia</th>
                <th>Agencia</th>
                <th>Observación</th>
            </tr>
            </thead>
           <tbody>
                    <tr><td>REGION 1</td><td>CARCHI</td><td>TULCAN</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>CARCHI</td><td>EL ANGEL</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>CARCHI</td><td>MIRA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>CARCHI</td><td>SAN GABRIEL</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>ESMERALDAS</td><td>ESMERALDAS CENTRO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>ESMERALDAS</td><td>MULTIPLAZA ESMERALDAS</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>ESMERALDAS</td><td>LIMONES</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>ESMERALDAS</td><td>MUISNE</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>ESMERALDAS</td><td>SAN LORENZO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>ESMERALDAS</td><td>QUININDE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>ESMERALDAS</td><td>ATACAMES</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>ESMERALDAS</td><td>REFINERIA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>IMBABURA</td><td>IBARRA CENTRO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>IMBABURA</td><td>OTAVALO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>IMBABURA</td><td>IBARRA NORTE</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>IMBABURA</td><td>COTACACHI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>IMBABURA</td><td>TEODORO GOMEZ</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 1</td><td>IMBABURA</td><td>ATUNTAQUI</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>IMBABURA</td><td>LA PLAZA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>SUCUMBIOS</td><td>LAGO AGRIO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 1</td><td>SUCUMBIOS</td><td>SHUSHUFINDI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>NAPO</td><td>TENA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>NAPO</td><td>BAEZA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>ORELLANA</td><td>EL COCA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>ORELLANA</td><td>JOYA DE LOS SACHAS</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>ORELLANA</td><td>TIPUTINI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>DORAL</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>CONDADO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>VIVALDI</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>COTOCOLLAO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>VILLAFLORA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>SAN LUIS</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>QUICENTRO SUR</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>QUICENTRO NORTE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>SANGOLQUI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>TUMBACO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>QUITO CENTRO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>SCALA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>CONOCOTO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>MARIANITAS</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>GUAMANI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>RECREO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>PINTADO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>LA LUZ</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>CAYAMBE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>SAN RAFAEL</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>CALDERON</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>MACHACHI</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>EL BOSQUE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 2</td><td>PICHINCHA</td><td>QUINCHE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>CHIMBORAZO</td><td>RIOBAMBA CENTRO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>CHIMBORAZO</td><td>PASEO SHOPPING RIOBAMBA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>CHIMBORAZO</td><td>TERMINAL TERRESTRE</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>CHIMBORAZO</td><td>RIOBAMBA SUR</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>CHIMBORAZO</td><td>PLAZA BARRIGA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>CHIMBORAZO</td><td>ALAUSI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>CHIMBORAZO</td><td>CHUNCHI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>COTOPAXI</td><td>LATACUNGA CENTRO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>COTOPAXI</td><td>SALCEDO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>COTOPAXI</td><td>LA MANA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>COTOPAXI</td><td>SAQUISILI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>COTOPAXI</td><td>PUJILI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>PASTAZA</td><td>PUYO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>PASTAZA</td><td>SHELL</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>PASTAZA</td><td>PALORA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 3</td><td>TUNGURAHUA</td><td>MALL DE LOS ANDES</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>TUNGURAHUA</td><td>AMBATO SUR</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>TUNGURAHUA</td><td>MULTIPLAZA AMBATO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>TUNGURAHUA</td><td>AMBATO CENTRO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>TUNGURAHUA</td><td>IZAMBA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>TUNGURAHUA</td><td>BAÑOS</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>TUNGURAHUA</td><td>PELILEO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 3</td><td>TUNGURAHUA</td><td>PILLARO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>GALAPAGOS</td><td>SANTA CRUZ</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>GALAPAGOS</td><td>SAN CRISTOBAL</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>GALAPAGOS</td><td>ISABELA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>MALL DEL PACIFICO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>MANTA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>PORTOVIEJO 10 DE AGOSTO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>CHONE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>PORTOVIEJO SHOPPING</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>JIPIJAPA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>EL CARMEN</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>BAHIA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>MONTECRISTI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>SHOPPING BAHIA DE CARAQUEZ</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>CALCETA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>CHARAPOTO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>JUNIN</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>PAJAN</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>PEDERNALES</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>PICHINCHA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>PORTOVIEJO LOS PINOS</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>PUERTO LOPEZ</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>ROCAFUERTE</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>SANTA ANA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>MANABI</td><td>TOSAGUA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 4</td><td>SANTO DOMINGO</td><td>SANTO DOMINGO CENTRO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>SANTO DOMINGO</td><td>SANTA MARTHA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 4</td><td>SANTO DOMINGO</td><td>LA CONCORDIA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>BOLIVAR</td><td>GUARANDA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>BOLIVAR</td><td>SAN JOSE DE CHIMBO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>BOLIVAR</td><td>SAN MIGUEL DE BOLIVAR</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>BOLIVAR</td><td>CALUMA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>FLORIDA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>PORTETE</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>EL FORTIN</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>MAPRI</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>MALL DEL SUR</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>BOYACA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>25 DE JULIO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>CORREOS</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>DURAN</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>MALL DEL SOL</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>MILAGRO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>ORQUIDEAS</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>TERMINAL TERRESTRE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>KENNEDY</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>SAN MARINO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>DAULE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>PLAYAS</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>PUNTILLA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>CITY MALL</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>RIOCENTRO SUR</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>EL EMPALME</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>MILAGRO SHOPPING</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>TERMINAL TERRESTRE PA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>BALZAR</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>POLICENTRO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>PLAZA COLONIA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>ALBAN BORJA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>GUAYAS</td><td>NOBOL</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>LOS RIOS</td><td>BABAHOYO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>LOS RIOS</td><td>ISLA SHOPPING BABAHOYO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>LOS RIOS</td><td>QUEVEDO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>LOS RIOS</td><td>QUEVEDO SHOPPING</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>LOS RIOS</td><td>VENTANAS</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>LOS RIOS</td><td>VINCES</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>LOS RIOS</td><td>MOCACHE</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>LOS RIOS</td><td>VALENCIA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>SANTA ELENA</td><td>LA LIBERTAD</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 5</td><td>SANTA ELENA</td><td>SANTA ELENA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 5</td><td>SANTA ELENA</td><td>SALINAS</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 6</td><td>AZUAY</td><td>CUENCA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 6</td><td>AZUAY</td><td>MALL DEL RIO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>AZUAY</td><td>MILENIUM</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>AZUAY</td><td>PAUTE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>AZUAY</td><td>GIRON</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 6</td><td>AZUAY</td><td>GUALACEO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>AZUAY</td><td>PONCE ENRIQUEZ</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>AZUAY</td><td>ISLA MIRAFLORES</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 6</td><td>Total AZUAY</td><td>ISLA MONAY SHOPPING</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 6</td><td>CAÑAR</td><td>BIBLIAN</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 6</td><td>CAÑAR</td><td>TRONCAL</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>CAÑAR</td><td>AZOGUES</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>MORONA SANTIAGO</td><td>LIMON INDANZA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 6</td><td>MORONA SANTIAGO</td><td>MACAS</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>MORONA SANTIAGO</td><td>TIWINTZA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>MORONA SANTIAGO</td><td>TAISHA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>MORONA SANTIAGO</td><td>SUCUA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 6</td><td>MORONA SANTIAGO</td><td>MENDEZ</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 6</td><td>MORONA SANTIAGO</td><td>GUALAQUIZA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 7</td><td>EL ORO</td><td>MACHALA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 7</td><td>EL ORO</td><td>PASAJE</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 7</td><td>EL ORO</td><td>HUAQUILLAS</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 7</td><td>EL ORO</td><td>PORTOVELO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 7</td><td>EL ORO</td><td>SANTA ROSA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 7</td><td>EL ORO</td><td>VENEZUELA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 7</td><td>EL ORO</td><td>ISLA PASEO SHOPPING</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 7</td><td>EL ORO</td><td>EL GUABO</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 7</td><td>LOJA</td><td>LOJA CENTRO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 7</td><td>LOJA</td><td>LOJA SUR</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 7</td><td>LOJA</td><td>CATAMAYO</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 7</td><td>LOJA</td><td>ALAMOR</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 7</td><td>LOJA</td><td>CATACOCHA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 7</td><td>LOJA</td><td>MACARA</td><td>CIERRE POR FUERZA MAYOR</td></tr>
                    <tr><td>REGION 7</td><td>ZAMORA CHINCHIPE</td><td>ZAMORA</td><td>ABIERTO</td></tr>
                    <tr><td>REGION 7</td><td>ZAMORA CHINCHIPE</td><td>EL PANGUI</td><td>CIERRE POR FUERZA MAYOR</td></tr>
           </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>


<!-- page script -->
<script>
   
  $(function () {
    $('#exampleC2019').DataTable( {
        "destroy": true,
        "pageLength": 10,
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
            "lengthMenu":     "Mostrar _MENU_ canales",
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
