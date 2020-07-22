<h2>Alunos</h2>
    <a class="btn-insert" href="?page=inserir_aluno">Inserir Aluno</a>
    <table class="table table-hover table-striped" id="tableAlunos">
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($linha = mysqli_fetch_array($resultsAlunos)) {
                    echo '<tr><td>'.$linha['nome'].'</td><td>'.$linha['data_nascimento'].'</td>';
                    ?>
                    <td>
                        <a href="?page=inserir_aluno&editar=<?php echo($linha['id']); ?>">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="?page=deletar_aluno&id=<?php echo($linha['id']); ?>">
                            <i class="fas fa-user-times"></i>
                        </a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        <tbody>
    </table>