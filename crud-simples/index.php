<?php
    include "conexao.php";
    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conn, $sql);
    //querry - vasculha o arquivo
?>

<h2>Lista de Usuários</h2>
<a href="criar.php">Novo Usuário</a>
<table border=1>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
<?php while ($u = mysqli_fetch_assoc($resultado)) { ?> 
<!-- mysqli_fetch_assoc = gera um array do conteudo -->
<!-- while usado como um if, um loop -->
<tr>
    <td><?= $u['nome'] ?></td>
    <td><?= $u['email'] ?></td>
    <td>
        <a href="editar.php?id=<?= $u['id'] ?>">Editar</a>
<!-- id como get (?id) -->
        <a href="excluir.php?id=<?= $u['id'] ?>">Excluir</a>
    </td>
</tr>
<?php } ?>
</table>
