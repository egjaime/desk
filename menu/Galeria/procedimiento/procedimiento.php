<?php
$directorio = opendir("../images/Galeria/fotos_ani_imp_2019"); //ruta actual
while ($archivo = readdir($directorio)) //Obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "[".$archivo . "]<br />"; //De ser un directorio lo envolvemos entre corchetes
    }
    else
    {
        echo $archivo . "<br />";
    }
}
?>