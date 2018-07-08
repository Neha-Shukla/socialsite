<?php
include('header.php');
include('connection.php');
$id=$_SESSION['userid'];
$i=1;
$query1 = "select count(*) from messages";
$result1 = mysqli_query($conn, $query1);
$data1=mysqli_fetch_assoc($result1);
if ($result1)
{
    for ($i = 1; $i < $data1; $i++)
    {
        $query = "select * from messages where id='$i' and user_1_id=$id";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
            if ($data)
            {
                $message = $data['message'];
                $time = $data['time'];
                echo "<h3>"."$message" ."</h3>"."$time";
            }
            else
            {
                echo "jai";
            }
        }
}
else
{
    echo "ho";
}
?>
