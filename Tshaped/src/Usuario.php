<?php


include  "CadastroUsuario.php";
include "CadastroUsuarioDAO.php";

$cad = new CadastroUsuario();
$cad->setNome($_POST["nome"]);
$cad->setEmail($_POST["email"]);
$cad->setTelefone($_POST["telefone"]);
$cad->setDataNascimento($_POST["datanascimento"]);
$cad->setSexo($_POST["sexo"]);
$cad->setEndereco($_POST["endereco"]);
$cad->setEstados($_POST["estados"]);
$cad->setCidade($_POST["cidade"]);
$cad->setNomePai($_POST["nomePai"]);
$cad->setNomeMae($_POST["nomeMae"]);
$cad->setCep($_POST["cep"]);
$cad->setAreaAtuacao($_POST["areaAtuacao"]);





$dao = new CadastroUsuarioDAO();
$result = $dao->Insere($cad);

if($result) {
    header("Location: tshaped.php?idUsuario=$result");
    
}

?>