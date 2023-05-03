<?php

    session_start();
    $_SESSION['nome'];

    include_once "php_action/conexao_bd.php";
    include_once "includes/head.php";
    include_once "includes/menu.php";

    
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
            <h3>MEDICAMENTOS <?php echo $_SESSION['nome'];?> </h3>
            
        </div>
        <table>
            <thead class="list">
            
                <tr>
                    <th>COD. </th>
                    <th>NOME</th>
                    <th>QUANTIDADE</th>
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
                    <td><?php echo $dados['NomeProd'];?></td>
                    <td><?php echo $dados['QtndProd'];?></td>
                    
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
?>