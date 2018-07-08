<?php
include('header.php');
include('connection.php');
echo "<br>";

$password = $_SESSION['password'];
$id = $_SESSION['userid'];

if (isset($_POST['submit'])) {
    $oldpassword = $_POST['p1'];
    $newpassword = $_POST['p2'];
    $repeatnewpassword = $_POST['p3'];
    if ($oldpassword == $password) {
        if ($newpassword == $repeatnewpassword) {
            $query = "update records set password='$newpassword' where id='$id';";
            $data = mysqli_query($conn, $query);
            if ($data) {

                session_destroy();
                session_unset();
                header("location:login1.php");
                echo "records updated";

                $_SESSION['password'] = $newpassword;
            } else {
                echo mysqli_error($conn);
            }
        } else {
            echo "passwords mismatched";
        }
    } else {
        echo "wrong password";
    }
}

?>


<html>
<form action="" method="post">
    <h3>OLD PASSWORD</h3><input type="password" NAME="p1"><BR><BR>
    <h3>NEW PASSWORD</h3><input type="PASSWORD" NAME="p2"><br><br>
    <h3>REPEAT_NEW_PASSWORD</h3><input type="PASSWORD" NAME="p3"><br><br>
    <input type="submit" name="submit" value="CHANGE PASSWORD">
</form>
</body>
</html>
