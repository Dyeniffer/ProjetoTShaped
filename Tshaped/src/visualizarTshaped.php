<?php

include_once 'CadastroTShaped.php';
include_once 'TShapedDAO.php';


$tshaped = new TShapedDAO();
$result = $tshaped->buscaTshapedHorizontal(1);

?>

