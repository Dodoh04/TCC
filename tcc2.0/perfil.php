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
            <h1>PERFIL </h1>
            
        </div>
               

        
       
    </section>
<?php
    include_once "includes/footer.php";
}
?>