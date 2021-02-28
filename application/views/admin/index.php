<div class="container-fluid" id="contentPage">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="float: right;"><i
                    class="fas fa-envelope fa-sm text-white-50"></i> Enviar Mensagem</a>

        <label  class="col-2">
            Filtrar por:
            <select class="form-control ">
                <option>Hoje: <?php echo date('d/m/Y');?></option>
                <option>Essa Semana </option>
                <option selected>Geral</option>
            </select></label>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Projetos em Cotação</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-table fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Projetos em Andamento</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-gavel fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Projetos Finalizados
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Projetos Cancelados</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Content Row -->
    <div class="row">



        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Converta um cadastro em uma venda</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                             src="<?php echo base_url('assets/admin/')?>img/undraw_posting_photo.svg" alt="">
                    </div>
                    <p>Lembre-se, a melhor forma de converter um cliente em uma venda e o a comunicação direta com seu cliente. Ajude o cliente a se <a
                                target="_blank" rel="nofollow" href="<?php echo base_url('cadastro');?>">Cadastrar</a> se necessario
                        converse com ele, esteja em contato com seu cliente, demonstre ser uma empresa pessoal,
                        assim o seu cliente estara sempre seguro que você tera a melhor solução para ele.</p>

                </div>
            </div>



        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ultimas Ações</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>E-mail</th>
                        <th>Natureza</th>
                        <th>Situação</th>
                        </thead>
                        <tbody>
                        <td>Pedro</td>
                        <td>Cliente</td>
                        <td>pedro@gmail.com</td>
                        <td class="text-danger">Projeto em Atraso...</td>
                        <td><i class="fa fa-clock"></i> Aguardando Resposta</td>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>

</div>
