<?php 
// Usuário do banco oracle.
$oracle_usuario = "system"; 
//Senha do usuário no banco de dados.
$oracle_senha = "06751442564"; 


$oracle_bd = "(DESCRIPTION=
          (ADDRESS_LIST=
            (ADDRESS=(PROTOCOL=TCP) 
              (HOST=localhost)(PORT=1521)
            )
          )
          (CONNECT_DATA=(SERVICE_NAME=XE))
     )"; 

// Aqui, nós validamos se a conexão foi feita com sucesso ou não.
if ($ora_conexao = OCILogon($oracle_usuario,$oracle_senha,$oracle_bd) )   
  echo "Conexão com o banco Oracle foi feita com sucesso"; 
else														   
  echo "Erro na conexão com o Oracle.";					   
?>