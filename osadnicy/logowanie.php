<?php
session_start();
require_once"connect.php";
$polaczenie = @new mysqli($host ,$db_user, $db_password ,$db_name);
if($polaczenie->connect_errno!=0){
echo "Error:".$polaczenie->connect_errno."Opis:".$polaczenie->connect_error;
}
else{
	
$login =$_POST['login'];
$haslo=$_POST['haslo'];

$sql="SELECT * FROM uzytkownicy WHERE user ='$login' AND pass = '$haslo'";
if($rezultat = @$polaczenie->query($sql)){
	echo"dziala";
		
	$ile_userow= $rezultat->num_rows;
	if($ile_userow >0){
		echo"dziala1";
		
		$wiersz =$rezultat->fetch_assoc();
		
		$_SESSION['user'] = $wiersz['user'];
		$_SESSION['email'] = $wiersz['email'];
		$_SESSION['drewno'] = $wiersz['drewno'];
		$_SESSION['kamien'] = $wiersz['kamien'];
		$_SESSION['zboze'] = $wiersz['zboze'];
		$_SESSION['dnipremium'] = $wiersz['dnipremium'];
		unset($_SESSION['blad'];
		$rezultat->free_result();
	
		
		header('Location: gra.php');
		
		
	} else{
		header('Location: index.php');
		//$_SESSION['blad']=' span style="color:red"> zly login lub haslo!';
		
	}

}

$polaczenie->close();

}





?>

