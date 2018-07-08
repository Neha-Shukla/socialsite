<html>
<head>
    <title>sign in system</title>
</head>
<body background="active.jpg">
<br><br><br><center><h1> LOG IN </h1></center><br><br><br>
<form name="f1" method="POST" action="">
    <center>
        <i><h3>ENTER EMAIL ID</h3></i>
        <input type="text" name="t1" value=""><BR><BR>
        <i><h3>ENTER PASSWORD:</h3></i>
        <input type="password" name="t2" value=""><br><br><br>
        <input type="submit" name="submit" value="SIGN IN">
    </center>
</form>


</body>
</html>
<?php
//include connection file in starting so it is easy to understand and debug
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
        //this will show any error if query doesn't work
        echo mysqli_error($conn);
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            //always start the session after credintials have been checked
            session_start();
            $_SESSION['email'] = $e;
            $data=mysqli_fetch_assoc($result);
            $username=$data["NAME"];
            $_SESSION['NAME']=$username;
            $userid=$data["id"];
            $_SESSION['userid']=$userid;
            $_SESSION['password']=$p;
            $_SESSION['dob']=$data['dob'];

            //error was in this statement we don't write location=: we only write location:
            header("location:firstpage.php");
        } else {
            echo $error;
        }
        mysqli_close($conn);
    }
}
?>