<?php
include 'classes/database.php';
include 'classes/business_function.php';
include 'classes/keyword.php';
include 'classes/table.php';


$action = $_GET['action'];
$table_info = Table::get_table_info($_GET['table_id']);

if($table_info['Public'] == '1'){
if($action == "table_info"){
    print(json_encode($table_info));
}elseif($action == "table_variables"){
    $table_variables = Table::get_table_variables($table_info['Table_ID']);
    while ($variable = mysqli_fetch_assoc($table_variables)) {
        print(json_encode($variable));
    }
}elseif($action == "parent_databases"){
    $parent_databases = Table::get_parent_databases($table_info['Table_ID']);
    while ($parent_database = mysqli_fetch_assoc($parent_databases)) {
        print(json_encode($parent_database));
    }
}
}


?>