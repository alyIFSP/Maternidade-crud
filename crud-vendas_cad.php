<?php
include './component/header.php';
?>

<main class="container-fluid">

    <div class="row">
        <div class="col pb-5 py-5 h-100" style="max-width:15%; min-width: 200px; background-color:#065D3D;">
            <div class="row mt-4 px-3">
                <a class="navbar-brand" href="./index.php"><i class="row"><img src="./img/icon/Logo-crud.png" alt=""></i></a>
                <hr class="mt-3" style="color: #ffffff">
            </div>

            <div class="row mt-3 px-3">
                <p class="texto-titulo"><a href="crud-vendas.php" style="color: #ffffff"><i><img src="./img/icon/crud-inicio.png" alt="" srcset="">Início</i></a></p>
                <hr style="color: #ffffff">
            </div>

            <div class="row mt-3 px-3">
                <p style="text-decoration: none;"><a href="#" style="color: #ffffff"><i><img src="./img/icon/Crud-cadastro.png" alt="" srcset=""></i>Cadastro</a></p>
                <hr style="color: #ffffff">
            </div>

            <!-- <div class="row mt-3 px-3">
                <p style="text-decoration: none;"><a href="crud-vendas_edit.php" style="color: #ffffff"><i><img src="./img/icon/Crud-cadastro.png" alt="" srcset=""></i>Editar</a></p>
                <hr style="color: #ffffff">
            </div> -->

            <div class="row mt-3 px-3">
                <p><a href="crud-vendas_del.php" style="color: #ffffff" ><i><img src="./img/icon/Crud-deletar.png" alt="" srcset="">Deletar</i></a></p>
                <hr style="color: #ffffff">
            </div>

        </div>  

        <div class="col">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm ">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="me-auto py-3">
                            <form action="pesquisa.php" method="post" class="bg-secondary" style="background-color: #E9E9E9; border: none;" >
                                <input type="text" placeholder="Encontrar serviços...">
                            </form>
                        </div>
                        
                        <!-- <div class="vr me-2 py-2"></div>
                        <div class="me-1 mt-3">
                            <p>Dr.Camila Ribeiro <i><img src="" alt="" srcset=""></i></p>
                        </div> -->
                        
                    </div>
                </div>  
            </nav>

            <!-- conteúdo -->

            <section class="container-fluid mt-3">
                <div class="text-container">
                    <h3 class="texto-titulo">Novo Cadastro</h3>
                    <p class="texto" >Preencha os campos para cadastrar novo serviço:</p>
                </div>

                <form action="./component/crud-cadastro.php" method="post">

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example3">Nome do serviço:</label>
                        <input type="text" name="nome" id="form6Example3 inputChanger" class="form-control" style="background-color: #D9D9D9;" />
                        
                    </div>
                    
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Categoria:</label>
                                <select class="form-select" aria-label="Default select example" name="categoria"  style="background-color: #D9D9D9;">
                                    <option selected>Selecione</option>
                                    <option >Exames</option>
                                    <option >Atendimento</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Valor:</label>
                                <input type="number" name="valor" id="form6Example2 inputChanger" class="form-control" style="background-color: #D9D9D9;" />
                                
                            </div>
                        </div>
                    </div>
    
                    

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-success btn-block mb-4">Salvar</button>
                </form>
            </section>

            
            
    </div>

    
</main>












<?php
include './component/footer.php';