<?php
    include "conexao.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conn, $sql);
    $usuario = mysqli_fetch_assoc($resultado);
?>
<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
    Nome: <input type="text" name="nome" value="<?= $usuario['nome'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $usuario['email'] ?>"><br>
    <button>Atualizar</button>
</form>