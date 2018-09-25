<?php include 'cabecalho.php';
include("conecta.php");
include("banco-produto.php");
include("logica-usuario.php");

$id = $_POST['id'];

removeProduto($conexao, $id);
$_SESSION["success"] = "Produto removido com sucessso";
header("Location: produto-lista.php");
die();
?>

