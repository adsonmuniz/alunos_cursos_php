    <h2>Matricular Aluno</h2>
    <form  class="form-group" action="views/process_matricula.php" method="post">
        <span for="nomeAluno">Aluno </span>
        <select name="nomeAluno" class="form-control">
            <option value="0"></option>
            <?php 
                while($aluno = mysqli_fetch_array($resultsAlunos))
                {
                    echo('<option value="'.$aluno['id'].'">'.$aluno['nome'].'</option>');
                }
            ?>
        </select>
        <span for="nomeCurso">Curso </span>
        <select name="nomeCurso" class="form-control">
            <option value="0"></option>
            <?php 
                while($aluno = mysqli_fetch_array($resultsCursos))
                {
                    echo('<option value="'.$aluno['id'].'">'.$aluno['nome'].'</option>');
                }
            ?>
        </select><input type="submit" value="Matricular" class="btn">
        <input type="button" onClick="JavaScript: window.history.back();" value="Cancelar" class="btn">
    </form>