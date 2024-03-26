<?php
include('../../includes/conexao.php');

$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$calorias = $_POST['calorias'];
$destaque = $_POST['destaque'];

//$dir = "../img/cardapio";

//$imagem['name'] = $codigo.".jpg";

//if (move_uploaded_file($imagem["tmp_name"], "$dir".$imagem["name"])){

   // echo "Arquivos enviados com sucesso!";
//}
//else{
   // echo "Erro, o arquivo n&atilde;o pode ser enviado.";
//}

$sql = "INSERT INTO tb_prato (nome, codigo, preco, categoria, descricao, calorias, destaque) VALUES ('$nome', '$codigo', '$preco', '$categoria', '$descricao', '$calorias', '$destaque')";
/*  */
$conexao->query($sql);

$conexao->close();

//header('location: listar_pratos.php')

?>