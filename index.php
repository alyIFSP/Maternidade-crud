<?php
include './component/header.php';
?>

<main class="container-fluid">

 



    <!-- conteúdo -->
    <div class="form  d-flex justify-content-center flex-column">
      <form action="./biblioteca/processa-login.php" method="post" class="mx-5 p-5">
        <!-- Text input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example3">Email</label>
          <input type="text" name="email" id="form6Example3 inputChanger" class="form-control" style="background-color: #D9D9D9;" />  
        </div>
        
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example2">Senha</label>
            <input type="password" name="senha" id="form6Example2 inputChanger" class="form-control" style="background-color: #D9D9D9;" />      
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success btn-block my-4">login</button>
        <?php if (isset($_GET["erro"])){ ?>
          <label for="senha">Usuário ou senha inválidos</label>
        <?php }?>
      </form>
      <form action="cadastro-usuario.php" method="post" class="mx-auto">
        <input type="submit" value="Cadastre-se" class="btn btn-success btn-block mb-4">
      </form>
    



        

    
</main>












<?php
include './component/footer.php';