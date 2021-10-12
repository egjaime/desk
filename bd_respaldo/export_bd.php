<?php

function backupDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $tables = '*'){
    
    date_default_timezone_set("America/Guayaquil");

    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if ($tables == '*'){
        $tables = array();
        $result = $db->query("SHOW TABLES");
        while ($row = $result->fetch_row()){
            $tables[] = $row[0];
        }
    }else{
        $tables = is_array($tables) ? $tables : explode(',', $tables);
    }
    foreach ($tables as $table){
        $result     = $db->query("SELECT * FROM $table");
        $numColumns = $result->field_count;
        
        $return .= "DROP TABLE $table;";
        
        $result2 = $db->query("SHOW CREATE TABLE $table");
        $row2    = $result2->fetch_row();
        
        $return .= "\n" . $row2[1] . ";\n";
        
        for ($i = 0; $i < $numColumns; $i++){
            while ($row = $result->fetch_row()){
                $return .= "INSERT INTO $table VALUES(";
                for ($j = 0; $j < $numColumns; $j++){
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = str_replace("\n", "\n", $row[$j]);
                    if (isset($row[$j])) {
                        $return .= '"' . $row[$j] . '"';
                    }else{
                        $return .= '""';
                    }
                    if ($j < ($numColumns - 1)){
                        $return .= ',';
                    }
                }
                $return .= ");\n";
            }
        }
        $return .= "";
    }
    
    $handle = fopen('recovery_bd/db-backup-' . date("Y-m-d-h-i-sa") . '.sql', 'w+');
    fwrite($handle, $return);
    fclose($handle);
}
backupDatabaseTables('localhost', 'impulsa_userDesk', '.Desk12.A', 'impulsa_bd_imp');
echo "<center><span style='text-decoration:none;color:#98a6ad;'>Respaldo Terminado";
echo "<br/>";
echo '<a href="db-backup-' . date("Y-m-d-h-i-sa") . '.sql" style="text-decoration:none;color:#3ac9d6;">Descargar Aqui</a></span></center>';
?>