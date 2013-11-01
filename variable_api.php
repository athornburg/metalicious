<?php
include 'classes/variable.php';




$action = $_GET['action'];

if($action == "variable_info"){
    $variable_info = Variable::get_variable_info($_GET['variable_id']);
    print(json_encode($variable_info));
}elseif($action == "all_tables"){
    $all_tables = Table::get_all_tables();
    print(json_encode($all_tables));
}
