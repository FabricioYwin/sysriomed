<?php include 'cabecalho.php';
 include 'conecta.php';
 include 'banco-material.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado', $_POST)){
    $usado = "true";
} else {
    $usado = "false";
}

if(alteraMaterial($conn, $id, $nome, $preco, $categoria_id)) { ?>
    <p class="text-success">O Material <?=$nome; ?>, <?=$preco ?> foi alterado.</p>
<?php } else { 
    $msg = sqlsrv_errors($conn);
    ?>
    <p class="text-danger">O Material <?=$nome; ?> não foi alterado: <?=$msg; ?></p>
<?php 
}

include 'rodape.php'; ?>


