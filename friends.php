<?php
include('connection.php');
include('header.php');
$id=$_SESSION['userid'];
$query1 = "select count(*) from friends";
$result1 = mysqli_query($conn, $query1);
$data1=mysqli_fetch_assoc($result1);

ECHO "<H1>FRIENDS</H1>";
if($result1)
{
    for($i=1;$i<=100;$i++)
    {
        $query = "select * from friends where ID=$i and status=1 and user_1_id=$id";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);
        if ($result) {
            $friendid = $data['USER_2_ID'];
            $userid=$data['USER_2_ID'];
            $query2 = "select * from records WHERE ID='$friendid'";
            $result2 = mysqli_query($conn,$query2);
            $data2 = mysqli_fetch_assoc($result2);
            if ($result2)
            {
              $name=$data2['NAME'];
                echo "$name"."<br>";

            }
            {
                echo mysqli_error($conn);
            }
        }
        else
            {
            echo mysqli_error($conn);
           }

    }
}
else
{
    echo mysqli_error($conn);
}
?>
