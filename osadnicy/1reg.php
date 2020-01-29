
<?php
session_start();

if(isset($_POST['email'])){
	
	$czy_ok = true;
	$nick = $_POST['nick'];
	if((strlen($nick)<3)||(strlen($nick)>20))
	{
		$czy_ok = false;
		$_SESSION['e_nick']="nick musi posiadac wiecj niz i mniej niz 20 znakow";
		
	}
	if($czy_ok = true){
		echo"udana walidacja";
		header("Location:osadnicy.php");
		
		
	}
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>REJESTRACJA</title>


<meta http-equiv="X-UA-Compatible"content="IE=edge,chrome=1"/>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LfTRtMUAAAAAL3zwYMi6VLIkY_if126iEZp-Yba', {action: 'homepage'}).then(function(token) {
		
       console.log(token);
    });
});
</script>
<style>

<style>
<head> 



<body>
<form method="post">
Nick:<br/> <input type="text" name="nick"/><br/>
</form>
<?php
if(isset($_SESSION['e_nick'])){
	
	
	echo'<div class="error">'.$_SESSION['e_nick'].'</div>';
	unset($_SESSION['e_nick']);
}
?>
email:<br/> <input type="text" name="email"/><br/>
haslo:<br/> <input type="password" name="haslo"/><br/>
</form>
powtorz haslo:<br/> <input type="password" name="haslo1"/><br/>
<label>
<input type="checkbox" name="regulamin"/>akceptuje regulamin
<div class="g-recaptcha"
     data-sitekey="_your_site_key_="6LfTRtMUAAAAANN7TvAXPpeiFJ1zv1QkdAre6LF5"></div>
      
</div>
<input type="submit"value="gotowe"
</label>
</form>



</body>



<html>