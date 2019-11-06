<?php
    session_start();
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
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);

    include ("bd.php");
$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); 
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    exit ("Sorry, the login or password you entered is incorrect.");
    }
    else {
    if ($myrow['password']==$password) {
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "You have successfully logged into the site! <a href='index1.php'>Main Page</a>";
    }
 else {

    exit ("Sorry, the login or password you entered is incorrect.");
    }
    }
    ?>
	<link href="css/style.css" media="screen" rel="stylesheet">