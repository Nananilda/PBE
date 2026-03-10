<h2>Lista de Produto</h2><br><br>
<a href="index.php?acao=criar_produto">Novo produto</a><br><br>
<table border="01">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Fornecedor</th>
        <th>Quantidade</th>
        <th>Fabricante</th>
        <th>Preço</th>
        <th>Margem de lucro</th>
        <th>Data do cadastro</th>
        <th>Status</th>
        <th>Imagem</th>
    </tr>
<?php
    foreach ($produtos as $p) {
?>
<tr>
    <td><?php echo $p['id']; ?></td>
    <td><?php echo $p['nome_produto']; ?></td>
    <td><?php echo $p['descricao']; ?></td>
    <td><?php echo $p['fornecedor']; ?></td>
    <td><?php echo $p['quantidade']; ?></td>
    <td><?php echo $p['fabricante']; ?></td>
    <td><?php echo $p['preco']; ?></td>
    <td><?php echo $p['margem']; ?></td>
    <td><?php echo $p['data_cadastro']; ?></td>
    <td><?php echo $p['status_pro']; ?></td>
    <td>
        <?php if ($p['imagem2']){ ?>
            <img src="<?php echo $p['imagem2']; ?>" width="80">
        <?php } ?>
    </td>
    <td>
        <a href="index.php?acao=editar_produto&id=<?php echo $p['id']; ?>">Editar</a>
        <a href="index.php?acao=excluir_produto&id=<?php echo $p['id']; ?>">Excluir</a>
    </td>
</tr>

<?php } ?>
</table>