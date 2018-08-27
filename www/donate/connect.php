<?php
$server="localhost";
$user="icamp_2017";
$password="z@r4Aq3U9H99";
$db="ecell_i_camp";
$conn=new mysqli($server,$user,$password,$db);
if($conn->connect_error)
{
die("connection error");
}
?>
