<?php
    session_start();
    ?>
    <html>
    <head>
	<link href="css/style.css" media="screen" rel="stylesheet">
    <title>Main Page</title>
    </head>
    <body>
    <h2>Main Page</h2>
    <form action="testreg.php" method="post">
 <p>
    <label>Login:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
 
    <p>

    <label>Password:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>


    <p>
    <input type="submit" name="submit" value="Log in">

<br>
<a href="reg.php">Register</a> 
<p><a href="logout.php">Logout</a> from system </p>
    </p></form>
    <br>
    <?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "You entered as a guest<br><a href='#'>This link is only available to registered users.</a>";
    }
    else
    {
    echo "You logged in as ".$_SESSION['login']."<br><a  href='http://youtube.com/'>This link is only available to registered users.</a>";
    }
    ?>
    </body>
    </html>