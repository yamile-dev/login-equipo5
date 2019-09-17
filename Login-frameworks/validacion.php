<?php
session_start();
if(isset($_POST['Entrar'])){
	$usuario = $_POST['txtuser'];
	$password = $_POST['txtpassword'];

	if($usuario == 'admin' && $password == 'admin'){
	   header("location: admin.html");
	}
	else{
		if($usuario == 'clientes' && $password == 'clientes'){
		header("location: cong.html");
		}
		else{
		echo '<script>
		alert("datos erroneos");
		window.location.replace("prin.html");
		</script>';
		}
}
}
?>