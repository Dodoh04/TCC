<?php

    session_start();
    
    
if($_SESSION['nome'] == NULL){
    session_start();
    session_destroy();

    header('location: index.php');
    exit;
    
}else{
    include_once "php_action/conexao_bd.php";
    include_once "includes/head.php";
    include_once "includes/menu.php";

    $_SESSION['nome'];
      
?>
<style>
    tr, td{
    display: flex;
    justify-content: space-between;
    padding: ;
}
tr{
    width: 90%;
    text-align: center;
    border-bottom: solid 1px;
}
th{
    margin-right: 0px;
    margin: 0 auto;
}
td{
    width: 10%;
    margin-left: 5px;
    margin: 0 auto;
    
}
.list{
    font-weight: bold;
    
}

</style>
        <section class="catalogo">
        <div class="pesquisa">
            <h3>CLIENTES</h3>
            
        </div>
        <table>
            <thead class="list">
                <tr>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th class="problema">CPF</th>
                </tr>
            </thead>
            <tbody>
                <!-- INICIO DA ESTRUTURA DE REPETIÇÃO EM PHP DE CONSULTA AO BD-->
            <?php 

                    $sql = "SELECT * FROM usuario";

                    $resultado = mysqli_query($connection, $sql);

                    $dado = mysqli_fetch_array($resultado);

                    if($dado['cliente'] = 1){    

                    while($dados = mysqli_fetch_array($resultado)){

                    ?>	
                <tr>
                    <td><?php echo $dados['nome'];?></td>
                    <td><?php echo $dados['email'];?></td>
                    <td><?php echo $dados['cpf'];?></td>
                </tr>
                <?php }
        //FIM DA CONSULTA
		?>
            </tbody>
        </table>    

        
        
    </section>
<?php
    include_once "includes/footer.php";
                    }}
?>