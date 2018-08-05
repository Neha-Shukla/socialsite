<?php
if(isset($_POST['post']))
{
echo "<meta http-equiv='refresh' content='0'>";
    $status=$_POST['status'];

    $query2 = "insert into status(id,user_id,status,time) values('','$id','$status',NOW())";
    $result2 = mysqli_query($conn, $query2);

    if ($result2)
    {
echo "status updated";
    }
    else
    {
        echo mysqli_error($conn);
    }
}

?>
<html>
<body>
<div class="square" style="width:100%;background-color:skyblue;border-radius:30%;box-shadow:5px 8px 20px pink;">
<center>
<form name="f1" method="post" action="">
    <h3>WHAT'S IN YOUR MIND</h3><br>
<input type="text" name="status" cols="12" rows="3" value="">
<br><br>
    <input type="submit" name="post" value="post">
</center>
	</div>

</div>
</FORM>
</body>
</html>


