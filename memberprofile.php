<?php
include('header.php');
include('connection.php');
$fid=$_SESSION['fid'];
$id=$_SESSION['userid'];
$query2="select * from friends where user_1_id=$id and user_2_id=$fid";
$result2=mysqli_query($conn,$query2);
$data2=mysqli_fetch_assoc($result2);
if($result2)
{
    $status=$data2['status'];
    if($status==0)
    {
        echo "<form name='form' method='post' action=''>
<input type='submit' name='addfriend' value='addfriend'>"."<br><br>";
    }
    else
    {
        echo "<form name='form1' method='post' action=''>
<input type='submit' name='removefriend' value='removefriend'>"."<br><br>";
    }
}
 else
 {
     echo mysqli_error($conn);
 }
?>
