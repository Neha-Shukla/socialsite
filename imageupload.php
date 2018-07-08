<?php
include('connection.php');
include('header.php');
$folder="images/";
if(is_dir($folder))
{
    if($open=opendir($folder))
    {
        while(($file=readdir($open))!=false)
        {
            if($file=='.'||$file=='..')continue;
            echo '<img src="images/'.$file.'" width="150" height="150">';
        }
        closedir($open);
    }
}
?>

<!DOCTYPE html>
<html>
<body>


<form action="" METHOD="POST" enctype="multipart/form-data">
    <INPUT TYPE="FILE" NAME="file" ID="IMAGE"></INPUT>
    <BR><br><br>
    <INPUT TYPE="SUBMIT" NAME="INSERT" ID="INSERT" VALUE="INSERT"/>
    <BR>

</form>
</body>
</html>



