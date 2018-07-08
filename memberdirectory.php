<?php
include('header.php');
include('connection.php');
$id=$_SESSION['userid'];
$i=1;
$query1 = "select count(*) from records";
$result1 = mysqli_query($conn, $query1);
$data1=mysqli_fetch_assoc($result1);

if ($result1)
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
                $fid=$i;
                $_SESSION['fid']=$fid;

                echo "<h3>"."$name" ."</h3>";
                echo "<a href='memberprofile.php'>SEE PROFIE</a>"."<br><br>";

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