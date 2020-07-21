<h2>Matrículas</h2>
    <a href="?page=matricular_aluno">Matricular Aluno</a>
    <table class="table">
        <tr>
            <th>Aluno</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
        <?php
            while($linha = mysqli_fetch_array($resultsMatriculas)) {
                echo '<tr><td>'.$linha['aluno'].'</td><td>'.$linha['curso'].'</td>';
                ?>
                   <td>
                       <a href="?page=editar_matricula&id=<?php echo($linha['id']); ?>">Editar</a>
                       <a href="?page=deletar_matricula&id=<?php echo($linha['id']); ?>">Deletar</a>
                    </td>
                </tr>
                <?php
            }
        ?>

    </table>