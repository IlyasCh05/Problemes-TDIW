<?php
  function consultaMencions($con, $grau){
    //completa
    $query_mencions = "SELECT id,nom FROM mencions WHERE grau=$grau";
    $resultSet_mencions = pg_query($con, $query_mencions) or die("Error sql mencions");
		$rows_mencions = pg_fetch_all($resultSet_mencions);

    return $rows_mencions;
  }
?>

