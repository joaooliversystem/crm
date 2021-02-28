<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Leilões do Brabo">
    <link rel="shortcut icon" href="<?php echo base_url('assets/icon.png')?>"/>

    <title>Painel de Administração</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/admin/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/')?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>

        .modal-open{
            overflow: scroll!important;
        }

        .btn-outline-grey{
            border-left: 1px solid #e2e1e1 !important;
            border-right: 1px solid #e2e1e1!important;
        }
        .input-painel{
            border-radius: 0!important;
            border: 1px solid #929394;
            float: left;
        }

        ::-webkit-input-placeholder { /* Edge */
            color: #929394!important;
        }

       :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #929394 !important;
        }

         ::placeholder {
            color: #929394 !important;
        }
         label{
             float: left;
         }
        #wrapper #content-wrapper #content{
            background: #dedbdb!important;
        }
    </style>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"href="<?php echo base_url('painel');?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Painel <sup><?php echo date('Y')?></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('painel');?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Resumo Painel</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Administração
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="javascript:view('administradores');">
                <i class="fas fa-fw fa-users"></i>
                <span>Administradores</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:view('gerentes');">
                <i class="fas fa-user-friends"></i>
                <span>Gerentes</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Pessoas
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="javascript:view('clientes');">
                <i class="fas fa-fw fa-user"></i>
                <span>Clientes</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="javascript:view('freelancers');">
                <i class="fas fa-users-cog"></i>
                <span>Freelancers</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="javascript:view('funcionarios');">
                <i class="fas fa-user-cog"></i>
                <span>Funcionarios</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="javascript:view('empresas_parceiras');">
                <i class="fas fa-user-cog"></i>
                <span>Empresas Parceiras</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
                Geral
        </div>

        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#colapseDocs"
               aria-expanded="true" aria-controls="colapseDocs">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Projetos</span>
            </a>
            <div id="colapseDocs" class="collapse" aria-labelledby="headingDocs"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="javascript:view('projetos_andamento');"><i class="fas fa-fw fa-clock"></i> Em Andamento</a>
                    <a class="collapse-item" href="javascript:view('projetos_cotacao');"><i class="fas fa-cog"></i> Em Cotação</a>
                    <a class="collapse-item" href="javascript:view('projetos_finalizados');"><i class="fas fa-check"></i> Finalizados</a>
                    <a class="collapse-item" href="javascript:view('projetos_cancelados');"><i class="fas fa-times"></i> Cancelados</a>

                </div>
            </div>

        </li>




        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">

            Configurações
        </div>
        <li class="nav-item">
            <a class="nav-link" href="javascript:view('chat');">
                <i class="fas fa-fw fa-asterisk"></i>
                <span>  Acessar Chat</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="javascript:editar('Emails','emails',1);">
                <i class="fas fa-fw fa-envelope"></i>
                <span> Emails</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="javascript:editar('Informações','infos',1);">
                <i class="fas fa-fw fa-info-circle"></i>
                <span> Informações</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>-->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS)
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>-->

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                               Notificações
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>

                            <a class="dropdown-item text-center small text-gray-500" href="#">Ver Todas</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                               Mensagens
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="<?php echo base_url('assets/admin/')?>img/undraw_profile_1.svg"
                                         alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>

                            <a class="dropdown-item text-center small text-gray-500" href="#">Ler Mensagens</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            $this->db->from('administrador');
                            $this->db->where('id',$_SESSION['acesso_id']);
                            $get = $this->db->get();
                            $admin = $get->result_array()[0];
                            ?>
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="text-transform: uppercase;"><?php echo $admin['usuario'];?></span>
                            <img class="img-profile rounded-circle"
                                 src="<?php echo base_url('assets/admin/')?>img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">

                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configuracões
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logs do Sistema
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sair
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->