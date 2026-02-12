<h2>Usuários</h2>
<a href="index.php?acao=criar">Novo Usuário</a>
<ul>
    <?php foreach($usuarios as $u): ?>
    <?= $u['id'] ?></td>
    <?= $u['nome'] ?></td>
    <?= $u['email'] ?></td>
    <a href="index.php?acao=editar&id=<?= $u['id'] ?>">Editar</a> |
    <a href="index.php?acao=excluir&id=<?= $u['id'] ?>">Excluir</a>
<?php endforeach; ?>
</ul>
