<?php
$server_name="localhost";
$user_name='root';
$user_password='';
$database_name="rich";

$con=mysqli_connect($server_name,$user_name,$user_password,$database_name);

if(!$con){
    die('Connection Failed'.mysql_error());
}
// else{
//     echo('Database Successfully Connected');
// }

?>
