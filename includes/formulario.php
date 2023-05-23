<?php 
   include_once(".\includes\header.php"); 
?>

<main>
   
   <h2 class="mt-3">Cadastrar vaga</h2>

   <form method="post">

      <div class="form-group mb-3">
         <label>Título</label>
         <input type="text" class="form-control" name="titulo">
      </div>

      <div class="form-group mb-3">
         <label>Descrição</label>
         <textarea class="form-control" name="descricao" rows="5"></textarea>
      </div>

      <div class="form-group">
         <label>Status</label>

         <div>
            <div class="form-check form-check-inline">
               <label class="form-control ">
                  <input type="radio" name="ativo" value="s" checked> Ativo
               </label>
            </div>

            <div class="form-check form-check-inline">
               <label class="form-control">
                  <input type="radio" name="ativo" value="n"> Inativo
               </label>
            </div>
         </div>

      </div>

      <div class="form-group">
         <button type="submit" class="btn btn-success mt-4 btn-sucesso">Enviar</button>
         <a href="index.php">
            <button class="btn btn-success mt-4 btn-sucesso">Voltar</button>
         </a>
      </div>
     
   </form>

</main>