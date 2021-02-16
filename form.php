<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Cadastrar Cliente</title>
</head>
<body>
<div class="container">
<h3>Cadastro de Cliente</h3>
<form method="post" action="cadastro.php">
  <div class="form-group">
  <div class="form-group">   
    <class="form-control" input type= "hidden" name="id">
  </div>  
    <label>CNPJ</label>
    <input type="text" class="form-control" name="cnpj" required data-validation-required-message="">
  </div>
  <div class="form-group">
    <label>Razão Social</label>
    <input type="text" class="form-control" name="razaosocial" required data-validation-required-message="">
  </div>
  <div class="form-group">
    <label>Endereço</label>
    <input type="text" class="form-control" name="endereco" required data-validation-required-message="">
  </div>
  <div class="form-group">
    <label>Telefone</label>
    <input type="text" class="form-control" name="telefone" required data-validation-required-message="">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="text" class="form-control" name="email" required data-validation-required-message="">
  </div>  
  <div class="form-group">    
    <input class="form-control" input type= "hidden" name="datacadastro">
  </div>  
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
</div>
</body>
</html>