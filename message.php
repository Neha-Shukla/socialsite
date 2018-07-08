<?php
include('header.php');
include('connection.php');

echo
"<h3>COMPOSE</h3>
<BR>
<FORM NAME='F1' METHOD='POST' ACTION=''>
    <INPUT TYPE='TEXT' NAME='compose' value=''>
    <br>
    <h4>TO</h4><input type='text' name='to' value='' placeholder='enter friend email_id'>
    <br><br>
    <input type='submit' name='send' value='SEND'>
    
</FORM>";
if(isset($_POST['send']))
{
$id=$_SESSION['userid'];
$emailid=$_POST['to'];
$message=$_POST['compose'];
$query="select * from records where email_id='$emailid'";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);
if($result)
{
    $fid = $data['id'];
    $query1 = "insert into messages values('','$id','$fid','$message',NOW())";
    $result1 = mysqli_query($conn, $query1);
    if ($result1)
    {
        echo "TO:<BR>".$emailid;
        echo "<br";
            echo $message;
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
?>
