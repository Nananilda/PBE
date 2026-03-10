<h2>Editar Produto</h2>
<form method="POST" enctype="multipart/form-data">
    Nome: <input type="text" name="nome" value="<?php echo $produto['nome']; ?>"><br><br>
    Descrição: <input type="text" name="descricao" value="<?php echo $produto['descricao']; ?>"><br><br>
    Fornecedor: <input type="text" name="fornecedor" value="<?php echo $produto['fornecedor']; ?>"><br><br>
    Quantidade: <input type="number" name="quantidade" value="<?php echo $produto['email']; ?>"><br><br>
    Fabricante: <input type="text" name="fabricante" value="<?php echo $produto['email']; ?>"><br><br>
    Preço: <input type="float" name="preco" value="<?php echo $produto['email']; ?>"><br><br>
    Margem de lucro: <input type="float" name="margem" value="<?php echo $produto['email']; ?>"><br><br>
    Data do cadastro: <input type="date" name="data_cadastro" value="<?php echo $produto['email']; ?>"><br><br>
    Status: <input type="text" name="status_pro" value="<?php echo $produto['email']; ?>"><br><br>
    Imagem:
    <input type="file" name="imagem2"><br><br>
    <input type="hidden" name="imagem2" value="<?php echo $usuario['imagem2']; ?>"><br><br>
    <button type="submit">Atualizar</button>
</form>
