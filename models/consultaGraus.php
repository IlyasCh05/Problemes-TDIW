<?php
  function consultaGraus($con){
    //completa
    $query_graus = "SELECT id,nom FROM graus";
		$resultSet_graus = pg_query($con, $query_graus) or die("Error sql graus");
		$rows_graus = pg_fetch_all($resultSet_graus);

    return $rows_graus;
  }
?>