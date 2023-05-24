<main>
   
   <h2 class="mt-3 title">Excluir Vaga</h2>

   <form method="post">

      <div class="form-group mt-4 mb-3">
         <p>Confirma a exclusão da Vaga <strong><?= $obVaga->titulo ?></strong>?</p>
      </div>

      <div class="form-group">
         <a href="index.php"><button class="btn btn-success mt-4 btn-sucesso nosend">Cancelar</button></a>
         <button type="submit" name="excluir" class="btn btn-danger mt-4 btn-sucesso">Excluir</button>
      </div>
     
   </form>

</main>