<?php
include('connection.php');
session_start();
include('header.php');
$id=$_SESSION['userid'];
echo
"<br><br>"."<center>"."<h1>COMPOSE</h1>
<BR>
<FORM NAME='F1' METHOD='POST' ACTION=''>
    <INPUT TYPE='TEXT' NAME='compose' value=''>
    <br>
    <h4>TO</h4><input type='text' name='to' value='' placeholder='enter friend email_id'>
    <br><br>
    <input type='submit' name='send' value='SEND'>
    
</FORM>"."</center>";
if(isset($_POST['send']))
{

$emailid=$_POST['to'];
$message=$_POST['compose'];
$query="select * from records where email_id='$emailid'";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);
if($result)
{
    $fid = $data['ID'];
    $query1 = "insert into messages values('','$id','$fid','$message',NOW())";
    $result1 = mysqli_query($conn, $query1);
    if ($result1)
    {
        echo "TO:<BR>".$emailid;
        echo "<br";
            echo $_POST['compose'];
    }
        else
            {
            echo mysqli_error($conn);
            }
}
else
{
    echo mysqli_error($conn);
}
}
echo "<hr><hr>";
echo "<h2>INBOX</h2>";
include('inbox.php');
?>
