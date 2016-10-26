<?php
include 'conecta.php';

 function listaMateriais($conn){
    $materiais = array();
    $resultado = sqlsrv_query($conn, "select top 30 m.id as IdMat, I.id as IdItem, M.nome, M.tipo, I.nSerie ,I.valorUnitario from medx.dbo.material as M join medx.dbo.itemMaterial as I on M.id=I.idMaterial");
        while ($material = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)){
            array_push($materiais, $material);
        }    
        return $materiais; 
 }
 
// function insereMaterial($conn, $nome, $preco, $categoria_id){
//    $query = "INSERT INTO rm_Material (nome, preco, categoria_id) values ('{$nome}' , {$preco}, {$categoria_id})";    
//    return sqlsrv_query($conn, $query);
//}

function alteraMaterial($conn, $IdItem, $valorUnitario){
    $query = "update medx.dbo.itemMaterial set valorUnitario = {$valorUnitario} where id = '{$IdItem}'";
    return sqlsrv_query($conn, $query);    
}

function buscaMaterial($conn, $IdItem){
    $query = "select m.id as IdMat, I.id as IdItem, M.nome, M.tipo, I.nSerie ,I.valorUnitario from medx.dbo.material as M INNER JOIN medx.dbo.itemMaterial as I on M.id=I.idMaterial where I.Id = {$IdItem}";
    $resultado = sqlsrv_query($conn, $query) or die(print_r(sqlsrv_errors()));
    return sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC);
}
//
//function removeMaterial($conn, $id){
//    $query = "delete from rm_Material where id = {$id}";
//    return sqlsrv_query($conn, $query);
//}