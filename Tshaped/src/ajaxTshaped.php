<?php

include_once 'CadastroTShaped.php';
include_once 'TShapedDAO.php';

$css_size = $_REQUEST['css_size'];
$css_left = $_REQUEST['css_left'];
$css_top = $_REQUEST['css_top'];
$css_fonte = $_REQUEST['css_fonte'];
$tipo = $_REQUEST['tipo'];
$valor = $_REQUEST['valorp'];
//$id_usuario = $_SESSION['cod_usuario'];
$id_usuario = $_REQUEST['idUsuario'];

$tshaped = new CadastroTShaped();
$tshaped->css_size = $css_size;
$tshaped->css_left = $css_left;
$tshaped->css_top = $css_top;
$tshaped->css_fonte = $css_fonte;
$tshaped->tp_conhecimento = $tipo;
$tshaped->texto = $valor;
$tshaped->id_usuario = $id_usuario;

$tshapedDAO = new TShapedDAO();
$tshapedDAO->Insere($tshaped);


