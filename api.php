<?php
include 'classes/database.php';
include 'classes/business_function.php';
include 'classes/keyword.php';

$database_id = Database::get_database_info($_GET['database_id']);


//if the user is not logged in and the item isn't public
if (!isset($_COOKIE['user_id']) && ($database_info['Public'] == '0')) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

print(json_encode(database_id));


?>