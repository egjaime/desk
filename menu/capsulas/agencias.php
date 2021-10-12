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
      <table id="example2019"  class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>Prov.</th>
              <th>Agen.</th>
              <th>Dir.</th>
              <th>L</th>
              <th>M</th>
              <th>M</th>
              <th>J</th>
              <th>V</th>
              <th>S</th>
              <th>D</th>
              <th>¿Recibe Equipo?</th>
            </tr>
            </thead>
           <tbody>
<tr><td>CARCHI</td><td>EL ANGEL</td><td>AV. ESPEJOy JOSE BENIGNO GRIJALVA S/N</td><td>08H00-17H00</td><td>08H00-17H00</td><td>08H00-17H00</td><td>08H00-17H00</td><td>08H00-17H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>CARCHI</td><td>MIRA</td><td>GARCIA MORENOy LA CAPILLA S/N</td><td>08H00-17H00</td><td>08H00-17H00</td><td>08H00-17H00</td><td>08H00-17H00</td><td>08H00-17H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>CARCHI</td><td>TULCAN</td><td>OLMEDOy JUNIN S/N</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ESMERALDAS</td><td>ATACAMES</td><td>LUIS TELLOy JUAN MONTALVO S/N</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ESMERALDAS</td><td>MUISNE</td><td>ISIDRO AYORAy 5 DE AGOSTO S/N</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ESMERALDAS</td><td>REFINERIA</td><td>VIA A REFINERIAy 1 CUADRA DEL REDONDEL S/N</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td>08H00-14H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ESMERALDAS</td><td>SAN LORENZO</td><td>CAMILO PONCEy JOSE GARCES S/N</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ESMERALDAS</td><td>ESMERALDAS CENTRO</td><td>AV. LIBERTADy MURIEL 608</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>IMBABURA</td><td>TEODORO GOMEZ</td><td>AV. TEODORO GÓMEZ y AV. ATAHUALPA S/N</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>IMBABURA</td><td>LA PLAZA</td><td>AV. P.V. MALDONADO y MANABÍ S/N</td><td>09H00-19H00</td><td>09H00-19H00</td><td>09H00-19H00</td><td>09H00-19H00</td><td>09H00-19H00</td><td>09H00-19H00</td><td>09H00-19H00</td><td>NO</td></tr>
<tr><td>IMBABURA</td><td>ATUNTAQUI</td><td>BOLIVARy OLMEDO 1331</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>IMBABURA</td><td>IBARRA CENTRO</td><td>SUCREy GARCÍA MORENO 456</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>SUCUMBIOS</td><td>SHUSHUFINDI</td><td>AV. NACIONALy COLOMBIA S/N</td><td>08H00-13H00</td><td>08H00-13H00</td><td>08H00-13H00</td><td>08H00-13H00</td><td>08H00-13H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>SUCUMBIOS</td><td>LAGO AGRIO</td><td>18 DE NOVIEMBREy FRANCISCO DE ORELLANA S/N</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td>08H00-16H00</td><td></td><td></td><td>SI</td></tr>
<tr><td>NAPO</td><td>TENA</td><td>JUAN MONTALVOy OLMEDO 356</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>NAPO</td><td>PUNTO DE ATENCION BAEZA</td><td>17 DE ENEROy QUIJOS S/N</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ORELLANA</td><td>EL COCA</td><td>ELOY ALFAROy 6 DE DICIEMBRE S/N</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ORELLANA</td><td>JOYA DE LOS SACHAS</td><td>AV. FUNDADORES Y AMAZONAS</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td>08:00 - 14:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>CONDADO</td><td>Av. Mariscal Sucre y John F Kennedy - C.C.El Condado Pb. CNT -</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>09:30 - 17:30</td><td>09:30 - 17:30</td><td></td><td>NO</td></tr>
<tr><td>Pichincha</td><td>Quicentro Sur</td><td>Av. Morán Valverde, C.C Quicentro Sur Local 3940</td><td>10:00 - 18:30</td><td>10:00 - 18:30</td><td>10:00 - 18:30</td><td>09:00 - 17:00</td><td>09:00 - 17:00</td><td>09:00 - 17:00</td><td>09:00 - 17:00</td><td>NO</td></tr>
<tr><td>Pichincha</td><td>Scala</td><td>Av. Interoceánica, C.C. Scala Pb.</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 17:00</td><td>10:00 - 17:00</td><td>10:00 - 17:00</td><td>NO</td></tr>
<tr><td>Pichincha</td><td>Vivaldi</td><td>Amazonas y Corea</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>El Bosque</td><td>Av. El Parque y Av de Torres</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>10:00 - 17:00</td><td>10:00 - 17:00</td><td></td><td>NO</td></tr>
<tr><td>Pichincha</td><td>Villaflora</td><td>Nuñez de Balboa S9-109 y Alonso de Mendoza</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>Cayambe</td><td>Ascázubí y Guayaquil / Sucre Oe 1 - 30 y Ascázubi</td><td>08:00 - 17:00</td><td>08:00 - 17:00</td><td>08:00 - 17:00</td><td>08:00 - 17:00</td><td>08:00 - 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>Tumbaco</td><td>Gaspar de Carvajal y Guayaquil</td><td>08:00 - 17:30</td><td>08:00 - 17:30</td><td>08:00 - 17:30</td><td>08:00 - 17:30</td><td>08:00 - 17:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>Cotocollao</td><td>Av. Del Maestro y Av de la Prensa</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>Quito Centro</td><td>Benalcazar N-545 y Mejía</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>San Rafael</td><td>Av. Ilaló y Río Pastaza</td><td>09:00 - 17:00</td><td>09:00 - 17:00</td><td>09:00 - 17:00</td><td>09:00 - 17:00</td><td>09:00 - 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>MARIANITAS</td><td>AV. GEOVANNY CALLESy LA CONCORDIA LOCAL 2 Y 3</td><td>08:00 A 17:00</td><td>08:00 A 17:00</td><td>08:00 A 17:00</td><td>08:00 A 17:00</td><td>08:00 A 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>Pichincha</td><td>RECREO</td><td>AV. PEDRO VICENTE MALDONADO S11-122y CENTRO COMERCIAL EL RECREO ETPA 04 LOCAL Q-181 S/N</td><td>09:00 A 19:00</td><td>09:00 A 19:00</td><td>09:00 A 19:00</td><td>09:00 A 19:00</td><td>09:00 A 17:00</td><td>09:00 A 17:00</td><td></td><td>NO</td></tr>
<tr><td>Pichincha</td><td>DORAL</td><td>AV ELOY ALFARO y 9 DE OCTUBRE N29-16</td><td>08:00 A 16:30</td><td>08:00 A 16:30</td><td>08:00 A 16:30</td><td>08:00 A 16:30</td><td>08:00 A 16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>Regional 2</td><td>SAN LUIS</td><td>AV. GENERAL RUMIÑAHUIy ISLA SANTA CLARA, C.C. SAN LUIS SHOPPING S/N</td><td>09:00 A 19:00</td><td>09:00 A 19:00</td><td>09:00 A 19:00</td><td>09:00 A 19:00</td><td>09:00 A 17:00</td><td>09:00 A 17:00</td><td>09:00 A 14:00</td><td>NO</td></tr>
<tr><td>Regional 2</td><td>EL PORTAL SHOPPING</td><td>Avenidas Simón Bolívar, Panamericana Norte y, Capitán Giovanni Calles</td><td>10:00 A 20:00</td><td>10:00 A 20:00</td><td>10:00 A 20:00</td><td>10:00 A 20:00</td><td>10:00 A 18:00</td><td>10:00 A 18:00</td><td>10:00 A 17:00</td><td>NO</td></tr>
<tr><td>CHIMBORAZO</td><td>PLAZA BARRIGA</td><td>PRIMERA CONSTITUYENTEy AV. MIGUEL ANGEL LEON S/N</td><td>8:00 -16:30</td><td>8:00 -16:30</td><td>8:00 -16:30</td><td>8:00 -16:30</td><td>8:00 -16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>CHIMBORAZO</td><td>RIOBAMBA SUR</td><td>AV. LEOPOLDO FREIREy LUXEMBURGO ESQ. S/N</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>CHIMBORAZO</td><td>ISLA PASEO SHOPPING</td><td>AV ANTONIO JOSE DE SUCRE y BEGONIAS S/N</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td></td><td>NO</td></tr>
<tr><td>CHIMBORAZO</td><td>ALAUSI</td><td>ANTONIO MORAy GUATEMALA S/N</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>CHIMBORAZO</td><td>CHUNCHI</td><td>GENERAL CORDOVA y CAPITAN RICAURTE S/N</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td></td><td></td><td>NO</td></tr>
<tr><td>CHIMBORAZO</td><td>RIOBAMBA CENTRO</td><td>TARQUIy VELOZ ESQ. S/N</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>COTOPAXI</td><td>LATACUNGA CENTRO</td><td>Belisario Quevedo 5-20 y Gral. Maldonado- Edificio CNT</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>COTOPAXI</td><td>PUJILI</td><td>SIMON BOLIVAR Y ALQUILINO CAJAS</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>COTOPAXI</td><td>SALCEDO</td><td>ANA PAREDES Y 24 DE MAYO</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>COTOPAXI</td><td>SAQUISILÍ</td><td>IMBABURAy 24 DE MAYO S/N</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>COTOPAXI</td><td>LA MANÁ</td><td>PICHINCHAy CALAVI S/N</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>COTOPAXI</td><td>LATACUNGA SUR CAC</td><td>MARQUES DE MAENZAy QUITO S/N</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>COTOPAXI</td><td>EL CORAZON</td><td>BENEDICTO TOBARy SIMON BOLIVAR S/N</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>PASTAZA</td><td>PUYO</td><td>FRANCISCO DE ORELLANAy GENERAL VILLAMIL S/N</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>PASTAZA</td><td>SHELL</td><td>ERNESTO QUIÑONEZy 10 DE NOVIEMBRE S/N</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>PASTAZA</td><td>PALORA</td><td>JUAN LEON MERAy LA FLORIDA S/N</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>TUNGURAHUA</td><td>AMBATO CENTRO</td><td>CASTILLOy BOLIVAR S/N</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>TUNGURAHUA</td><td>IZAMBA</td><td>PANAMERICANA NORTE VIA QUITOy RODRIGO PACHANO S/N</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td>8:00-17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>TUNGURAHUA</td><td>BAÑOS</td><td>VICENTE ROCAFUERTEy TOMAS HALFANS S/N</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>TUNGURAHUA</td><td>PELILEO</td><td>EUGENIO ESPEJOy GARCIA MORENO S/N</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td>8:00-16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>TUNGURAHUA</td><td>PILLARO</td><td>CARLOS TAMAYOy BOLÍVAR S/N</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>TUNGURAHUA</td><td>AMBATO SUR</td><td>AV.LOS SHYRISy CHAQUITINTA S/N</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td>08:00-17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>TUNGURAHUA</td><td>MALL DE LOS ANDES</td><td>AV. ATAHUALPAy AV. VICTOR HUGO S/N</td><td>09:00-18:00</td><td>09:00-18:00</td><td>09:00-18:00</td><td>09:00-18:00</td><td>09:00-18:00</td><td>09:00-18:00</td><td></td><td>SI</td></tr>
<tr><td>TUNGURAHUA</td><td>MULTIPLAZA AMBATO</td><td>AV AMERICAy AV. GONZALEZ SUARES S/N</td><td>09:00-18:00</td><td>09:00-18:00</td><td>09:00-18:00</td><td>09:00-18:00</td><td>09:00-18:00</td><td>09:00-18:00</td><td></td><td>SI</td></tr>
<tr><td>GALAPAGOS</td><td>SANTA CRUZ</td><td>AV. BALTRAy INDEFATIGABLE S/N</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>GALAPAGOS</td><td>SAN CRISTOBAL</td><td>AV. QUITOy AZOGUES S/N</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>GALAPAGOS</td><td>ISABELA</td><td>ESCALECIASy CACTUS S/N</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td>08:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABI</td><td>MALL DEL PACIFICO</td><td>MALL DEL PACIFICO 2 PLANTA y S/N</td><td>09:00 a 19:00</td><td>09:00 a 19:00</td><td>09:00 a 19:00</td><td>09:00 a 19:00</td><td>09:00 a 19:00</td><td>09:00 a 19:00</td><td></td><td>NO</td></tr>
<tr><td>MANABI</td><td>MONTECRISTI</td><td>CALLE 9 DE JULIO y S/N Y 23 DE OCTUBRE S/N</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABI</td><td>PUERTO LOPEZ</td><td>AVENIDA MACHALILLAy Y ELOY ALFARO S/N</td><td></td><td></td><td></td><td>09:00 a 14:00</td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABI</td><td>PORTOVIEJO 10 DE AGOSTO</td><td>FRANCISCO PACHECO Y 10 DE AGOSTO</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABI</td><td>MANTA</td><td>AV. MALECON S/Ny Y CALLE 11 S/N</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>CHONE</td><td>BOLIVAR y PICHINCHA Y COLON S/N</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>BAHIA</td><td>AV BOLIVAR y ASCAZUBI S/N</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>ISLA SHOOPING BAHIA</td><td>AV MALECON CENTRO COMERCIAL PASEO SHOPPINGy S/N</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>NO</td></tr>
<tr><td>MANABÍ</td><td>PORTOVIEJO LOS PINOS</td><td>Prolongacion de AV MANABIy AVENIDA MANABI S/N</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>PASEO SHOPPING PORTOVIEJO</td><td>AV. AMERICA y JORGE WASHINGTON CC PASEO SHOPPING LOCAL # S/N</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>09:00 a 20:00</td><td>NO</td></tr>
<tr><td>MANABÍ</td><td>CALCETA</td><td>BOLÍVAR y ENTRE PICHINCHA Y GRANDA CENTENO S/N</td><td>08:00 a 16:00</td><td></td><td>08:00 a 16:00</td><td></td><td>08:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>JUNIN</td><td>AV. ELOY ALFARO y CORONEL GARCIA S/N</td><td></td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>TOSAGUA</td><td>JUAN MONTALVOy BOLIVAR S/N</td><td></td><td>08:00 a 16:00</td><td></td><td></td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>FLAVIO ALFARO</td><td>SUCRE y BOLIVAR S/N</td><td></td><td>09:00 a 15:00</td><td></td><td></td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>EL CARMEN</td><td>SALUSTIO GILER y 4 DE DICIEMBRE S/N</td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>PEDERNALES</td><td>AV. ELOY ALFARO y VELASCO IBARRA S/N</td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>JAMA</td><td>AV 20 DE MARZO y VIVIANO REYNA S/N</td><td></td><td></td><td>09:00 a 15:00</td><td></td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>CHARAPOTO</td><td>12 DE OCTUBRE y JOSE GILCES S/N</td><td>08:00 a 17:00</td><td></td><td></td><td>08:00 a 17:00</td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>ROCAFUERTE</td><td>PICHINCHAy ROCAFURTE S/N</td><td></td><td></td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>PICHINCHA</td><td>VÍA PRINCIPAL MANTA y QUEVEDO S/N Y - S/N</td><td>08:00 a 17:00</td><td></td><td></td><td>08:00 a 17:00</td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>PAJAN</td><td>OLMEDO y CALLEJON ABEL RODRIGUEZ S/N</td><td></td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>JIPIJAPA</td><td>BOLIVAR y GUAYAS S/N</td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MANABÍ</td><td>SANTA ANA</td><td>HORACIO HIDROVOy MOREIRA Y SUCRE S/N</td><td>08:00 a 16:30</td><td></td><td></td><td>08:00 a 16:30</td><td></td><td></td><td></td><td>SI</td></tr>
<tr><td>SANTO DOMINGO</td><td>SANTA MARTHA</td><td>AV. JACINTO CORTEZy LOS INCAS S/N</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 12:00</td><td></td><td>SI</td></tr>
<tr><td>SANTO DOMINGO</td><td>LA CONCORDIA</td><td>AV. JUAN MONTALVOy SAN LUIS S/N</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>SANTO DOMINGO</td><td>SANTO DOMINGO CENTRO</td><td>AV. QUITOy AV. RIO TOACHI No. 300</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 17:00</td><td>08:00 a 12:00</td><td></td><td>SI</td></tr>
<tr><td>BOLIVAR</td><td>GUARANDA</td><td>ROCAFUERTE y SUCRE 506</td><td>08:00 - 16:00</td><td>08:00 - 16:00</td><td>08:00 - 16:00</td><td>08:00 - 16:00</td><td>08:00 - 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>GUAYAS</td><td>25 DE julio</td><td>AV 25 DE JULIOy PIO JARAMILLO S/N</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>POLICENTRO</td><td>AV. DEL PERIODISTA y DR. JUAN BAUTISTA ARZUBE. KENNEDY</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>11:00 - 18:00</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>TERMINAL TERRESTRE P.B.</td><td>BENJAMIN ROSALES y AMERICAS S/N</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>FLORIDA</td><td>Cdla Florida Norte MZ 101 Solar 1</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>MILAGRO</td><td>Pedro Carbo y 5 de Junio</td><td>08:30 - 14:00</td><td>08:30 - 14:00</td><td>08:30 - 14:00</td><td>08:30 - 14:00</td><td>08:30 - 14:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>MILAGRO SHOPPING</td><td>Pdte. Javier Espinoza y 17 de Septimbre</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>DAULE</td><td>Pedro Varbo y General Vernaza</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>EL EMPALME</td><td>Vicente Rocafuerte y Quito</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>GUAYAS</td><td>DURAN</td><td>Cdla. Primavera 2 Av. Principal y, Calle Primera, Durán</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>BOYACA</td><td>Boyacá y Luis Urdaneta</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>GUAYAS</td><td>CORREOS</td><td>Clemente Ballen 306 y Pedro Carbo</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>MAPRI</td><td>Manuel Galecio entre Ximena y Riobamba</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 14:00</td><td></td><td>SI</td></tr>
<tr><td>GUAYAS</td><td>RIOCENTRO SUR</td><td>C.C. Río Centro Sur Local 1</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>EL TRIUNFO</td><td>Av. Simón Bolívar y Horacio Fabre</td><td>08:00 - 17:00</td><td>08:00 - 17:00</td><td>08:00 - 17:00</td><td>08:00 - 17:00</td><td>08:00 - 17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>BALZAR</td><td>Av. Juan Montalvo y Esperanza Caputi</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>CENTRO COMERCIAL RIOCENTRO NORTE</td><td>Av. Francisco de Orellana Local A16</td><td>09:00 - 21:00</td><td>09:00 - 21:00</td><td>09:00 - 21:00</td><td>09:00 - 21:00</td><td>09:00 - 21:00</td><td>09:00 - 21:00</td><td>09:00 - 21:00</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>AGENCIA TERMINAL TERRESTRE PA</td><td>Benjamín Rosales y América # 210, 211, 212 y 213. Nivel 2 Sector B</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>10:00 - 19:30</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>CITY MALL SHOPPING</td><td>BENJAMIN CARRION S/N EDF CITY MALLy LOCAL #15 S/N</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>MALL DEL SUR</td><td>25 DE JULIO Y ERNESTO ALBÁNy LOCAL 10</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>MALL DEL SOL</td><td>Av. Juan Tanca Marengo y Av. Constitución</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>NO</td></tr>
<tr><td>GUAYAS</td><td>SAN MARINO</td><td>AV FCO DE ORELLANA Y PLAZA DAÑINy LOCAL #11 S/N</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>10:00 - 20:00</td><td>NO</td></tr>
<tr><td>LOS RIOS</td><td>BABAHOYO</td><td>10 DE AGOSTO y BOLIVAR S/N</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOS RIOS</td><td>PUNTO DE ATENCION SHOPPING BABAHOYO</td><td>AV ENRIQUE PONCE LUQUE y VIA GUAYAQUIL - S/N</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>NO</td></tr>
<tr><td>LOS RIOS</td><td>QUEVEDO</td><td>AV. 7 DE OCTUBREy CALLE DECIMA TERCERA S/N</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td>08:00 - 16:30</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOS RIOS</td><td>PUNTO DE ATENCION SHOPPING QUEVEDO</td><td>VIA A BUENA FÉ, FRENTE A LA POLICIA NACIONAL - SHOPPING QUEVEDOy CENTRO COMERCIAL S/N</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>09:00 - 20:00</td><td>NO</td></tr>
<tr><td>SANTA ELENA</td><td>LIBERTAD</td><td>BARRIO ROCAFUERTE y CALLE 23 Y MALECON S/N</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>SANTA ELENA</td><td>SANTA ELENA</td><td>JUAN MONTALVOy ENTRE CALLE 9 DE OCTUBRE Y CALLE CALDERON A LADO DEL REGISTRO CIVIL S/N</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td>08:30 - 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>GUAYAS</td><td>MALL EL FORTIN</td><td>Km 25 vía perimetral/y Av. Casuarina y Modesto Luque</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>10:00 - 19:00</td><td>NO</td></tr>
<tr><td>AZUAY</td><td>CUENCA CENTRO</td><td>BENIGNO MALOy PRESIDENTE CORDOVA S/N</td><td>9:00 a 14:00//(15:00 a 18:00 horario especial de recepcion de equipos)</td><td>9:00 a 14:00//(15:00 a 18:00 horario especial de recepcion de equipos)</td><td>9:00 a 14:00//(15:00 a 18:00 horario especial de recepcion de equipos)</td><td>9:00 a 14:00//(15:00 a 18:00 horario especial de recepcion de equipos)</td><td>9:00 a 14:00//(15:00 a 17:00 horario especial de recepcion de equipos)</td><td></td><td></td><td>SI</td></tr>
<tr><td>AZUAY</td><td>GUALACEO</td><td>CALLE MANANTIALy JUAN MALDONADO S/N</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>AZUAY</td><td>ISLA MONAY SHOPING</td><td>AV. ALBERTO OCHOA y ESCALINATA CUENCA S/N</td><td>10:00 a 18:30</td><td>10:00 a 18:30</td><td>10:00 a 18:30</td><td>10:00 a 18:30</td><td>10:00 a 18:30</td><td></td><td></td><td>NO</td></tr>
<tr><td>AZUAY</td><td>PAUTE</td><td>MANUEL REYESy 3 DE NOVIEMBRE 736</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>AZUAY</td><td>PONCE ENRIQUEZ</td><td>GONZALEZ SUAREZ y EMILIO ZAPATA S/N</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>AZUAY</td><td>MALL DEL RIO SHOPPING</td><td>FELIPE SEGUDOy CIRCUNVALACION SUR S/N</td><td>10:00-20:00</td><td>10:00-20:00</td><td>10:00-20:00</td><td>10:00-20:00</td><td>10:00 a 18:00</td><td>10:00 a 18:00</td><td>10:00 a 18:00</td><td>NO</td></tr>
<tr><td>AZUAY</td><td>MILENIUM</td><td>FLORENCIA ASTUDILLOy CORNELIO MERCHAN 213</td><td>10:00 a 19:00</td><td>10:00 a 19:00</td><td>10:00 a 19:00</td><td>10:00 a 19:00</td><td>10:00 a 18:00</td><td>10:00 a 18:00</td><td>12:00 a 18:00 horas (horario especial de recepcion de equipos)</td><td>SI</td></tr>
<tr><td>CAÑAR</td><td>CAÑAR</td><td>HOMERO MONTEROy HEROES DE VERDELOMA S/N</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>CAÑAR</td><td>BIBLIAN</td><td>3 DE NOVIEMBRE y ENTRE COLON Y CHIMBORAZO S/N</td><td>8:00 a 14:00</td><td>8:00 a 14:00</td><td>8:00 a 14:00</td><td>8:00 a 14:00</td><td>8:00 a 14:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>CAÑAR</td><td>LA TRONCAL</td><td>24 DE MAYO y ENTRE CUENCA Y SUCRE S/N</td><td>8:00 a 14:00</td><td>8:00 a 14:00</td><td>8:00 a 14:00</td><td>8:00 a 14:00</td><td>8:00 a 14:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>CAÑAR</td><td>AZOGUES</td><td>BOLIVARy SERRANO ESQUINA S/N</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MORONA SANTIAGO</td><td>MÉNDEZ</td><td>27 DE FEBRERO y ENTRE CUENCA Y QUITO S/N</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MORONA SANTIAGO</td><td>SUCUA</td><td>EDMUNDO CARVAJALy 12 DE FEBRERO ESQ S/N</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>MORONA SANTIAGO</td><td>MACAS</td><td>24 DE MAYO y ENTRE CUENCA Y SUCRE S/N</td><td>8:00 a 13:00 //14:00 a 17:00</td><td>8:00 a 13:00 //14:00 a 17:00</td><td>8:00 a 13:00 //14:00 a 17:00</td><td>8:00 a 13:00 //14:00 a 17:00</td><td>8:00 a 13:00 //14:00 a 17:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>EL ORO</td><td>MACHALA</td><td>25 DE JUNIO ENTRE VELA Y PALMERAS</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>EL ORO</td><td>PASAJE</td><td>MACHALA Y 10 DE AGOSTO</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>EL ORO</td><td>SANTA ROSA</td><td>OLMEDO Y EL ORO</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>EL ORO</td><td>PIÑAS</td><td>EDMUNDO CARVAJALy 12 DE FEBRERO ESQ S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>EL ORO</td><td>EL GUABO</td><td>AV. EL EJERCITO ENTRE CARCHI Y SUCRE</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>EL ORO</td><td>ZARUMA</td><td>AV. EL EJERCITO y ENTRE CARCHI Y SUCRE S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>EL ORO</td><td>ISLA PASEO SHOPPING MACHALA</td><td>AVENIDA PAQUISHA, MACHALA</td><td>9:00 a 20:00</td><td>9:00 a 20:00</td><td>9:00 a 20:00</td><td>9:00 a 20:00</td><td>9:00 a 20:00</td><td>9:00 a 20:00</td><td>9:00 a 20:00</td><td>NO</td></tr>
<tr><td>LOJA</td><td>LOJA SUR</td><td>AV. LA REPUBLICA y - S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOJA</td><td>CATAMAYO</td><td>PICHINCHAy LUIS A CRESPO S/N</td><td>8:00 a 13:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOJA</td><td>CATACOCHA</td><td>ISIDRO AYORAy CATAMAYO DIAGONAL A COOPERATIVA DE TRANSPORTE KATAMAYO S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOJA</td><td>MACARA</td><td>LAURO GUERRERO S/N y GRAN COLOMBIA / JUNTO AL CUERPO DE BOMBEROS S/N</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td>8:00 a 13:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOJA</td><td>ALAMOR</td><td>EMILIANO CORREA y ENTRE 10 DE AGOSTO Y JUAN LEON MERA / DIAGONAL AL BANCO NACIONAL DE FOMENTO S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOJA</td><td>CARIAMANGA</td><td>MIGUEL ZARATEy JUAN MONTALVO S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOJA</td><td>LOJA CENTRO</td><td>JOSE ANTONIO EGUIGUREN y ENTRE BERNARDO VALDIVIESO Y OLMEDO S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ZAMORA CHINCHIPE</td><td>ZAMORA</td><td>PROLONGACIÓN 24 DE MAYOy VELASCO IBARRA S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ZAMORA CHINCHIPE</td><td>YANTZAZA</td><td>JORGE MOSQUERA S/N y Y LUIS BASTIDAS S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>ZAMORA CHINCHIPE</td><td>EL PANGUI</td><td>AV. JORGE MOSQUERAy QUITO S/N</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>SI</td></tr>
<tr><td>LOJA</td><td>SARAGURO (SOLO RECAUDACIÓN)</td><td>CALLE SUCRE Y 10 DE MARZO JUNTO AL MUNICIPIO FRENTE AL PARQUE CENTRAL</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>NO</td></tr>
<tr><td>LOJA</td><td>CÉLICA (SOLO RECAUDACIÓN)</td><td>GARCIA MORENO Y 10 AGOSTO</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td>8:00 a 16:00</td><td></td><td></td><td>NO</td></tr>

           </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>


<!-- page script -->
<script>
   
  $(function () {
    $('#example2019').DataTable( {
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
