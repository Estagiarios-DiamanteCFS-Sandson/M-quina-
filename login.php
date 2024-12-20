 <?php
include_once "acoes/acao_login.php";
?> 

<!DOCTYPE html>
<html lang="pt-p~PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Tarefa/CSS/login.css">
    <link rel="stylesheet" href="Tarefa/CSS/bootstrap.min.css">
    
</head>
<body>
    <div class="meta">
        <h1 class="logo m-5">Delicious</h1>
        <div class="card"> 
            
       
            <form  method=
            "POST">
            
                <h3>Login</h3>
                <div class="mb-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="nome@gmail.com" required>
                </div>
                <div class="mb-2">
                     <label for="password">senha</label>
                     <input type="password" class="form-control" name="Senha " id="password" placeholder="senha" required>
                </div>
                <div class="mb-2">  
                    <a id="Nao" href="R.senha.html"> Esqueceu sua senha?</a>
                    <p><input id="lm" type="checkbox" name="Lembrar de mim"> Lembrar de mim</p>
                    <button type="submit" class="btn" id="login" name="btn-ligin">Login</button>
                    
                </div>
                <div class="mb-2">
                <p>Não tem uma conta?<a href="Cadastro.html"><label type="submit" class="btn" id="conta"> Criar conta</label></a></p>
            </form>   
        </div>
        
       
    </div>
        
</body>
</html>