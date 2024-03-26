<?php
include('../includes/conexao.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data = $_POST['data'];
$npessoas = $_POST['npessoas'];
$mensagem = $_POST['mensagem'];


//$dir = "../img/cardapio";

//$imagem['name'] = $codigo.".jpg";

//if (move_uploaded_file($imagem["tmp_name"], "$dir".$imagem["name"])){

   // echo "Arquivos enviados com sucesso!";
//}
//else{
   // echo "Erro, o arquivo n&atilde;o pode ser enviado.";
//}

$sql = "INSERT INTO tb_reserva (nome, telefone, email, data_reserva, npessoas, mensagem) VALUES ('$nome', '$telefone', '$email', '$data', '$npessoas', '$mensagem')";

$conexao->query($sql);

$conexao->close();

//header('location: listar_pratos.php')

?>