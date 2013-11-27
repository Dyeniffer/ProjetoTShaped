<?php

include "CadastroVagas.php";
include "CadastroVagasDAO.php";

$cad = new CadastroVagas();


$cad->setGrauEstudo($_POST["grauEstudo"]);
$cad->setRequisitos($_POST["requisitos"]);
$cad->setAreaVaga($_POST["areaVaga"]);
$cad->setGrauEstudo($_POST["descricao"]);
$cad->setSalario($_POST["salario"]);
$cad->setBeneficio($_POST["beneficios"]);

// ..

$dao = new CadastroVagasDAO();
$dao->Insere($cad);

echo "
<script LANGUAGE=\"Javascript\">
alert(\"Cadastro Realizado\");
</SCRIPT>";

include ("index.html");


?>