<h2>Alunos</h2>
    <a href="?page=inserir_aluno">Inserir Aluno</a>
    <table class="table">
        <tr>
            <th>Aluno</th>
            <th>Nascimento</th>
            <th>Ações</th>
        </tr>
        <?php
            while($linha = mysqli_fetch_array($resultsAlunos)) {
                echo '<tr><td>'.$linha['nome'].'</td><td>'.$linha['data_nascimento'].'</td>';
                ?>
                   <td>
                       <a href="?page=inserir_aluno&editar=<?php echo($linha['id']); ?>">Editar</a>
                       <a href="?page=deletar_aluno&id=<?php echo($linha['id']); ?>">Deletar</a>
                    </td>
                </tr>
                <?php
            }
        ?>

    </table>