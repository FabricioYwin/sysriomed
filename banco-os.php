<?php

 function listaOS($conn){
    $RelacaoOS = array();
    $resultado = sqlsrv_query($conn, "SELECT distinct TOP 15 medx.dbo.os.id,
        medx.dbo.os.dataHora,
        medx.dbo.cliente.nomeFantasia, 
	medx.dbo.setor.nome as NomeSetor,
	medx.dbo.material.nome as NomeMaterial,
	medx.dbo.tipoOs.nome as NomeTipoOS,
	medx.dbo.itemMaterial.nSerie,
	medx.dbo.itemMaterial.rm,
	medx.dbo.os.status	
      
        FROM medx.dbo.os

        inner join medx.dbo.cliente on
        medx.dbo.os.idCliente = medx.dbo.cliente.id 

        inner join medx.dbo.setor on
        medx.dbo.os.idSetor = medx.dbo.setor.id

        inner join medx.dbo.itemMaterial on
        medx.dbo.os.idItemMaterial = medx.dbo.itemMaterial.id

        inner join medx.dbo.material on 
        medx.dbo.itemMaterial.idMaterial = medx.dbo.material.id

        inner join medx.dbo.tipoOs on 
        medx.dbo.os.idTipoOs = medx.dbo.tipoOs.id

        inner join medx.dbo.usuario on 
        medx.dbo.usuario.idSetor = medx.dbo.setor.id
        
        where medx.dbo.usuario.id = medx.dbo.os.idUsuarioSolicitante and
	medx.dbo.usuario.idCliente = medx.dbo.usuario.idCliente");
    
    while ($os = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)){;
        array_push($RelacaoOS, $os);
    }
    return $RelacaoOS;
 }
 
 function alteraOs($conn, $id, $precoMaterial){
     
 }
 

