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
                                 <a href="<?php echo base_url('index.php/main/index'); ?>"  target="_self" style="color:">Panel</a>
                            </li>
                            <li class="">
                                <i class="voyager-list"></i>
                                <a href="<?php echo base_url('index.php/mantencion/listado'); ?>" target="_self" style="color:">Listado</a>
                            </li>
                            <li class="">
                                <i class="voyager-person"></i>
                                <a href="<?php echo base_url( '/index.php/mantencion/verMantencion/'.$numero); ?>" target="_self" style="color:">
                    Mantencion N  <?php echo $numero; ?></a>
                            </li>
                            <li class="active">
                                Historial
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
                            include('template/nav-enc.php');
                            break;
                        case 3:
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
                            <i class="voyager-folder"></i> Historial de Maquina
                            <?php echo urldecode($machine); ?>
                        </h1>
                        <p style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#999; text-align:center;">
                            La busqueda se realiza bajo el termino de <code> un mes</code>.
                        </p>

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

                                            <table id="tbl_personal" class="table table-striped dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Numero Solicitud</th>
                                                        <th>Fecha Solicitud</th>
                                                        <th>Detalle</th>
                                                        <th>Estado</th>
                                                        <th>Empleador Solicitante</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($maquinas): ?>
                                                    <?php foreach ($maquinas as $maquina): ?>
                                                    <tr>
                                                        <td class="text-center">
                                                            <?php echo $maquina-> NroSolicitud; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $maquina-> fechasolicitud; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $maquina-> detalle; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $maquina-> estado; ?>
                                                        </td>
                                                        <td>
                                                              <?php echo $maquina-> cod_detecta; ?>
                                                        </td>
                                                        <td>
                                                          <input type="button" class="btn btn-info btn-sm view_data" value="Ver Seguimiento" id="<?php echo $maquina-> NroSolicitud ;?>">

                                                        </td>

                                                        <?php endforeach; ?>
                                                    </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                            <!-- Modal -->
                                            <div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="margin-top: -20px;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Detalle de Mantencion</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Place to print the fetched phone -->
                                                            <div id="phone_result"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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


                </div>
            </div>

        </div>
    </div>
    </div>

    <?php include("template/footer2.php"); ?>
