<?php
include 'classes/database.php';
include 'classes/business_function.php';
include 'classes/keyword.php';
include 'classes/table.php';

$action = $_GET['action'];

if($action == "database_info"){
    $database_info = Database::get_database_info($_GET['database_id']);
    print(json_encode($database_info));
}elseif($action == "database_tables"){
    $database_tables = Database::get_database_tables($database_info['Database_ID']);
    print(json_encode($database_tables));
}elseif($action == "database_business_functions"){
    $database_business_functions = Database::get_business_functions($database_info['Database_ID']);
    print(json_encode($database_business_functions));
}


?>