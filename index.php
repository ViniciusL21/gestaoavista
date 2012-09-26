<!DOCTYPE html>
<?php
include ("classes/class.conexao.php");
extract($_POST);

if($_POST['btnLogin'] != ""){
	$conectar = new conexao();
	$escrever = $conectar->retornar();
	echo $escrever;	
}


?>

<html>
<head>
	
	<meta charset="utf-8" />
	
	<title>Gestão à Vista</title>
	<link rel="stylesheet" href="css/flexi-background.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	

	<script>
	function goAdmin(){
		window.location.href = 'admin.php';
	}
	</script>
	
</head>
<body>
	<script src="js/flexi-background.js" type="text/javascript" charset="utf-8"></script>
	<div id="box">
		<!-- <img src="images/logo.png" class="logo" alt="yourlogo" /> -->
		<h1>Gestão à Vista </h1>
		<form name="f1" method="post" action="">
			<input type="text" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Username':this.value;" value="Username" />
			<input type="password" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Password':this.value;" value="Password">
			<input type="checkbox" id="remember" value="Remember" />
			<div class="hover-opacity"><label for="remember">Me lembre</label></div>
                        <input type="button" name="btnLogin" value="Log In" onclick="goAdmin();"/>
		</form>		

		
	</div>
	<a href="#" class="forgot">Esqueceu sua senha e/ou login?</a>
</body>
</html>