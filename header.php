<!DOCTYPE HTML>
<HTML>
<HEAD>
    <TITLE>HOME</TITLE>
    <style>
        {
            box-sizing:border-box;
        }
        header
        {
			width:100%;
            background-color: black;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            color: white;
        }
		h2
		{
			font-size:30px;
			color:black;
		}
		input[type=text]
{
width:25%;
padding:17px;
margin:8px 0;
box-sizing:border-box;
border:2px solid lightgrey;
border-radius:4px;
box-shadow:12px 3px 17px red;
-webkit-transition:0.5s;
transition:0.5s;
}
input[type=text]:focus
{
border:3px solid red;
}
input[type=password]
{
width:25%;
padding:17px;
margin:8px 0;
box-sizing:border-box;
border:2px solid lightgrey;
border-radius:10px;
box-shadow:12px 3px 17px red;
-webkit-transition:0.5s;
transition:0.5s;
}
input[type=password]:focus
{
border:3px solid darkblue;
}
input[type=date]
{
width:25%;
padding:17px;
margin:8px 0;
box-sizing:border-box;
border:2px solid lightgrey;
border-radius:10px;
box-shadow:12px 3px 17px red;
-webkit-transition:0.5s;
transition:0.5s;
}
input[type=date]:focus
{
border:3px solid darkblue;
}
H3
{
color:darkblue;
font-style:serif;
}
H1
{
font-family: 'sancreek';font-size: 50px;
text-shadow:4px 4px lightpink;
color:black;
}
input[type=submit]
{
width:9%;
padding:10px;
margin:4px 0;
box-sizing:border-box;
background-color:grey;
border:2px solid lightgrey;
border-radius:14px;
box-shadow:5px 5px 14px grey;
-webkit-transition:0.5s;
transition:0.5s;
}
input[type=submit]:focus
{
border:3px solid darkblue;
background-color:black;
color:white;
}
input[type=button]
{
width:11%;
padding:10px;
margin:2px 0;
box-sizing:border-box;
background-color:black;
color:white;
border:2px solid black;
border-radius:10px;
box-shadow:8px 8px 14px grey;
-webkit-transition:0.5s;
transition:0.5s;
}
input[type=button]:focus
{
border:3px solid darkblue;
background-color:white;
color:black;
}

    </style>
</HEAD>
<BODY background="background.jpg">
<header>
    <input type="button" value="HOME" ONCLICK="window.location.href='firstpage.php'"/>
    <input type="button" value="VIEW PROFILE" ONCLICK="window.location.href='viewprofile.php'"/>
    <input type="button"value="EDIT PROFILE" ONCLICK="window.location.href='editprofile.php'"/>
    <input type="button" value="MEMBER DIRECTORY" ONCLICK="window.location.href='memberdirectory.php'"/>
    <input type="button"  value="VIEW FEED" ONCLICK="window.location.href='viewfeed.php'"/>
    <input type="button" value="MESSAGES" ONCLICK="window.location.href='message.php'"/>
   <input type="button" value="FRIENDS" ONCLICK="window.location.href='friends.php'"/>
   <input type="button" value="FRIEND REQUEST" ONCLICK="window.location.href='friendrequest.php'"/>

</header>

<form align="right" name="form" method="post" action="logout.php">
    <label>
        <input name="submit" id="logout" type="submit" id="submit" value="log out">
    </label>
</form>

</BODY>
</HTML>
<?php
 ECHO "<h2><b>".$_SESSION['NAME']."</b></h2>";
 ?>