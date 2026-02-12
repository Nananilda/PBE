<h2>Editar usuário</h2>
<!-- action indo por get -->
<form method="post" action="index.php?acao=atualizar">
    <!-- está vindo de models as informações -->
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
    <h2>Nome:</h2> 
    <input name="nome" value="<?= $usuario['nome'] ?>"><br><br>
    <h2>Email:</h2> 
    <input name="email" value="<?= $usuario['email'] ?>"><br><br>
    <button>Atualizar</burron>
</form>