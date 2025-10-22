<?php 
// completa
foreach($rows_mencions as $row){
    echo "<option value='" . $row['id'] . "'>" . $row['nom'] . "</option>\n";
}
?>