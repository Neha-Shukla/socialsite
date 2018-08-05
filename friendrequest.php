<?php
session_start();
include('connection.php');
include('header.php');
$id=$_SESSION['userid'];
$query1 = "select count(*) from friends";
$result1 = mysqli_query($conn, $query1);
$data1=mysqli_fetch_assoc($result1);

ECHO "<H1>FRIEND REQUESTS</H1>";
if($result1) {


    $query = "select * from friends where status=2 and user_1_id=$id";
    $result = mysqli_query($conn, $query);
$rows=mysqli_num_rows($result);
echo "(".$rows.")"."<BR><BR>";
    while ($data = mysqli_fetch_assoc($result)) {
        $friendid = $data['USER_2_ID'];
        $userid = $data['USER_2_ID'];
        $query2 = "select * from records WHERE ID='$friendid'";
        $result2 = mysqli_query($conn, $query2);
        $data2 = mysqli_fetch_assoc($result2);
        if ($result2) {
            $name = $data2['NAME'];
            echo "$name"."<br>"."<form name='f1' method='post' action=''>
<input type='submit' name='submit' value='ACCEPT'>
";
            echo "&emsp;";
            if(isset($_POST['submit']))
            {
                echo "<meta http-equiv='refresh' content='0'>";
                $query="update friends set status=1 where USER_1_ID=$id AND USER_2_ID=$friendid";
                $result=mysqli_query($conn,$query);
            }
            ECHO "<input type='submit' name='submit2' value='DECLINE'>";
            echo "<br><br><BR>";
            if(isset($_POST['submit2']))
            {
                echo "<meta http-equiv='refresh' content='0'>";
                $query="update friends set status=0 where USER_1_ID=$id AND USER_2_ID=$friendid";
                $result=mysqli_query($conn,$query);
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
