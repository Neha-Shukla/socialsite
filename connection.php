<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nehu";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{

}
else
{
    die("connection is faled due to: ".mysqli_error($conn));
}
?>