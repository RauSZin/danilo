<?php

function pegarTodosProdutos() {
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM produto WHERE id = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function adicionarProduto($marca, $modelo, $preco, $quantidade, $cor, $diretorioImg) {
    $sql = "INSERT INTO produto (marca, modelo, preco, quantidade, imagem) 
			VALUES ('$marca', '$modelo', '$preco', '$quantidade', '$diretorioImg')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function editarProduto($id, $marca, $modelo, $preco, $quantidade) {
    $sql = "UPDATE produto SET marca = '$marca', modelo = '$modelo', preco = '$preco', quantidade = '$quantidade' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'produto alterado com sucesso!';
}

function deletarProduto($id) {
    $sql = "DELETE FROM produto WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}
function adicionarImagem($codigo, $arquivo, $data){

    $sql = "INSERT INTO imagem(codigo, arquivo, data) VALUES($codigo, '$novo_nome', $data)";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao adicionar Imagem !!'. mysqli_error($cnx)); }
    return 'Imagem adicionada com sucesso';

}
