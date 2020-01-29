


<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible"content="IE=edge,chrome=1"/>
<title>Osadnicy-gra</title>
<head> 



<body>
<?php
echo $_SESSION['user']."-> user"; echo<<<END
<br/><br/>
END;

echo $_SESSION['email']."-> email"; echo<<<END
<br/><br/>
END;
echo $_SESSION['drewno']."-> drewno" ; echo<<<END
<br/><br/>
END;
echo $_SESSION['kamien']."-> kamien"; echo<<<END
<br/><br/>
END;
echo $_SESSION['zboze']."-> zboze"; echo<<<END
<br/><br/>
END;
echo $_SESSION['dnipremium']."-> dni premium";
?>

</body>



<html>