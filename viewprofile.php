<?php
session_start();
include('header.php');
?>

<html>
<body>
    <br><br>
    <center>
    <h1>VIEW PROFILE</h1><br>
    </center>
</form>
<center>
<h2> NAME:&emsp;<?php echo $_SESSION['NAME'];?> </h2>
    <br>
    <br>
<h2> EMAIL ID:&emsp;<?php echo $_SESSION['email'];?> </h2>

</center>
</body>
</html>

