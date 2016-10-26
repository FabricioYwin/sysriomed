<?php 
    include 'cabecalho.php';
    include 'conecta.php';
    include 'banco-usuario.php'; 
    include 'banco-os.php';
    include 'logica-usuario.php';
 ?>

<?php if(isset($_SESSION["success"])) { ?>
    <p class="alert-success"><?= $_SESSION["success"]?></p>
<?php
    unset($_SESSION["success"]);
} ?>

<table class="table table-striped table-bordered">
    <?php
    $RelacaoOS = listaOS($conn);
    foreach ($RelacaoOS as $os) : ?>
    <tr>
        <th>ID</th>
        <th>DATA</th>
        <th>CLIENTE</th>
        <th>SETOR</th>       
        <th>MATERIAL</th>
        <th>TIPO</th>
        <th>N. SÉRIE</th>
        <th>RM</th>
        <th>STATUS</th>
        <th class="text-center">AÇÕES</th>
    </tr>
    <?php
 
// $RelacaoOS = listaOS($conn);
// foreach ($RelacaoOS as $os): ?>    
    <tr>        
        <td><?= $os['id']; ?></td>
        <td>
            <?php $data = $os['dataHora']; 
                echo $data->format('Y-m-d H:i:s');
            ?>
        </td>       
        <td><?= $os['nomeFantasia']; ?></td>
        <td><?= utf8_encode( $os['NomeSetor']); ?></td>       
        <td><?= utf8_encode($os['NomeMaterial']); ?></td>
        <td><?= $os['NomeTipoOS']; ?></td>
        <td><?= $os['nSerie']; ?></td>
        <td><?= $os['rm']; ?></td>
        <td><?= $os['status']; ?></td>
        <td >
            <a href="os-altera-formulario.php?id=<?=$os['id']?>" class="btn btn-warning"><span class="glyphicon glyphicon-copy"></span> Alterar OS</a>
        </td>
    </tr>
 <?php endforeach; ?>
</table>


<?php include 'rodape.php'; ?>




