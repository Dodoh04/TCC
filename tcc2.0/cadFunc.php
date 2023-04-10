<?php
    include_once "includes/head.php";
?>
<style>
    form{
        width: 100%;
        height: auto;
        border: 0px;
    }
    .topo{
        width: 80%;
        display: flex;
        justify-content: center;
        margin: 0px auto;
    }
    .topo h1{
        font-size: 40px;
        display: block;
        margin: 0px auto;
    }
    .topo img{
        width: 100px;
        display: block;
        margin: 0px auto;
        
    }
    .form-group label {
        display: block;
        font-size: 1.2em;
        color: #000;
        margin-bottom: 10px;
    }
    input[type="text"],
input[type="email"],
input[type="password"] {
    width: 60%;
    display: block;
    margin: 0px auto;
  box-sizing: border-box;
  padding: 10px;
  border: none;
  background-color: #f0f0f0;
  font-size: 1.2em;
  color: #555;
  box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
}
    label{
        text-align: center;
        color: #000;
    }
    .login-button {
  background-color: #7EF48A;
  border: none;
  color: #000;
  cursor: pointer;
  font-size: 1.2em;
  padding: 10px;
  width: 50%;
  transition: background-color 0.3s ease;
  transition: 0.25s;
  display: block;
    margin: 20px auto;
}
</style>

    <form>
       <div class="topo">
       <h1>CADASTRO DE FUNCIONARIOS</h1><img src="img/logoTcc.png" alt="logo">
       </div>
      <div class="form-group">
        <label for="nome">NOME</label>
        <input type="text" id="nome" name="name" required="">
      </div>
      <div class="form-group">
        <label for="text">CPF</label>
        <input type="text" id="cpf" name="cpf" required="">
      </div>
      <div class="form-group">
        <label for="e-mil">E-MAIL</label>
        <input type="text" id="email" name="e-mil" required="">
      </div>
      <div class="form-group">
        <button type="submit" class="login-button">CADASTRAR</button>
      </div>
    </form>
<?php
    include_once "includes/footer.php";
?>

