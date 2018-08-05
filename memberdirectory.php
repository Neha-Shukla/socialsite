<?php
session_start();
include('header.php');
include('connection.php');
$id=$_SESSION['userid'];
echo "<br><br>";
echo "<h1>"."MEMBERS"."<H1>";
$i=1;
$query1 = "select * from records";
$result1 = mysqli_query($conn, $query1);
$data1=mysqli_fetch_assoc($result1);
if($result1)
{
    for ($i = 1; $i < $data1; $i++)
    {
        if ($i != $id)
        {
            $query = "select * from records where id='$i'";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);

            if ($data)
            {
                $name = $data['NAME'];
                $email = $data['EMAIL_ID'];
                $fid=$data['ID'];
                echo "<br>"."<h3>"."$name" ."</h3>";


            }
            else
                {
               break;
                }
        }
    }
}
else
{
    echo mysqli_error($conn);
}

    ?>