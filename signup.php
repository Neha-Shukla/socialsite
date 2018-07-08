<?php
include("connection.php");
error_reporting(0);
    if(isset($_POST['submit']))
    {
        $name = $_POST['t1'];
        $password = $_POST['t3'];
        $email = $_POST['t2'];
        $dob = $_POST['t4'];
        $query = "insert into records(NAME,EMAIL_ID,PASSWORD,DOB) values('$name','$email','$password','$dob')";
            $data = mysqli_query($conn, $query);
            if ($data)
            {
                echo "inserted records successfully";
                header("location:login1.php");
            }
            else
                {
                echo "please recheck the info";
                }
}
?>
<html>
<head>
    <title>sign up system</title>
</head>
<body background="globe1.jpg">
<center><h1><u> SIGN UP </u></h1></center>
<form method="post" action="./signup.php">

        <i><br><h3> ENTER THE NAME:</h3></i>
            </h3>
        <input type="text" name="t1" value="">
        <br><br>
    <i><h3>ENTER EMAIL ID</h3></i>
        <input type="text" name="t2" value=""><BR><BR>
    <i><h3>ENTER PASSWORD:</h3></i>
        <input type="password" name="t3" value=""><br><br>
    <i>   <h3>ENTER THE DOB:</h3></i>

        <INPUT TYPE="DATE" NAME="t4" VALUE=""><BR>

<br><br>
        <input type="submit" name="submit" value="SIGN UP">

</form>

</body>
</html>
