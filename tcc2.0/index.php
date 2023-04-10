<?php
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
</style>
    <section class="catalogo">
        <div class="pesquisa">
            <h3>MEDICAMENTOS</h3>
            
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
                <tr>
                    <td>1</td>
                    <td>REMÉDIO 1</td>
                    <td>400</td>
                </tr>
            </tbody>
        </table>    
        <button class="addProduto"><a href="AdicionarProd.php">+ Adicionar</a>  </button>
        
        
    </section>
<?php
    include_once "includes/footer.php";
?>