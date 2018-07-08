
<?php
include('header.php');
include('connection.php');
echo "<br>";

if (isset($_POST['save']))
{
    $dob= $_POST['dob'];
    $emailid= $_POST['email_id'];
    $name=$_POST['name'];

    $id = $_SESSION['userid'];
    $query = "update records set NAME='$name',DOB='$dob',EMAIL_ID='$emailid' where ID='$id'";
    $data = mysqli_query($conn, $query);

    if ($data)
       {
        echo "records updated";
        $_SESSION['NAME'] = $name;
        $_SESSION['email'] = $emailid;
        $_SESSION['dob'] = $dob;
        }

    else
    {
        echo mysqli_error($conn);
    }

}



echo "<form name='f1' method='post' action=''>
        <CENTER>  <h1>EDIT PROFILE</h1><br></CENTER><BR>
   <h3>NAME:</h3> <input type='text' name='name' value=''><BR><BR>
   <H3>EMAIL ID</H3> <input type='text' name='email_id' value=''><BR><BR>
    <H3>DATE OF BIRTH</H3> <input type='DATE' name='dob' value=''><BR><BR>
    <a href='change_password.php'>CHANGE PASSWORD</a><BR><BR>
        <input type='submit' name='save' value='save' action='left'><BR><BR>";
?>
