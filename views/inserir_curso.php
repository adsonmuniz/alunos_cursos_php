<?php 
    if (!isset($_GET['editar']))
    {
?>
        <h2>Cadastro - Curso</h2>
        <form class="form-group" method="post" action="views/process_curso.php">
            <label for="nomeCurso">Curso </label>
            <input type="text" id="nomeCurso" name="nomeCurso" placeholder="Nome do curso" class="form-control">
            
            <label for="cargaHoraria">Carga Horária </label>
            <input type="text" id="cargaHoraria" name="cargaHoraria" placeholder="Carga Horária" class="form-control">
            
            <input type="submit" value="Cadastrar" class="btn">
            <input type="button" onClick="JavaScript: window.history.back();" value="Cancelar" class="btn">
        </form>
<?php
    } else {
        while($linha = mysqli_fetch_array($resultsCursos)) {
            if($linha['id']==$_GET['editar']) {
    ?>
        <h2>Editar - Curso</h2>
        <form class="form-group" method="post" action="views/editar_curso.php">
            <label for="nomeCurso">Curso </label>
            <input type="text" id="nomeCurso" name="nomeCurso" placeholder="Nome do curso" 
            value="<?php echo $linha['nome'] ?>" class="form-control">

            <label for="cargaHoraria">Carga Horária </label>
            <input type="text" id="cargaHoraria" name="cargaHoraria" placeholder="Carga Horária" 
            value="<?php echo $linha['carga_horaria'] ?>" class="form-control">

            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
            <input type="submit" value="Editar" class="btn">
            <input type="button" onClick="JavaScript: window.history.back();" value="Cancelar" class="btn">
        </form>
    <?php
            }
        }
    }
?>