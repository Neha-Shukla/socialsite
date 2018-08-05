<?php
include('imageupload.php');
include('connection.php');
if(isset($_POST['INSERT']))
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
                $filedestination='images/'.$filenamenew;
                move_uploaded_file($filetmpname,$filedestination);
            if($filename!="")
            {
                $query="insert into image values('','$filename','$filedestination')";
                $result=mysqli_query($conn,$query);
                if($result)
                {
echo "image uploaded";
                }
                else
                {
                    echo mysqli_error($conn);
                }
            }
            }
            else
            {
                echo "your file is too big";
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
if(isset($_POST['DISPLAY']))
{
    $query="select * from image where id=1";
    $result=mysqli_query($conn,$query);


while($data=mysqli_fetch_assoc($result))
{
    echo "<img src='".$data['IMAGE']."' height=100 width=100/>";
    echo "<br>";
}


}
