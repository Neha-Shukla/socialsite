<?php
$query3="select * from friends where user_1_id=$id and status=0";
$result3=mysqli_query($conn,$query3);

if($result3)
{
while($data3=mysqli_fetch_assoc($result3))
{
    $friend=$data3['USER_2_ID'];
    $query5="select * from records where id=$friend";
    $result5=mysqli_query($conn,$query5);
    $data5=mysqli_fetch_assoc($result5);
    if($data5)
    {
        $name=$data5['NAME'];
    }
    else
    {
        echo mysqli_error($conn);
    }
    $status=$data3['STATUS'];
        echo $name."<br>";
        echo "<form name='f1' method='post' action=''>
<input type='submit' name='submit1' value='ADD FRIEND'>
"."<br><br>";
        if(isset($_POST['submit1']))
        {

            echo "<meta http-equiv='refresh' content='0'>";
            $query4="update friends set status=2 where user_1_id=$id and user_2_id=$friend";
            $result4=mysqli_query($conn,$query4);
            if($result4)
            {
                echo "friend request sent";
            }
            else
            {
                echo mysqli_error($conn);
            }
        }

    }
}
else 
{
	echo mysqli_error($conn);
}
?>