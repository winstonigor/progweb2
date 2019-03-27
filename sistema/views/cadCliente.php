<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>aula bootStrap</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"

        <!--MENU- FAZENDO UM INCLUDE DO MENU-->
            <?php
        include_once "menu.php"
        ?>

        </div>

            <div class="col-md-10">
                <!-- CONTEUDO-->
                <div class="card">
                    <div class="card-headerd">
                        <h3 class="text-center">Cadastro de cliente</h3>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" placeholder="Nome" name="" me="nome">
                                    
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">CPF</label>
                                    <input type="text" class="form-control" placeholder="999.999.999-99" name="cpf">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Endereço</label>
                                    <input type="text"class="form-control" placeholder="Rua fulano, 00 - Setor - Cidade - UF" name="endereco">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="exemplo@emial.com" name="email">

                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Senha</label>
                                    <input type="password" class="form-control" placeholder="senha" name="senha">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control"placeholder="(00) 0-0000-0000" name="telefone">
                                </div>
                                <button class="btn btn-primary" type="submit" name="salvar">Salvar</button>
                            </div><!--form-row-->
                        </form>
                    </div><!-- Card-Body -->
                </div> <!--Card-->

            </div>
        </div>
    </div>
</div>


<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>