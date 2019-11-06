<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
 if (empty($login) or empty($password))
    {
    exit ("You have not entered all the information, go back and fill in all the fields!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ("bd.php");
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Sorry, the login you entered is already registered. Enter another login.");
    }
    $result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
    if ($result2=='TRUE')
    {
    echo "You have successfully registered! Now you can enter the site. <a href='index1.php'>Main Page</a>";
    }
 else {
    echo "Error! You are not registered.";
    }
    ?>
	<link href="css/style.css" media="screen" rel="stylesheet">