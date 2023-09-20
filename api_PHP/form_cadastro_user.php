<?php include_once "header.php"; ?>
<div class="container mt-3">
    <h1>API PHP - CRUD - cadastro de usuario</h1>
    <P>formulario de cadastro</P>

    <form action="cadastro_user.php" method="post">
        <div class="mb-3 mt-3">
            <label for="login_user">login: </label>
            <input type="text" name="login_user" id="login_user" class="form-control"placeholder ="informe seu login">
        </div>

        <div class="mb-3">
            <label for="password_user">Passwork: </label>
            <input type="passwork" name="passwork_user" id="passwork_user" class="form-control" placeholder ="informe seu login">
        </div>

        <div class="mb-3">
            <label for="profile_user">profile: </label>
            <select type="passwork" name="profile_user" id="profile_user" class="form-control">
                <option value="admin">Administrador</option>
                <option value="Cliente">Cliente</option>
            </select>       
        </div>
        
            <input type="submit" value="Cadastrar usuario" class="btn btn-primary">

        

    </form>
    <p><a href="form_cadastro_user"></a></p>
 </div>       
            
<?php include "footer.php"?>