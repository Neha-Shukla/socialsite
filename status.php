<?php
include('connection.php');

if(isset($_POST['post']))
{
    $status=$_POST['status'];

    $query2 = "insert into status( id,user_id,status_time,status_content) values('','$userid',NOW(),'$status')";
    $result2 = mysqli_query($conn, $query2);

    if ($result2)
    {

    }
    else
    {
        echo mysqli_error($conn);
    }
}

?>
<html>
<body>
<div class="square">
<form name="f1" method="post" action="">
    <h3>WHAT'S IN YOUR MIND</h3><br>
<input type="text" name="status" cols="12" rows="3" value="">
    <input type="submit" name="post" value="post">
</div>

</div>
</FORM>
</body>
</html>


