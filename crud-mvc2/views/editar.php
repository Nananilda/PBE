<h2>Editar Usuário</h2>
<form method="POST" enctype="multipart/form-data">
    Nome: <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $usuario['email']; ?>"><br><br>
    
    <?php if ($usuario['imagem']) { ?>
    <img src="<?php echo $usuario['imagem']; ?>" width="100"><br>
    <?php } ?>

    Nova imagem:
    <input type="file" name="imagem"><br><br>
    <input type="hidden" name="imagem_atual" value="<?php echo $usuario['imagem']; ?>"><br><br>
    <button type="submit">Atualizar</button>
</form>