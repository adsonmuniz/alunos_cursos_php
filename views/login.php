    <h2>Login</h2>
    <?php
        if (isset($_GET['erroLogin']))
        {
    ?>
        <div class="alert alert-danger" role="alert">Usuário e/ou senha inválido</div>
    <?php
        }
    ?>
    <form class="form-group" method="post" action="views/process_login.php">
        <label for="user">Login </label>
        <input type="text" id="user" name="user" placeholder="Digite o nome do usuário" class="form-control" required>
        
        <label for="password">Password </label>
        <input type="password" id="password" name="password" placeholder="Digite a senha" class="form-control" required>
        
        <input type="submit" value="Entrar" class="btn">
        <input type="button" onClick="location.href='index.php'" value="Cancelar" class="btn">
    </form>