<!DOCTYPE HTML>
<HTML>
<HEAD>
    <TITLE>HOME</TITLE>
    <link rel="stylesheet" href="css/style.css"/>
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
<input type="button" style="background:blue; color:white;border:1px darkblue solid;box-shadow: 6px 6px 5px; #999;" value="VIEW PROFILE" ONCLICK="window.location.href='viewprofile.php'"/>
<input type="button"style="background:blue;color:white; border:1px darkblue solid; box-shadow: 6px 6px 5px; #999;"value="EDIT PROFILE" ONCLICK="window.location.href='editprofile.php'"/>
<input type="button" style="background:blue; color:white;border:1px darkblue solid;box-shadow: 6px 6px 5px; #999;" value="MEMBER DIRECTORY" ONCLICK="window.location.href='memberdirectory.php'"/>
<input type="button" style="background:blue; color:white;border:1px darkblue solid;box-shadow: 6px 6px 5px; #999;" value="FRIENDS" ONCLICK="window.location.href='friends.php'"/>
<input type="button"style="background:blue; color:white;border:1px darkblue solid;box-shadow: 6px 6px 5px; #999;"  value="VIEW FEED" ONCLICK="window.location.href='viewfeed.php'"/>
<input type="button" style="background:blue; color:white;border:1px darkblue solid;box-shadow: 6px 6px 5px; #999;" value="MESSAGES" ONCLICK="window.location.href='inbox.php"'/>
</header>
    <h1>HOME</h1>
<DIV CLASS="SQUARE">
    <H3>PROFILE</H3>
    <UL>
        <LI><A HREF="viewprofile.php">VIEW PROFILE</A></LI>
        <LI> <A HREF="editprofile.php">EDIT PROFILE</A></LI>
    </UL>
</DIV>
<DIV CLASS="SQUARE">
    <H3>FRIENDS</H3>
    <UL>
        <LI><A HREF="memberdirectory.php.php">MEMBER DIRECTORY</A></LI>
        <li>
            <A HREF="friends.php">FRIENDS</A>
        </li>
    </UL>
</DIV>
<DIV CLASS="SQUARE">
    <H3>NEWS FEED</H3>
    <UL>
        <LI>
            <A HREF="viewfeed.php">VIEW FEED</A>
        </LI>
        <LI>
            <A HREF="status.php">STATUS</A>
        </LI>
    </UL>
</DIV>
<DIV CLASS="SQUARE">
    <H3>MESSAGES</H3>
    <UL>
        <LI>
            <A HREF="inbox.php.php">INBOX</A>
        </LI>
        <LI>
            <A HREF="compose.php">COMPOSE</A>
        </LI>
    </UL>
</DIV>

</BODY>
</HTML>

