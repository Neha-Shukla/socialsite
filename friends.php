<?php
session_start();
include('header.php');
include('connection.php');
$id=$_SESSION['userid'];
$query1 = "select count(*) from friends";
$result1 = mysqli_query($conn, $query1);
$data1=mysqli_fetch_assoc($result1);

ECHO "<H1>FRIENDS</H1>";
if($result1) {


    $query = "select * from friends where status=1 and user_1_id=$id";
    $result = mysqli_query($conn, $query);

    while ($data = mysqli_fetch_assoc($result)) {
        $friendid = $data['USER_2_ID'];
        $query2 = "select * from records WHERE ID='$friendid'";
        $result2 = mysqli_query($conn, $query2);
        $data2 = mysqli_fetch_assoc($result2);
        if ($result2) {
            $name = $data2['NAME'];
            echo "$name"."<br>"."<form name='f2' method='post' action=''>
<input type='submit' name='submit' value='REMOVE FRIEND'>
";
            echo "<br><br>";
            if(isset($_POST['submit']))
            {
echo "<meta http-equiv='refresh' content='0'>";
                $query="update friends set status=0 where USER_1_ID=$id AND USER_2_ID=$friendid";
                $result=mysqli_query($conn,$query);
                if($result)
                {
                    echo "$name"." "."is no more your friend";
                }
                else
                {
                    echo mysqli_error($conn);
                }
            }

        } else {
            echo mysqli_error($conn);
        }


    }
}
else
{
    echo mysqli_error($conn);
}
echo "<hr><hr>";
echo "<h2>SUGGESTIONS</h2>";
include('suggestions.php');
?>
