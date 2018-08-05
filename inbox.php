<?php
include('connection.php');
error_reporting(0);
session_start();
$id=$_SESSION['userid'];
$query1 = "select * from messages";
$result1 = mysqli_query($conn, $query1);
$data1=mysqli_fetch_assoc($result1);
if ($result1)
{
    for($i=1;$i<10;$i++)
    {
        $query = "select * from messages where id=$i and (USER_1_ID=$id OR USER_2_ID=$id)";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
            if ($result)
            {
                $receiverid=$data['USER_2_ID'];
                $query2="select * from records where id=$receiverid";
                $result2 = mysqli_query($conn, $query2);
                $data2 = mysqli_fetch_assoc($result2);
                if ($result2)
                {
                   $name=$data2['NAME'];

                if($data['USER_1_ID']==$id)
                {
                    echo "<br>"."<h3>"."FROM"." "."YOU"." "."TO"." "."$name"."</h3>";

                }
                
                if($data['USER_2_ID']==$id)
                {
                    echo "<br>"."<h3>"."FROM"." "."$name"." "."TO"." "."YOU"."</h3>";
                }
                $message = $data['MESSAGE'];
                $time = $data['TIME'];
                echo "<h4>"."$message" ."</h4>"."$time";

                }

            else
            {
                echo "";
            }
            }
           
        }
}
else
{
    echo "";
}
echo "<hr><hr>";
?>
