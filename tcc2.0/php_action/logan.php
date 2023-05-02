<?php 
	require_once 'conexao_bd.php';
	
    if(isset($_POST["login"]) && isset($_POST["senha"]) && $connection != null){
        $query = $connection->prepare("SELECT * FROM `usuario` WHERE login = ? AND senha = ?");
        $query->execute(array($_POST["login"], $_POST["senha"]));

        if($query != null){
            $user = $query;

            session_start();
            $_SESSION["usuario"] = $user["login"];

            header('location: ../estoque.php');
        }else{
            echo 'deu erro 1';

           // header('location: ../index.php');
        }
    }else{
        echo 'deu erro 2';
        //header('location: ../index.php');
    }
?>
