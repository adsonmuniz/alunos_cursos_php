    <h2>Cursos</h2>
    <a href="?page=inserir_curso">Inserir Curso</a>
    <table class="table">
        <tr>
            <th>Curso</th>
            <th>Carga Horária</th>
            <th>Ações</th>
        </tr>
        <?php
            while($linha = mysqli_fetch_array($resultsCursos)) {
                echo '<tr><td>'.$linha['nome'].'</td><td>'.$linha['carga_horaria'].'</td>';
                ?>
                   <td>
                       <a href="?page=inserir_curso&editar=<?php echo($linha['id']); ?>">Editar</a>
                       <a href="?page=deletar_curso&id=<?php echo($linha['id']); ?>">Deletar</a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
