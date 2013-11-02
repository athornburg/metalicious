<?php
include 'classes/variable.php';
include 'classes/table.php';




$action = $_GET['action'];

if($variable_info['Public'] == '1'){

if($action == "variable_info"){
    $variable_info = Variable::get_variable_info($_GET['variable_id']);
    print(json_encode($variable_info));
}elseif($action == "all_tables"){
    $all_tables = Table::get_all_tables();
    while ($table = mysqli_fetch_assoc($all_tables)) {
        print(json_encode($table));
    }
}
}
