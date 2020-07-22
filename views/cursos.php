    <h2>Cursos</h2>
    <a class="btn-insert" href="?page=inserir_curso">Inserir Curso</a>
    <table class="table table-hover table-striped" id="tableCursos">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Carga Horária</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($linha = mysqli_fetch_array($resultsCursos)) {
                    echo '<tr><td>'.$linha['nome'].'</td><td>'.$linha['carga_horaria'].'</td>';
                    ?>
                    <td>
                        <a href="?page=inserir_curso&editar=<?php echo($linha['id']); ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="?page=deletar_curso&id=<?php echo($linha['id']); ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
