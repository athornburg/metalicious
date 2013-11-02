<?php
include dirname(__FILE__) . '/classes/business_function.php';
include dirname(__FILE__) . '/classes/database.php';
include dirname(__FILE__) . '/classes/table.php';
include dirname(__FILE__) . '/classes/variable.php';
include dirname(__FILE__) . '/include/dbconnopen.php';

$action = $_GET['action'];
$database_info = Database::get_database_info($_GET['database_id']);

if($database_info['Public'] == '1'){
if($action == "database_info"){
    print(json_encode($database_info));
}elseif($action == "database_tables"){
    $database_tables = Database::get_database_tables($database_info['Database_ID']);
    while ($table = mysqli_fetch_assoc($database_tables)) {
        print(json_encode($table));
    }
}elseif($action == "database_business_functions"){
    $database_business_functions = Database::get_business_functions($database_info['Database_ID']);
    while ($business_function = mysqli_fetch_assoc($database_business_functions)) {
        print(json_encode($business_function));
    }
}
}

include dirname(__FILE__) . '/include/dbconnclose.php';


?>