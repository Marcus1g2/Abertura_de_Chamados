<?php
require_once("valida_acesso.php");
?>

<?php 

$arquivo=fopen("arquivo.txt", "r");

$vetor=array();
  
   //enquanto a condição no for satisfeita fica no loop 
   // feof e função de ponteiro enquanto tem texto ele roda true quando não tem false
  // por isso negamos ele ! pra vir false e quando acabar vir true e sair
  while (!feof($arquivo)){ 
  $vetor[]=fgets($arquivo); 

  }

fclose($arquivo);



?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
              <?php 
              foreach($vetor as $key) {

                $chamados_separados=explode(" ", $key);

                // ele vai contar arrays tem se for menor na proxima interação ele pula de linha
                 
              if( count($chamados_separados) < 3 ){ 
                continue;
                 } 
               ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $chamados_separados [0] ?> </h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamados_separados [1] ?></h6>
                  <p class="card-text"><?php echo $chamados_separados [2] ?></p>

                </div>
              </div>
              <?php
              
              } 
            ?>
              <div class="row mt-5">
                <div class="col-6">
                  <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>