<?php 
// completa
foreach($rows_graus as $row){
    echo "<option value='" . $row['id'] . "'>" . $row['nom'] . "</option>\n";
}
?>