<main>
   
   <h2 class="mt-3 title"><?= TITLE ?></h2>

   <form method="post">

      <div class="form-group mt-4 mb-3">
         <label>Título</label>
         <input type="text" class="form-control" name="titulo" value="<?=$obVaga->titulo?>">
      </div>

      <div class="form-group mb-3">
         <label>Descrição</label>
         <textarea class="form-control" name="descricao" rows="5"><?=$obVaga->descricao?></textarea>
      </div>

      <div class="form-group">
         <label>Status</label>

         <div class="p-2">
            <div class="form-check form-check-inline check">
               <label class="form-control ">
                  <input type="radio" name="ativo" value="s" checked> Ativo
               </label>
            </div>

            <div class="form-check form-check-inline check">
               <label class="form-control">
                  <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'N' ? 'checked' : ''?>> Inativo
               </label>
            </div>
         </div>

      </div>

      <div class="form-group">
         <button type="submit" class="btn btn-success mt-4 btn-sucesso">Gravar</button>
         
         <a href="index.php">
            <button class="btn btn-primary mt-4 btn-sucesso nosend">Voltar</button>
         </a>

      </div>
     
   </form>

</main>