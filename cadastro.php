<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <h3>Cadastrar </h3>
        <form action="gravar.php" method="post" style="width:300px">
            <input type="text" name="login/email" placeholder="Login/Email" class="form-control">
            <br>
            <input type="senha" name="senha" placeholder="Senha"  class="form-control">
            <br>
            <input type="confirmar" name="confirmar" placeholder="Confirmarsenha"  class="form-control">
            <br>
       
        <br>
        
        <br>
        <select name="">
        <option value="Administrador" selected disabled>Perfil:</option> 
  <option value="Administrador">Administrador</option> 
  <option value="Usuário">Usuário</option>
</select>
       <br>
       <br>
        <input type="submit" class="btn btn-success" value="Cadastrar">
<br>
      <br>
       <a href="index.php">Página Inicial</a>
       <div>
           <script>
           $(document).ready(function(){
               $("#confirmarsenha").focusin(function(){
                if ($(this). val() != $("#senha").val()){
                    alert('Senhas Diferentes!')
                }
                   
               })
               
               
           })
           
           </script>
           
           
       </div>
        </form>
    </div>
</body>
</html>