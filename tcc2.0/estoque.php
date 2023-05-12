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
    
    
    $text = "";
?>
<style>
    /*add produto botão*/
.addProduto {
    padding: 5px;
    background-color: #69E7B2;
    border: none;
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
</style>
<section class="catalogo">
        <div class="pesquisa">
            <h3>MEDICAMENTOS </h3>
            
        </div>
        <table>
            <thead class="list">
            
                <tr>
                    <th>COD. </th>
                    <th>NOME</th>
                    <th>QUANTIDADE</th>
                    <th>DATA DE ATUALIZAÇÃO</th>
                </tr>
               
            </thead>
            <tbody>
                <!-- INICIO DA ESTRUTURA DE REPETIÇÃO EM PHP DE CONSULTA AO BD-->
            <?php 

                $sql = "SELECT * FROM Produtos";

                $resultado = mysqli_query($connection, $sql);

                    
                while($dados = mysqli_fetch_array($resultado)){

                ?>	
                <tr>
                <td><?php echo $dados['IdProduto'];?></td>
                <td>
                    <a href="alterar_prod.php?id=<?php echo $dados['IdProduto'] ?>" class=" ">
                        <?php echo $dados['NomeProd'];?>
                    </a>
                </td>
                <td><?php echo $dados['QtndProd'];?></td>
                <td><?php echo $dados['DataAtualProd'];?></td>
                    
                </tr>
                <?php }
        //FIM DA CONSULTA
		?>
            </tbody>
        </table>        

        
        <button class="addProduto"><a href="AdicionarProd.php">+ Adicionar</a>  </button> 
    </section>
<?php

    include_once "includes/footer.php";
}
?>