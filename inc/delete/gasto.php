<?php require("include1_.php"); ?>
<?php

if ((isset($_GET['id_gasto'])) && ($_GET['id_gasto'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_gastos WHERE id_gasto=%s",
                       GetSQLValueString($_GET['id_gasto'], "int"));

  mysql_select_db($database_db_compu, $db_compu);
  $Result1 = mysql_query($deleteSQL, $db_compu) or die(mysql_error());

  $deleteGoTo = "../../listar-gastos.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>
