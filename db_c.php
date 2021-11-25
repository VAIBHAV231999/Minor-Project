<?php
$server="localhost";
$uname="root";
$password="";
$dbname="pg_db";

$conn=new mysqli($server,$uname,$password,$dbname);
if(!$conn)
{
    die("Not Connection".$conn->error);
}
?>