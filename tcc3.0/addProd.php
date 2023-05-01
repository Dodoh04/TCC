    <form action="php_action/criar_produto.php" method="POST">
       <div class="topo">
          <h1>CADASTRO DE PRODUTO</h1>
       </div>

      <div class="form-group">
        <label for="nome">NOME DO PRODUTO</label>
        <input type="text" id="name" name="name" required="">
      </div>

      <div class="form-group">
        <label for="nome">FABRICANTE</label>
        <input type="text" id="name" name="name" required="">
      </div>

      <div class="form-group">
        <label for="qtnd">QUANTIDADE</label>
        <input type="text" id="qtnd" name="qtnd" required="">
      </div>

      <div class="form-group">
        <label for="data">DATA DE ATUALIZAÇÃO</label>
        <input type="date" id="data" name="data" required="">
      </div>

      <div class="form-group">
        <label for="data">DATA DE VALIDADE</label>
        <input type="date" id="data" name="dataVal" required="">
      </div>

      <div class="form-group">
        <label for="nome">DESCRIÇÃO</label>
       
        <textarea id="wmd-input" name="decricao" class=""> </textarea>
      </div>
      <div class="form-group">
        <label for="data">BULA</label>
        <input type="file" id="data" name="dataVal" required="">
      </div>
      
      
      <div class="form-group">
        <button type="submit" name="btnCadProd" class="login-button">CADASTRAR</button>
      </div>
    </form>

