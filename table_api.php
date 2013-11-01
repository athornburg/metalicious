<?php
include 'classes/database.php';
include 'classes/business_function.php';
include 'classes/keyword.php';
include 'classes/table.php';


$action = $_GET['action'];

if($action == "table_info"){
    $table_info = Table::get_table_info($_GET['table_id']);
    print(json_encode($table_info));
}elseif($action == "table_variables"){
    $table_variables = Table::get_table_variables($table_info['Table_ID']);
    print(json_encode($table_variables));
}elseif($action == "parent_databases"){
    $parent_databases = Table::get_parent_databases($table_info['Table_ID']);
    print(json_encode($parent_databases));
}


?>