<?php
error_reporting(0);
session_start();
include('connection.php');
include('header.php');
echo "<br><br>";
$id=$_SESSION['userid'];
include('status.php');
echo "<br><br>";
$query="select * from status";
$result=mysqli_query($conn,$query);
$data=mysqli_num_rows($result);
if ($result) {
    // for ($i = 1; $i <$data; $i++)
    {

        $query2 = "select * from status where id='$i'";
        $result2 = mysqli_query($conn, $query2);
        $data2 = mysqli_fetch_assoc($result2);
        if($result2)
        {

            $userid=$data2['USER_ID'];
            $time=$data2['TIME'];
            $status=$data2['STATUS'];
            $query1="select * from records where id=$userid";
            $result1=mysqli_query($conn,$query1);
            $data1=mysqli_fetch_assoc($result1);
            if($result1)
            {
                $name=$data1['NAME'];
                echo "<center>"."<h3>"."$name"."</h3>" . "$status" . "<br>" . "$time" . "<br>"."</center>";
                echo "<center>"."<form name='f' method='post' action=''>
<input type='submit' name='delete' value='DELETE'>"."<br><br>"."</center>";
                if(isset($_POST['delete']))
                {
echo "<meta http-equiv='refresh' content='0'>";
                    $query4="delete from status where id='$i' and STATUS='$status'";
                    $result4=mysqli_query($conn,$query4);
                    if($result4)
                    {
                        $query5 = "alter table status drop id";
                        $result5 = mysqli_query($conn, $query5);
                        if($result5)
                        {
                            $query6 = "ALTER TABLE `status` ADD `ID` INT(11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`ID`)";
                            $result6 = mysqli_query($conn, $query6);
                            IF($query6)
                            {

                            }
                            else
                            {
                                echo mysqli_error($conn);
                            }
                        }
                        else
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

