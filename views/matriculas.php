<h2>Matrículas</h2>
    <a class="btn-insert" href="?page=matricular_aluno">Matricular Aluno</a>
    <table class="table table-hover table-striped" id="tableMatriculas">
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($linha = mysqli_fetch_array($resultsMatriculas)) {
                    echo '<tr><td>'.$linha['aluno'].'</td><td>'.$linha['curso'].'</td>';
                    ?>
                    <td>
                        <a href="?page=deletar_matricula&id=<?php echo($linha['id']); ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>

    </table>