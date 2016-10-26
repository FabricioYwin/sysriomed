<?php include "cabecalho.php";
 include "conexao.php";
 include "banco-os.php";
 include 'logica-usuario.php';
 

/* @var $_GET type */
$id =  $_GET['id'];
$os = listaOS($conn, $id);
 
//echo $os['id'];
//echo $os['nomeFantasia'];

?>
<h1>Aterando OS</h1>
<form action="altera-os.php" method="post">
    <table class="table">
        <tr>
            <td>Data</td>
            <td><input class="form-control" type="text" name="data"></td>
        </tr>    
        <tr>
            <td>CLIENTE</td>
            <td>
                <input class="form-control" type="text" name="cliente" 
                       value="<?= $os['nomeFantasia']; ?>" >
            </td>
        </tr>    
        <tr>
            <td>SETOR</td>
            <td><input class="form-control" type="text" name="data"></td>
        </tr>    
        <tr>
            <td>MATERIAL</td>
            <td><input class="form-control" type="text" name="data"></td>
        </tr>  
        <tr>
            <td>TIPO</td>
            <td><input class="form-control" type="text" name="data"></td>
        </tr>  
        <tr>
            <td>N. SÉRIE</td>
            <td><input class="form-control" type="text" name="data"></td>
        </tr>  
        <tr>
            <td>RM</td>
            <td><input class="form-control" type="text" name="data"></td>
        </tr>  
        <tr>
            <td>STATUS</td>
            <td><input class="form-control" type="text" name="data"></td>
        </tr>  
        
        <tr>
            <td><button class="btn btn-danger" type="submit">Alterar</button></td>
        </tr>    
    </table>
</form>




