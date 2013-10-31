<?php
//production database connection
$cnnCDD = mysqli_connect("localhost:3306","root","password","datadictionary")
                    or die ("Error Connecting To The Database Because: " . mysqli_connect_error());
?>
