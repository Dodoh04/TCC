<?php 

	

	require_once 'conexao_bd.php';

	if (isset($_POST['btnLogar'])) {
        

		$login = mysqli_real_escape_string($connection, $_POST['login']);
		$senha = mysqli_real_escape_string($connection, $_POST['senha']);

        session_start();
	    $_SESSION['nome'] = $login;

		$query = "SELECT * FROM usuario WHERE `login` = '$login' and `senha` = '$senha'";

		$resultado = mysqli_query($connection, $query);

		$linha = mysqli_fetch_assoc($resultado);

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
