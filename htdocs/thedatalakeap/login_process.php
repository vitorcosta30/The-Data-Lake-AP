<?php
// começar ou retomar uma sessão
session_start();
 
// se vier um pedido para login
if (!empty($_POST)) {
 
	// estabelecer ligação com a base de dados
 $ligax = mysqli_connect('localhost', 'root', '');
 if (!$ligax) {echo '<p> Falha na ligação.</p>';}
 mysqli_select_db($ligax, 'thedatalakeap');
	//mysqli_connect('localhost', 'root', '') or die(mysqli_error());
	//mysqli_select_db('thedatalakeap');
	$username = ($_POST['username']);
	$password = sha1($_POST['senha']);
 
	// verificar o utilizador em questão (pretendemos obter uma única linha de registos)
	$login = mysqli_query($ligax, "SELECT usr_id FROM users WHERE usr_id = '$username' AND password = '$password'");
 
	if ($login && mysqli_num_rows($login) == 1) {
 
		// o utilizador está correctamente validado
		// guardamos as suas informações numa sessão
		//$_SESSION['id'] = mysqli_result($login, 0, 0);
		//$_SESSION['usrid'] = mysqli_result($login, 0, 1);
         header("Location:login_admin/index.php");

	} else {
 
		// falhou o login
		echo "<p>Utilizador ou password invalidos. <a href=\"login_admin.php\">Tente novamente</a></p>";
	}
}
?>