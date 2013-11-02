<?php
include dirname(__FILE__) . '/classes/business_function.php';
include dirname(__FILE__) . '/classes/database.php';
include dirname(__FILE__) . '/classes/table.php';
include dirname(__FILE__) . '/classes/variable.php';
include dirname(__FILE__) . '/include/dbconnopen.php';

$action = $_GET['action'];

if($action == "all_business_functions"){
    $all_business_functions = Business_Function::get_all_business_functions();
        while ($business_function = mysqli_fetch_assoc($all_business_functions)) {
            print(json_encode($business_function));
        }
}elseif($action == "most_viewed_results"){
    $most_viewed_results = mysqli_query($cnnCDD, "Call Main_Most_Viewed()");
        while($result_element = mysqli_fetch_assoc($most_viewed_results)){
            print(json_encode($result_element));
        }
}
include dirname(__FILE__) . '/include/dbconnclose.php';

?>