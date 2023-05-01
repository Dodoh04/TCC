<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btnLogar'])) {

		$email = mysqli_real_escape_string($connection, $_POST['username']);
		$senha = mysqli_real_escape_string($connection, $_POST['password']);

		$query = "SELECT * FROM logins WHERE `login` = '$email' and `senha` = '$senha'";

		$resultado = mysqli_query($connection, $query);

		$linha = mysqli_fetch_assoc($resultado);

		session_start();

		$_SESSION["usuario"] = array($email["login"]);

		if (!$resultado) {
			echo 'Erro ao executar a consulta: ' . mysqli_error($connection);
			exit;
		}
		
		$total = mysqli_num_rows($resultado);

		

			if($total == 1){
				
				echo 'deu certo';

				header('location: ../estoque.php');
			}
			else{
				echo 'Deu errado!!!!!! <br>';
			}

    
		
	}
?>
