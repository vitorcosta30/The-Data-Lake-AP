                      <?php
 $codrem = $_POST['user'];
 //if (!$codrem) {echo ''; }

 $ligax = mysqli_connect('localhost', 'root','');
 if (!$ligax){echo "<p> Falha na ligação."; exit; }
 mysqli_select_db($ligax, 'thedatalakeap');
 //$consulta = "Select * From users";
 //$result = mysqli_query($ligax, $consulta);
 $nr_antes = mysqli_num_rows($result);
 $remove = "delete from users
                      where usr_id ='".$codrem."' ";
 $result = mysqli_query($ligax, $remove);
 if ($result==1) {
 	
 	header("Location:delete_user.html");
 //$consulta = "Select * From encomendas";
 $result = mysqli_query($ligax, $consulta);
}else{
	header("Location:usr_not_deleted.html");
}
?>
