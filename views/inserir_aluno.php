<?php 
    if (!isset($_GET['editar']))
    {
?>
        <h2>Cadastro - Aluno</h2>
        <form class="form-group" method="post" action="views/process_aluno.php">
            <label for="nomeAluno">Nome </label>
            <input type="text" id="nomeAluno" name="nomeAluno" placeholder="Nome do aluno" class="form-control">
            
            <label for="nascimento">Nascimento </label>
            <input type="text" id="nascimento" name="nascimento" placeholder="yyyy-MM-dd" class="form-control">
            
            <input type="submit" value="Cadastrar" class="btn">
            <input type="button" onClick="JavaScript: window.history.back();" value="Cancelar" class="btn">
        </form>
<?php
    } else {
        while($linha = mysqli_fetch_array($resultsAlunos)) {
            if($linha['id']==$_GET['editar']) {
    ?>
        <h2>Editar - Aluno</h2>
        <form class="form-group" method="post" action="views/editar_aluno.php">
            <label for="nomeAluno">Nome </label>
            <input type="text" id="nomeAluno" name="nomeAluno" placeholder="Nome do aluno" 
            value="<?php echo $linha['nome'] ?>" class="form-control">
            
            <label for="nascimento">Nascimento </label>
            <input type="text" id="nascimento" name="nascimento" placeholder="yyyy-MM-dd" 
            value="<?php echo $linha['data_nascimento'] ?>" class="form-control">
            
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
            <input type="submit" value="Editar" class="btn">
            <input type="button" onClick="JavaScript: window.history.back();" value="Cancelar" class="btn">
        </f
    <?php
            }
        }
    }
?>