<?php
include "conexao_db.php";
header("Refresh:15");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Monitor CF</title>



</head>

<body>

      <h1>Quadro de Monitoramento</h1>
      <h5 >Temperatura <span>| º</span></h5>
<h6>
  <?php 
                      
                      $query = mysqli_query($conn, "SELECT * FROM monitor_ht.registros order by leituraId desc limit 1");
                      
                      while($linha = mysqli_fetch_array($query)){
                          $temperatura = $linha['temperatura'];
                          echo"$temperatura";
                          
                      }?></h6>
                      <span >º</span> <span >graus</span>

               <h5 >humidade <span>| %</span></h                    
            <h6><?php 
                      
                      $query = mysqli_query($conn, "SELECT * FROM monitor_ht.registros order by leituraId desc limit 1");
                      $registro = mysqli_num_rows($query);
            
                      while($linha = mysqli_fetch_array($query)){
                          $leituraId = $linha['leituraId'];
                          $humidade = $linha['humidade'];
                          echo"$humidade";
                          
                      }?>
                      </h6>
                      <span >%</span> <span >relativa</span>

                  <h5 >Porta Câmara<span>|Aberta/Fechada</span></h5>

                  
                        <h6>
                            <?php
                            
                            $query = mysqli_query($conn, "SELECT * FROM monitor_ht.registros order by leituraId desc limit 1");
                            
                            while($linha = mysqli_fetch_array($query)){
                                $status_porta = $linha['status_porta'];
                                
                                if($status_porta == 0.00){
                                    echo"<span style='color:blue;'>Fechada</span>";
                                    
                                } else {
                                    echo"<span style='color:red;'>Aberta</span>";
                                    
                                }}?>
                        </h6>
                        
       
</body>

</html>