<?php 
require_once 'index.php';
$pessoa = new Pessoa();
$pessoa -> setNome("Lidiane Neves");
$pessoa->andar();
var_dump($pessoa);