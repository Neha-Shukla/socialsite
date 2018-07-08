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
            background-color: white;
            padding: 10px;
            text-align: center;
            font-size: 10px;
            color: white;
        }
        }
    </style>
</HEAD>
<BODY>
<form align="right" name="form" method="post" action="logout.php">
    <label>
        <input name="submit" type="submit" id="submit" value="log out">
    </label>
</form>
<header>
    <input type="button" style="background:blue; color:white;border:5px darkblue solid;box-shadow: 6px 6px 5px blue;" value="VIEW PROFILE" ONCLICK="window.location.href='viewprofile.php'"/>
    <input type="button"style="background:blue;color:white; border:5px darkblue solid; box-shadow: 6px 6px 5px blue;"value="EDIT PROFILE" ONCLICK="window.location.href='editprofile.php'"/>
    <input type="button" style="background:blue; color:white;border:5px darkblue solid;box-shadow: 6px 6px 5px blue;" value="MEMBER DIRECTORY" ONCLICK="window.location.href='memberdirectory.php'"/>
    <input type="button" style="background:blue; color:white;border:5px darkblue solid;box-shadow: 6px 6px 5px blue;" value="FRIENDS" ONCLICK="window.location.href='friends.php'"/>
    <input type="button"style="background:blue; color:white;border:5px darkblue solid;box-shadow: 6px 6px 5px blue;"  value="VIEW FEED" ONCLICK="window.location.href='viewfeed.php'"/>
    <input type="button" style="background:blue; color:white;border:5px darkblue solid;box-shadow: 6px 6px 5px blue;" value="MESSAGES" ONCLICK="window.location.href='message.php'"/>


</header>
</BODY>
</HTML>
<?php
session_start();
ECHO $_SESSION['NAME'];
?>