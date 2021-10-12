    <?php
      session_start();
      include '../../php/conexion_bd.php';
      $block = mysqli_query($enlace, "SELECT * FROM HBOFidelizacion WHERE cod_venta=0");
      mysqli_data_seek ($block, 0);
      $row_block2 = mysqli_num_rows($block);
        	
    ?>    
    
    <script> 
       alert("Casos pendientes por gestión: <?php echo $row_block2; ?>");
    </script>

