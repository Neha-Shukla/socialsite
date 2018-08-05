<html>
<head>
    <title>sign in system</title>
</head>
<body background="alone1.jpg">
<br><br><br><center><h1> LOG IN </h1></center><br><br><br>
<form name="f1" method="POST" action="">
    <center>
        <i><h3>ENTER EMAIL ID</h3></i>
        <input type="text" name="t1" value=""><BR><BR>
        <i><h3>ENTER PASSWORD:</h3></i>
        <input type="password" name="t2" value=""><br><br><br>
        <input type="submit" name="submit" value="SIGN IN">
       <H3> NOT A MEMBER:</H3><BR>
            <input type="button" name="submit1" value="SIGNUP" onclick="window.location.href='signup.php'"/>

    </center>
</form>


</body>
</html>
<?php

include("connection.php");
if(isset($_POST['submit'])) {
    $error = "username or password is invalid";
    if (empty($_POST['t1']) || empty($_POST['t2'])) {
echo $error;

    } else {

        $e = $_POST['t1'];
        $p = $_POST['t2'];
        $query = "SELECT * from records where email_id='$e' and password='$p'";
        $result = mysqli_query($conn, $query);
       $data=mysqli_fetch_assoc($result);
        if ($result)
			{
            session_start();
            $_SESSION['email'] = $e;
            $username=$data["NAME"];
            $_SESSION['NAME']=$username;
            $userid=$data["ID"];
            $_SESSION['userid']=$userid;
            $_SESSION['password']=$p;
            $_SESSION['dob']=$data['DOB'];

           
            header("location:firstpage.php");
        } else {
            echo $error;
        }
        mysqli_close($conn);
    }
}


?>