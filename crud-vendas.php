<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
include './component/header.php';
?>

<main class="container-fluid">

    <div class="row">
        <div class="col pb-5" style="max-width:15%; min-width: 200px; background-color:#065D3D;">
            <div class="row mt-4 px-3">
                <a class="navbar-brand" href="./index.php"><i class="row"><img src="./img/icon/Logo-crud.png" alt=""></i></a>
                <hr class="mt-3" style="color: #ffffff">
            </div>

            <div class="row mt-3 px-3">
                <p class="texto-titulo"><a href="#" style="color: #ffffff"><i><img src="./img/icon/crud-inicio.png" alt="" srcset="">Início</i></a></p>
                <hr style="color: #ffffff">
            </div>

            <div class="row mt-3 px-3">
                <p style="text-decoration: none;"><a href="crud-vendas_cad.php" style="color: #ffffff"><i><img src="./img/icon/Crud-cadastro.png" alt="" srcset=""></i>Cadastro</a></p>
                <hr style="color: #ffffff">
            </div>

<!--             <div class="row mt-3 px-3">
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
                        <div class="me-auto">
                            <form action="pesquisa.php" method="post" class="bg-secondary" style="background-color: #E9E9E9; border: none;" >
                                <input type="text" placeholder="Encontrar serviços...">
                            </form>
                        </div>
                        <div class="me-1 mt-3">
                            <p class="text-danger font-weight-bold"><a href="./component/encerra-sessao.php" class=" text-danger font-weight-bold">Encerrar sessão</a></p>
                        </div>
                        <div class="vr me-2 py-2"></div>
                        <div class="me-1 mt-3">
                            <p>Dr.Camila Ribeiro <i><img src="" alt="" srcset=""></i></p>
                        </div>
                        
                    </div>
                </div>  
            </nav>

            <!-- conteúdo -->
            <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>NOME</th>
                <th>CATEGORIA</th>
                <th>DATA CADASTRO</th>
                <th>VALOR</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php include './component/crud.php'  ?>
            <!-- <tr>
                <td>Teste do pezinho</td>
                <td>Exames</td>
                <td>15/02/2015</td>
                <td>$327,900</td>
                <td><a href="editar.php" style="color: #000000">Editar</a></td>
                <td><i><img src="./img/icon/Crud-lixeira.png" alt="" srcset=""></i></td>
            </tr>
            <tr>
                <td>Testes SCID e Agama</td>
                <td>Exames</td>
                <td>15/02/2015</td>
                <td>$327,900</td>
                <td><a href="editar.php" style="color: #000000">Editar</a></td>
                <td><i><img src="./img/icon/Crud-lixeira.png" alt="" srcset=""></i></td>
            </tr>
            <tr>
                <td>Teste do Pezinho</td>
                <td>Exames</td>
                <td>15/02/2015</td>
                <td>$327,900</td>
                <td><a href="editar.php" style="color: #000000">Editar</a></td>
                <td><i><img src="./img/icon/Crud-lixeira.png" alt="" srcset=""></i></td>
            </tr>
            <tr>
                <td>Teste do Olhinho Ampliado</td>
                <td>Exames</td>
                <td>15/02/2015</td>
                <td>$327,900</td>
                <td><a href="editar.php" style="color: #000000">Editar</a></td>
                <td><i><img src="./img/icon/Crud-lixeira.png" alt="" srcset=""></i></td>
            </tr>
            <tr>
                <td>As vacinas para recém-nascidos</td>
                <td>Exames</td>
                <td>15/02/2015</td>
                <td>$327,900</td>
                <td><a href="editar.php" style="color: #000000">Editar</a></td>
                <td><i><img src="./img/icon/Crud-lixeira.png" alt="" srcset=""></i></td>
            </tr>
            <tr>
                <td>Internação</td>
                <td>Atendimento</td>
                <td>15/02/2015</td>
                <td>$327,900</td>
                <td><a href="editar.php" style="color: #000000">Editar</a></td>
                <td><i><img src="./img/icon/Crud-lixeira.png" alt="" srcset=""></i></td>
            </tr>
            <tr>
                <td>Parto agendado</td>
                <td>Atendimento</td>
                <td>15/02/2015</td>
                <td>$327,900</td>
                <td><a href="editar.php" style="color: #000000">Editar</a></td>
                <td><i><img src="./img/icon/Crud-lixeira.png" alt="" srcset=""></i></td>
            </tr>
            <tr>
                <td>Parto natural</td>
                <td>Atendimento</td>
                <td>15/02/2015</td>
                <td>$327,900</td>
                <td><a href="editar.php" style="color: #000000">Editar</a></td>
                <td><i><img src="./img/icon/Crud-lixeira.png" alt="" srcset=""></i></td>
            </tr> -->
        </tbody>
        <tfoot>
            <tr>
                <th>NOME</th>
                <th>CATEGORIA</th>
                <th>DATA CADASTRO</th>
                <th>VALOR</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    </div>

    
</main>












<?php
include './component/footer.php';