<?php
include('imageupload.php');
if(isset($_POST['insert']))
{
    $file=$_FILES['file'];
    $filename=$_FILES['file']['name'];
    $filetmpname=$_FILES['file']['tmp_name'];
    $filesize=$_FILES['file']['size'];
    $fileerror=$_FILES['file']['error'];
    $filetype=$_FILES['file']['type'];
    $fileext=explode('.',$filename);
    $fileactualext=strtolower(end($fileext));
    $allowed=array('jpg','jpeg','png','pdf');
    if(in_array($fileactualext,$allowed) ){
if($fileerror===0)
{
    if($filesize<1000000)
    {
        $filenamenew=uniqid('',true).".".$fileactualext;
        $filedestination='files/xyz/'.$filenamenew;
        move_uploaded_file($filetmpname,$filedestination);
    }
    else
    {
        echo "ypur file is too big";
    }
}
else
    {
    echo "there was an error";
}
    }
    else{
        echo "you cannot upload files of this type";
    }

}