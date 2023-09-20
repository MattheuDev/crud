<?php include_once "header.php"; ?>
<div class="container mt-3">
    <h1>API PHP - CRUD - LOGIN (noturno)</h1>
    <P>Acesso ao sistema</P>

    <form action="valida_login.php" method="post">
        <div class="mb-3 mt-3">
            <label for="login_user">login: </label>
            <input type="text" name="login_user" id="login_user" class="form-control"placeholder ="informe seu login">
        </div>

        <div class="mb-3">
            <label for="password_user">Passwork: </label>
            <input type="passwork" name="passwork_user" id="passwork_user" class="form-control" placeholder ="informe sua senha">
        </div>

        
        
            <input type="submit" value="acessar supreme produtos" class="btn btn-primary">
        

    </form>
        <p><a href="form_cadastro_user.php">Cadastrar - se</a>| <a href="#">Esqueceu sua senha</a></p>
 </div>       
            
<?php include "footer.php"?>