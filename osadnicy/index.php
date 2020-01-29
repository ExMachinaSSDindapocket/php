
<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)){
	
	header('Location: gra.php');
	exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>GRANSKO FEST</title>
<meta name="decription" content ="TAG"/>
<meta name ="keywords" content="kino"/>
<meta http-equiv="X-UA-Compatible"content="IE=edge,chrome=1"/>
<title>Osadnicy-gra</title>
<head> 



<body>
Mikolajek jest mondrym dzieciaczkiem i nie lubi nart<br/><br/>
<a href="registration.php">zarejestruj sie</a>
/><br/><br/>

<form action="logowanie.php" method="post">
Login:<br/><input type="text" name = "login"/><br/><br/>
Haslo:<br/><input type = "password" name = "haslo"/><br/><br/>
<input type="submit" value="Zaloguj sie"/>
</form>

<?php

//if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
	
	

?>
</body>



<html>