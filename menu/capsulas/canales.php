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
      <table id="example1999" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>N° Canal</th>
              <th>Nombre</th>
              <th>Paquete</th>
              <th>Categoria</th>
              <th>Logo</th>
            </tr>

            </thead>
           <tbody>
                <tr>
                  <td>2</td>
                  <td>Ecuavisa</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/ecuavisa.png"></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>TeleAmazonas</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/teleamazonas.png"></td>
                </tr>
                 <tr>
                  <td>5</td>
                  <td>RTS</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/rts.png"></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>OromarTV</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/oromar.png"></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>EcuadorTV</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/ecuadortv.png"></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>GamaVisión</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/gamavision.png"></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>TC</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/tc.png"></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>TVC</td>
                  <td>Paquete SD (promocional)</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/tvc.png"></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>UNO</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/uno.png"></td>
                </tr>
                <tr>
                  <td>334</td>
                  <td>Canela TV</td>
                  <td>Paquete SD</td>
                  <td>Local</td>
                  <td><img src="documentos/canales/canelatv.png"></td>
                </tr>
                <tr>
                  <td>50</td>
                  <td>Discovery Kids</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/discoverykids.png"></td>
                </tr>
                <tr>
                  <td>51</td>
                  <td>NatGeo Kids</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/natgeokids.png"></td>
                </tr>
                <tr>
                  <td>52</td>
                  <td>Nickelodeon</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/nickelodeon.png"></td>
                </tr>
                <tr>
                  <td>53</td>
                  <td>Cartoon Network</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/cartoonnetwork.png"></td>
                </tr>
                <tr>
                  <td>54</td>
                  <td>Disney Channel</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/disneychannel.png"></td>
                </tr>
                <tr>
                  <td>55</td>
                  <td>Disney XD</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/disneyxd.png"></td>
                </tr>
                <tr>
                  <td>577</td>
                  <td>Nick JR</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/nickjr.png"></td>
                </tr>
                <tr>
                  <td>155</td>
                  <td>Comedy Central</td>
                  <td>Paquete SD</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/comedycentral.png"></td>
                </tr>
                <tr>
                  <td>601</td>
                  <td>Enlace</td>
                  <td>Paquete SD</td>
                  <td>Noticias</td>
                  <td><img src="documentos/canales/enlace.png"></td>
                </tr>
                <tr>
                  <td>118</td>
                  <td>Telefe</td>
                  <td>Paquete SD</td>
                  <td>Religión</td>
                  <td><img src="documentos/canales/telefe.png"></td>
                </tr>
                <tr>
                  <td>600</td>
                  <td>EWTN</td>
                  <td>Paquete SD</td>
                  <td>Religión</td>
                  <td><img src="documentos/canales/ewtn.png"></td>
                </tr>
                <tr>
                  <td>46</td>
                  <td>RTU</td>
                  <td>Paquete SD (promocional) / Total Plus</td>
                  <td>Noticias</td>
                  <td><img src="documentos/canales/rtu.png"></td>
                </tr>
                <tr>
                  <td>56</td>
                  <td>Boomerang</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/boomerang.png"></td>
                </tr>
                <tr>
                  <td>58</td>
                  <td>Disney Junior</td>
                  <td>Paquete SD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/disneyjunior.png"></td>
                </tr>
                <tr>
                  <td>100</td>
                  <td>Investigation Discovery</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/investigationdiscovery.png"></td>
                </tr>
                <tr>
                  <td>101</td>
                  <td>FOX</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/fox.png"></td>
                </tr>
                <tr>
                  <td>102</td>
                  <td>Universal</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/universal.png"></td>
                </tr>
                <tr>
                  <td>103</td>
                  <td>Space</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/space.png"></td>
                </tr>
                <tr>
                  <td>104</td>
                  <td>Studio Universal</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/studiouniversal.png"></td>
                </tr>
                <tr>
                  <td>105</td>
                  <td>FX</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/fx.png"></td>
                </tr>
                <tr>
                  <td>106</td>
                  <td>TCM</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/tcm.png"></td>
                </tr>
                <tr>
                  <td>110</td>
                  <td>Warner Bros</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/warnerbros.png"></td>
                </tr>
                <tr>
                  <td>111</td>
                  <td>Canal Sony</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/canalsony.png"></td>
                </tr>
                <tr>
                  <td>111</td>
                  <td>AXN</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/axn.png"></td>
                </tr>
                <tr>
                  <td>113</td>
                  <td>E entertainment</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/eenterteiment.png"></td>
                </tr>
                <tr>
                  <td>115</td>
                  <td>A&E</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/aye.png"></td>
                </tr>
                <tr>
                  <td>116</td>
                  <td>TNT</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/tnt.png"></td>
                </tr>
                <tr>
                  <td>117</td>
                  <td>Fox Life</td>
                  <td>Paquete SD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/foxlife.png"></td>
                </tr>
                <tr>
                  <td>148</td>
                  <td>h&h Discovery</td>
                  <td>Paquete SD</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/hyhdiscovery.png"></td>
                </tr>
                <tr>
                  <td>149</td>
                  <td>TLC</td>
                  <td>Paquete SD</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/tlc.png"></td>
                </tr>
                <!--<tr>
                  <td>151</td>
                  <td>Las Estrellas</td>
                  <td>Paquete SD</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/lasestrellas.png"></td>
                </tr>-->
                <tr>
                  <td>154</td>
                  <td>elGourmet</td>
                  <td>Paquete SD</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/gourmet.png"></td>
                </tr>
                <tr>
                  <td>157</td>
                  <td>Telemundo</td>
                  <td>Paquete SD</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/telemundo.png"></td>
                </tr>
                <tr>
                  <td>159</td>
                  <td>LifeTime</td>
                  <td>Paquete SD</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/lifetime.png"></td>
                </tr>
                <!-- <tr>
                  <td>250</td>
                  <td>Telenovelas</td>
                  <td>Paquete SD</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/telenovelas.png"></td>
                </tr>-->
                <tr>
                  <td>300</td>
                  <td>CNT Sports</td>
                  <td>Paquete SD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/cntsports.png"></td>
                </tr>
                <tr>
                  <td>301</td>
                  <td>FOX Sports</td>
                  <td>Paquete SD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/foxsports.png"></td>
                </tr>
                <tr>
                  <td>302</td>
                  <td>ESPN</td>
                  <td>Paquete SD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/espn.png"></td>
                </tr>
                <tr>
                  <td>303</td>
                  <td>ESPN 2</td>
                  <td>Paquete SD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/espn2.png"></td>
                </tr>
                <tr>
                  <td>304</td>
                  <td>FOX Sport 2</td>
                  <td>Paquete SD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/foxsports2.png"></td>
                </tr>
                <tr>
                  <td>305</td>
                  <td>FOX Sport 3</td>
                  <td>Paquete SD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/foxsports3.png"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>GolTV</td>
                  <td>Paquete SD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/golTV.png"></td>
                </tr>
                <tr>
                  <td>350</td>
                  <td>Discovery Channel</td>
                  <td>Paquete SD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/discoverychannel.png"></td>
                </tr>
                <tr>
                  <td>353</td>
                  <td>Animal Planet</td>
                  <td>Paquete SD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/animalplanet.png"></td>
                </tr>
                <tr>
                  <td>354</td>
                  <td>National Geographic</td>
                  <td>Paquete SD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/nationalgeographic.png"></td>
                </tr>
                <tr>
                  <td>361</td>
                  <td>History</td>
                  <td>Paquete SD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/history.png"></td>
                </tr>
                <tr>
                  <td>362</td>
                  <td>History 2</td>
                  <td>Paquete SD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/history2.png"></td>
                </tr>
                <tr>
                  <td>363</td>
                  <td>Nat Geo Wild</td>
                  <td>Paquete SD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/natgeowild.png"></td>
                </tr>
                <tr>
                  <td>400</td>
                  <td>CNN</td>
                  <td>Paquete SD</td>
                  <td>Noticias</td>
                  <td><img src="documentos/canales/cnn.png"></td>
                </tr>
                <tr>
                  <td>450</td>
                  <td>Mtv</td>
                  <td>Paquete SD</td>
                  <td>Música</td>
                  <td><img src="documentos/canales/mtv.png"></td>
                </tr>
                <tr>
                  <td>451</td>
                  <td>Htv</td>
                  <td>Paquete SD</td>
                  <td>Música</td>
                  <td><img src="documentos/canales/htv.png"></td>
                </tr>
                <tr>
                  <td>499</td>
                  <td>Paramount Channel</td>
                  <td>Paquete SD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/paramountchanel.png"></td>
                </tr>
                <tr>
                  <td>500</td>
                  <td>TNT</td>
                  <td>Paquete SD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/tnt.png"></td>
                </tr>
                <!--<tr>
                  <td>501</td>
                  <td>Golden</td>
                  <td>Paquete SD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/golden.png"></td>
                </tr>-->
                <tr>
                  <td>502</td>
                  <td>FXM</td>
                  <td>Paquete SD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/fxm.png"></td>
                </tr>
                <tr>
                  <td>503</td>
                  <td>Cinecanal</td>
                  <td>Paquete SD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/cinecanal.png"></td>
                </tr>
                <!-- <tr>
                  <td>504</td>
                  <td>De Pelicula</td>
                  <td>Paquete SD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/depelicula.png"></td>
                </tr>-->
                <tr>
                  <td>505</td>
                  <td>AMC</td>
                  <td>Paquete SD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/amc.png"></td>
                </tr>
                <tr>
                  <td>515</td>
                  <td>CineMax</td>
                  <td>Paquete SD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/cinemax.png"></td>
                </tr>
                <tr>
                  <td>900</td>
                  <td>Pop Classic's</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/popclasico.png"></td>
                </tr>
                <tr>
                  <td>901</td>
                  <td>Tango</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/tango.png"></td>
                </tr>
                <tr>
                  <td>902</td>
                  <td>The Chill Lounge</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/thechilllounge.png"></td>
                </tr>
                <tr>
                  <td>903</td>
                  <td>Romance Latino</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/romancelatino.png"></td>
                </tr>
                <tr>
                  <td>904</td>
                  <td>Latino Tropical</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/latinotropical.png"></td>
                </tr>
                <tr>
                  <td>905</td>
                  <td>Poolside</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/poolside.png"></td>
                </tr>
                <tr>
                  <td>906</td>
                  <td>Flashback 70s</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/flashback70s.png"></td>
                </tr>
                <tr>
                  <td>907</td>
                  <td>Y2K</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/y2k.png"></td>
                </tr>
                <tr>
                  <td>908</td>
                  <td>Rock en español</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/rockespanol.png"></td>
                </tr>
                <tr>
                  <td>909</td>
                  <td>Reggeaton</td>
                  <td>Paquete SD</td>
                  <td>Canales de Audio</td>
                  <td><img src="documentos/canales/reggeaton.png"></td>
                </tr>
                <tr>
                  <td>777</td>
                  <td>GolTV HD</td>
                  <td>Paquete SD (promocional)</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/goltvhd.png"></td>
                </tr>
                <tr>
                  <td>778</td>
                  <td>RT</td>
                  <td>Paquete SD (promocional)</td>
                  <td>Noticias</td>
                  <td><img src="documentos/canales/rt.png"></td>
                </tr>
                <tr>
                  <td>700</td>
                  <td>CNt Sport HD</td>
                  <td>Paquete HD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/cntsports.png"></td>
                </tr>
                <tr>
                  <td>702</td>
                  <td>Fox Sport 2 HD</td>
                  <td>Paquete HD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/foxsport2hd.png"></td>
                </tr>
                <tr>
                  <td>703</td>
                  <td>ESPN HD</td>
                  <td>Paquete HD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/espnhd.png"></td>
                </tr>
                <tr>
                  <td>704</td>
                  <td>ESPN+ HD</td>
                  <td>Paquete HD</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/espnplushd.png"></td>
                </tr>
                <tr>
                  <td>705</td>
                  <td>Discovery Kids HD</td>
                  <td>Paquete HD</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/discoverykidshd.png"></td>
                </tr>
                <tr>
                  <td>710</td>
                  <td>Discovery HD</td>
                  <td>Paquete HD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/discoveryhd.png"></td>
                </tr>
                <tr>
                  <td>711</td>
                  <td>Discovery World HD</td>
                  <td>Paquete HD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/discoveryworldhd.png"></td>
                </tr>
                <tr>
                  <td>712</td>
                  <td>Discovery Theater HD</td>
                  <td>Paquete HD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/discoverytheatherhd.png"></td>
                </tr>
                <tr>
                  <td>713</td>
                  <td>NatGeo Wild HD</td>
                  <td>Paquete HD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/natgeowildhd.png"></td>
                </tr>
                <tr>
                  <td>714</td>
                  <td>History HD</td>
                  <td>Paquete HD</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/historyhd.png"></td>
                </tr>
                <tr>
                  <td>720</td>
                  <td>Invetigation Discovery HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/idhd.png"></td>
                </tr>
                <tr>
                  <td>721</td>
                  <td>FOX HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/foxhd.png"></td>
                </tr>
                <tr>
                  <td>722</td>
                  <td>Universal HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/universalhd.png"></td>
                </tr>
                <tr>
                  <td>723</td>
                  <td>Space HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/spacehd.png"></td>
                </tr>
                <tr>
                  <td>724</td>
                  <td>Warner Bros HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/warnerhd.png"></td>
                </tr>
                <tr>
                  <td>725</td>
                  <td>Sony Entertainment HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/sonyhd.png"></td>
                </tr>
                <tr>
                  <td>726</td>
                  <td>AXN HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/axnhd.png"></td>
                </tr>
                <tr>
                  <td>727</td>
                  <td>A&E HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/ayehd.png"></td>
                </tr>
                <tr>
                  <td>728</td>
                  <td>TNT|Series HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/tntserieshd.png"></td>
                </tr>
                <tr>
                  <td>729</td>
                  <td>A3S ATRESERIES HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/a3shd.png"></td>
                </tr>
                <tr>
                  <td>730</td>
                  <td>FX HD</td>
                  <td>Paquete HD</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/fxhd.png"></td>
                </tr>
                <tr>
                  <td>740</td>
                  <td>TNT HD</td>
                  <td>Paquete HD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/tnthd.png"></td>
                </tr>
                <!--<tr>
                  <td>741</td>
                  <td>Golden HD</td>
                  <td>Paquete HD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/goldenhd.png"></td>
                </tr>-->
                <tr>
                  <td>742</td>
                  <td>Cinecanal HD</td>
                  <td>Paquete HD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/cinecanalhd.png"></td>
                </tr>
                <tr>
                  <td>743</td>
                  <td>Cinemax HD</td>
                  <td>Paquete HD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/cinemaxhd.png"></td>
                </tr>
                <tr>
                  <td>745</td>
                  <td>BMC HD</td>
                  <td>Paquete HD</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/dhehd.png"></td>
                </tr>
                <tr>
                  <td>760</td>
                  <td>H&H HD</td>
                  <td>Paquete HD</td>
                  <td>Estilos Variados</td>
                  <td><img src="documentos/canales/hyhhd.png"></td>
                </tr>
                <tr>
                  <td>761</td>
                  <td>HOLA|TV HD</td>
                  <td>Paquete HD</td>
                  <td>Estilos Variados</td>
                  <td><img src="documentos/canales/holatvhd.png"></td>
                </tr>
                <tr>
                  <td>770</td>
                  <td>Stingray Concerts HD</td>
                  <td>Paquete HD</td>
                  <td>Música</td>
                  <td><img src="documentos/canales/stingrayhd.png"></td>
                </tr>
                <tr>
                  <td>59</td>
                  <td>Tooncast</td>
                  <td>Total Plus</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/tomcastTP.png"></td>
                </tr>
                <tr>
                  <td>60</td>
                  <td>Baby jr.</td>
                  <td>Total Plus</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/babyjrTP.png"></td>
                </tr>
                <tr>
                  <td>61</td>
                  <td>Clan</td>
                  <td>Total Plus</td>
                  <td>Infantil</td>
                  <td><img src="documentos/canales/clanTP.png"></td>
                </tr>
                <tr>
                  <td>107</td>
                  <td>I Sat</td>
                  <td>Total Plus</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/csatTP.png"></td>
                </tr>
                <tr>
                  <td>108</td>
                  <td>Sify</td>
                  <td>Total Plus</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/sifyTP.png"></td>
                </tr>
                <tr>
                  <td>109</td>
                  <td>TBS</td>
                  <td>Total Plus</td>
                  <td>Peliculas y Series</td>
                  <td><img src="documentos/canales/tbsTP.png"></td>
                </tr>
                <tr>
                  <td>156</td>
                  <td>Glitz</td>
                  <td>Total Plus</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/glitzTP.png"></td>
                </tr>
                <tr>
                  <td>156</td>
                  <td>Glitz</td>
                  <td>Total Plus</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/glitzTP.png"></td>
                </tr>
                <tr>
                  <td>158</td>
                  <td>Mas Chic</td>
                  <td>Total Plus</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/maschicTP.png"></td>
                </tr>
                <tr>
                  <td>160</td>
                  <td>INTI</td>
                  <td>Total Plus</td>
                  <td>Variado, Estilo de Vida</td>
                  <td><img src="documentos/canales/intiTP.png"></td>
                </tr>
                <tr>
                  <td>306</td>
                  <td>ESPN3</td>
                  <td>Total Plus</td>
                  <td>Deportes</td>
                  <td><img src="documentos/canales/espn3TP.png"></td>
                </tr>
                <tr>
                  <td>356</td>
                  <td>Discovery Science SCI</td>
                  <td>Total Plus</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/sciTP.png"></td>
                </tr>
                <tr>
                  <td>357</td>
                  <td>Film&Arts</td>
                  <td>Total Plus</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/filmartsTP.png"></td>
                </tr>
                <tr>
                  <td>358</td>
                  <td>Discovery Civilization</td>
                  <td>Total Plus</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/discoverycivilizationTP.png"></td>
                </tr>
                <tr>
                  <td>359</td>
                  <td>Discovery Turbo</td>
                  <td>Total Plus</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/turboTP.png"></td>
                </tr>
                <tr>
                  <td>360</td>
                  <td>TruTV</td>
                  <td>Total Plus</td>
                  <td>Documental</td>
                  <td><img src="documentos/canales/trutvTP.png"></td>
                </tr>
                <tr>
                  <td>402</td>
                  <td>CNN International</td>
                  <td>Total Plus</td>
                  <td>Noticias</td>
                  <td><img src="documentos/canales/cnninternationalTP.png"></td>
                </tr>
                <tr>
                  <td>404</td>
                  <td>BBC World News</td>
                  <td>Total Plus</td>
                  <td>Noticias</td>
                  <td><img src="documentos/canales/bbcTP.png"></td>
                </tr>
                <tr>
                  <td>497</td>
                  <td>Euro Channel</td>
                  <td>Total Plus</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/euroTP.png"></td>
                </tr>
                <!--<tr>
                  <td>498</td>
                  <td>Golden EDGE</td>
                  <td>Total Plus</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/goldeedgeTP.png"></td>
                </tr>-->
                <tr>
                  <td>506</td>
                  <td>Europa</td>
                  <td>Total Plus</td>
                  <td>Cine</td>
                  <td><img src="documentos/canales/aeeuropaTP.png"></td>
                </tr>
                <tr>
                  <td>552</td>
                  <td>TVE</td>
                  <td>Total Plus</td>
                  <td>Internacional</td>
                  <td><img src="documentos/canales/tveTP.png"></td>
                </tr>
                <tr>
                  <td>554</td>
                  <td>Antena 3</td>
                  <td>Total Plus</td>
                  <td>Internacional</td>
                  <td><img src="documentos/canales/antena3TP.png"></td>
                </tr>
                <tr>
                  <td>555</td>
                  <td>El Trece</td>
                  <td>Total Plus</td>
                  <td>Internacional</td>
                  <td><img src="documentos/canales/treceTP.png"></td>
                </tr>
                <tr>
                  <td>610</td>
                  <td>WOBI</td>
                  <td>Total Plus</td>
                  <td>Empresarial</td>
                  <td><img src="documentos/canales/wobiTP.png"></td>
                </tr>
                <tr>
                  <td>850</td>
                  <td>Play Boy</td>
                  <td>Plan HOTPACK</td>
                  <td>Adultos</td>
                  <td><img src="documentos/canales/adultos/playboy.png"></td>
                </tr>
                <tr>
                  <td>851</td>
                  <td>Venus</td>
                  <td>Plan HOTPACK</td>
                  <td>Adultos</td>
                  <td><img src="documentos/canales/adultos/venus.png"></td>
                </tr>
                <tr>
                  <td>852</td>
                  <td>Sextreme</td>
                  <td>Plan HOTPACK</td>
                  <td>Adultos</td>
                  <td><img src="documentos/canales/adultos/sextreme.png"></td>
                </tr>
                
                <tr>
                  <td>516</td>
                  <td>HBO</td>
                  <td>Paquete HBO Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/hbo/hbo.png"></td>
                </tr>
                <tr>
                  <td>517</td>
                  <td>HBO 2</td>
                  <td>Paquete HBO Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/hbo/hbo2.png"></td>
                </tr>
                <tr>
                  <td>518</td>
                  <td>HBO Plus</td>
                  <td>Paquete HBO Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/hbo/hboplus.png"></td>
                </tr>
                <tr>
                  <td>524</td>
                  <td>Max UP</td>
                  <td>Paquete HBO Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/hbo/maxup.png"></td>
                </tr>
                <tr>
                  <td>520</td>
                  <td>HBO Family</td>
                  <td>Paquete HBO Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/hbo/hbofamily.png"></td>
                </tr>
                <tr>
                  <td>521</td>
                  <td>HBO Signature</td>
                  <td>Paquete HBO Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/hbo/hbosgna.png"></td>
                </tr>
                <tr>
                  <td>522</td>
                  <td>MAX</td>
                  <td>Paquete HBO Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/hbo/max.png"></td>
                </tr>
                <tr>
                  <td>523</td>
                  <td>MAX Prime</td>
                  <td>Paquete HBO Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/hbo/maxprime.png"></td>
                </tr>
                
                <tr>
                  <td>508</td>
                  <td>FOX Premium Series (Este)</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiumseriesESTE.png"></td>
                </tr>
                <tr>
                  <td>509</td>
                  <td>FOX Premium Series (Oeste)</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiumseriesOESTE.png"></td>
                </tr>                
                <tr>
                  <td>507</td>
                  <td>FOX Premium Movies</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiummovies.png"></td>
                </tr>
                <tr>
                  <td>510</td>
                  <td>FOX Premium Action</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiumaction.png"></td>
                </tr>
                <tr>
                  <td>511</td>
                  <td>FOX Premium Family</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiumfamily.png"></td>
                </tr>
                <tr>
                  <td>512</td>
                  <td>FOX Premium Comedy</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiumcomedy.png"></td>
                </tr>
                <tr>
                  <td>513</td>
                  <td>FOX Premium Cinema</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiumcinema.png"></td>
                </tr>
                <tr>
                  <td>514</td>
                  <td>FOX Premium Classics</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiumclassics.png"></td>
                </tr>
                <tr>
                  <td>780</td>
                  <td>FOX Premium Series HD</td>
                  <td>Paquete FOX Premium</td>
                  <td>Peliculas</td>
                  <td><img src="documentos/canales/fox/fxpremiumseries.png"></td>
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
    $('#example1999').DataTable( {
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
