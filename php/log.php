<?php 
    function generarCSV($arreglo){
        $file_handle = fopen("../../log.csv", 'a');
        foreach ($arreglo as $linea) {
          fputcsv($file_handle, $linea, ';', '"');
        }
        rewind($file_handle);
        fclose($file_handle);
      };
?>