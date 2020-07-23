                         <?php 
                           $usrid = ($_POST['id']);
                           $pass = sha1($_POST['pass']);
                           $message= "User inserido com sucesso";
                          

                           $ligax = mysqli_connect('localhost', 'root', '');
                           if (!$ligax)  {echo '<p> Erro: Falha na ligação.'; exit;};
                           mysqli_select_db($ligax, 'thedatalakeap');
                           $insere = "INSERT INTO users ( usr_id, password ) VALUES ('".$usrid."', '".$pass."')";
                           $result = mysqli_query($ligax, $insere);
                           if ($result==1){



header("Location:usr_inserted.html");
//echo '<script type="text/javascript">';
//echo '<script type=\"text/javascript\">alert("O registo foi inserido na Base de Dados");</script>';

//echo '</script>' ;
		// o utilizador está correctamente validado
		// guardamos as suas informações numa sessão
		//$_SESSION['id'] = mysqli_result($login, 0, 0);
		//$_SESSION['usrid'] = mysqli_result($login, 0, 1);

       //  echo "<script type='text/javascript'>alert('Utilizador inserido com sucesso')</script>";
        
//echo '<script language="javascript">';
//echo 'alert("message successfully sent")';
//echo '</script>';
  







	} else {
 
		// falhou o login
         
header("Location:usr_not_inserted.html");
        
         
	}

                        ?>