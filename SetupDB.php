<?php
require_once("FruitDBController.php");
$Fruit_Handle = new FruitDBController();
$query = file_get_contents("Create_shoppingcart_DB.sql");

$qrySetup = $Fruit_Handle->ExecSQLFile("Create_shoppingcart_DB.sql");
if (!empty($qrySetup))
{
    printf("OK - Success");
}
else {
    printf("Failed to setup database");
}

?>