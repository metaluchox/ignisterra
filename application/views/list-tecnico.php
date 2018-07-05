<?php include("template/header.php"); ?>

<body class="voyager">

    <div id="voyager-loader">
        <?php echo base_url('assets/img/logo-icon.png'); ?>
        <img src="<?php echo base_url('assets/img/logo-icon.png'); ?>" alt="Voyager Loader">
    </div>


    <div class="app-container expanded">
        <div class="fadetoblack visible-xs"></div>
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="hamburger btn-link is-active">
          <span class="hamburger-inner"></span>
          </button>
                        <ol class="breadcrumb hidden-xs">
                            <li class="">
                                <i class="voyager-home"></i>
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">Panel</a>
                            </li>

                            <li class="active">
                                Listado
                            </li>
                        </ol>
                    </div>
                    <?php include('template/nav-top.php'); ?>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="logo-icon-container">
                                    <img src="<?php echo base_url('assets/img/logo-icon-light.png'); ?>" alt="Logo Icon">
                                </div>
                                <div class="title">Bienvenido</div>
                            </a>
                        </div>
                        <!-- .navbar-header -->

                        <div class="panel widget center bgimage" style="background-image:url(assets/img/bg.jpg); background-size: cover; background-position: 0px;">
                            <div class="dimmer"></div>
                            <div class="panel-content">
                                <img src="<?php echo base_url('assets/img/default.png'); ?>" class="avatar" alt="Admin Web avatar">
                                <h4>
                                    <?php echo $Nombre ?> </h4>


                                <a href="#" class="btn btn-primary">Perfil</a>
                                <div style="clear:both"></div>
                            </div>
                        </div>

                    </div>
                    <?php
                    switch ($Tipo) {
                        case 1:
                            include('template/nav-user.php');
                          break;
                        case 2:
                            include('template/nav-sup.php');
                            break;
                        case 3:
                            include('template/nav-enc.php');
                            break;
                        case 4:
                            include('template/nav-adm.php');
                          break;

                    }
                    ?>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <div class="container-fluid">
                        <h1 class="page-title">
                            <i class="voyager-settings"></i> Listado de Mantenciones por Recepcionar
                        </h1>

                    </div>
                    <div id="voyager-notifications"></div>
                    <div class="page-content browse container-fluid">
                        <div class="alerts">
                            <?php include("template/msg.php"); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="tbl_personal" class="table table-hover dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Orden</th>
                                                        <th>NroSolicitud</th>

                                                        <th>Fecha</th>
                                                        <th>Clasificacion</th>
                                                        <th>Tipo Detencion</th>
                                                        <th>Estado</th>

                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($tecnicos): ?>

                                                    <?php foreach ($tecnicos as $tecnico): ?>

                                                    <tr>
                                                        <td>
                                                            <?php echo $tecnico -> idMan_Tecnico; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $tecnico -> NroSolicitud; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $tecnico -> fecha; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $tecnico -> clasificacion; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $tecnico -> tipo_detencion; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $tecnico -> estado; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url( '/index.php/seguimiento/verSeguimiento/'.$tecnico->idMan_Tecnico); ?>" class="label label-primary">
                                        <i class="icon voyager-documentation"></i>Ver</a>
                                                            <a href="#" class="label label-success"> Editar</a>
                                                            <a href="#" class="label label-danger" onclick=" return confirm('¿Estas seguro que deseas eliminar la publicación?');"> Eliminar</a>
                                                        </td>

                                                    </tr>



                                                    <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>





        </div>
    </div>

    <?php include("template/footertable.php"); ?>
