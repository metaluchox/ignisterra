<?php include("template/header.php"); ?>

<body class="voyager ">

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

                            <li class="active">
                              <i class="voyager-mail"></i>
                                Config Email
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
                        ?>
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                        <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/mantencion/landingPage'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Orden Trabajo<span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#3-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-search"></span> <span class="title">Buscador</span> </a>
                                <div id="3-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">

                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
                        <span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/entreFechas');?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Entre fecha</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#1-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">Listado</span> </a>
                                <div id="1-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                            </li>


                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">List por Ejecutar</span> </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
                                <div id="2-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <!-- <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Desempeño Maquinas</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/indice');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">Indice de cumplimiento</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-person"></span> <span class="title">Informe horas hombres</span> </a>
                                            </li> -->
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/historialMaquina');  ?>" target="_self" style="color:">
                        <span class="icon voyager-truck"></span> <span class="title">Historial Maquinas</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/historialPersonal');  ?>" target="_self" style="color:">
                        <span class="icon voyager-settings"></span> <span class="title">Informe Tecnicos</span> </a>
                                            </li>
                                            <!-- <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-laptop"></span> <span class="title">Programa Mantencion</span> </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/otherActivities');  ?>" target="_self" style="color:">
                        <span class="icon voyager-world"></span> <span class="title">Otras actividades</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/maquina/index');  ?>" target="_self" style="color:">
                        <span class="icon fas fa-tachometer-alt"></span> <span class="title">Maquinas</span> </a>
                            </li>

                            <li class="active">
                                <a href="<?php echo base_url('index.php/main/configEmail'); ?>" target="_self" style="color:">
                                  <span class="icon voyager-mail"></span> <span class="title">Config Email<span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/listPersonal'); ?>" target="_self" style="color:">
                                  <span class="icon fas fa-user-secret"></span> <span class="title">Privacidad<span>
                                </a>
                            </li>
                        </ul>


                        <?php
                          break;

                    }
                    ?>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">

                    <h1 class="page-title">
                        <i class="voyager-mail"></i> Configuracion Email &nbsp;

                    </h1>
                    <div class="page-content container-fluid">
                      <div class="alerts"><?php include("template/msg.php"); ?></div>
                        <div class="row">
                            <div class="col-md-12">
                              <?php if ($email!=false): ?>
                                <?php foreach ($email as $mail): ?>

                                      <div class="panel panel-bordered">
                                          <div class="panel-body">
                                                <?php echo form_open("main/editConfig"); ?>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Protocol</label>
                                            <?php echo form_input(['maxlength'=>'6','name'=>'protocol','class'=>'form-control','value'=>set_value('protocol',$mail-> protocol)]); ?>
                                          <!-- <input class="form-control" name="protocol" placeholder="Protocol" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('protocol','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Host</label>
                                            <?php echo form_input(['name'=>'smtp_host','class'=>'form-control','value'=>set_value('smtp_host',$mail-> smtp_host)]); ?>
                                          <!-- <input class="form-control" name="smtp_host" placeholder="Host" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_host','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Puerto</label>
                                            <?php echo form_input(['name'=>'smtp_port','class'=>'form-control','value'=>set_value('smtp_port',$mail-> smtp_port)]); ?>
                                          <!-- <input class="form-control" name="smtp_port" placeholder="Port" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_port','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP User</label>
                                            <?php echo form_input(['name'=>'smtp_user','class'=>'form-control','value'=>set_value('smtp_user',$mail-> smtp_user)]); ?>
                                          <!-- <input class="form-control" name="smtp_user" placeholder="" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_user','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Password</label>
                                            <?php echo form_password(['name'=>'smtp_pass','class'=>'form-control','value'=>set_value('smtp_pass',$mail-> smtp_pass)]); ?>
                                          <!-- <input class="form-control" name="smtp_pass" placeholder="" value="" type="password"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_pass','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Codigo Encargado</label>
                                            <?php echo form_input(['name'=>'codigoEncargado','class'=>'form-control','value'=>set_value('codigoEncargado',$mail-> codigoEncargado)]); ?>
                                            <?php if ($personas): ?>
                                              <?php foreach ($personas as $key): ?>
                                                <?php if ($key-> Codigo == $mail-> codigoEncargado): ?>
                                                  <div style="margin-top: 10px;">

                                                    <p><?php echo $key-> Nombre; ?></p>
                                                  </div>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            <?php endif; ?>
                                          <!-- <input class="form-control" name="smtp_user" placeholder="" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('codigoEncargado','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Codigo CC Urgente</label>
                                            <?php echo form_input(['name'=>'codigoCC','class'=>'form-control','value'=>set_value('codigoCC',$mail-> codigoCC)]); ?>
                                            <?php if ($personas): ?>
                                              <?php foreach ($personas as $key): ?>
                                                <?php if ($key-> Codigo == $mail-> codigoCC): ?>
                                                  <div style="margin-top: 10px;">

                                                    <p><?php echo $key-> Nombre; ?></p>
                                                  </div>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            <?php endif; ?>

                                          <!-- <input class="form-control" name="smtp_user" placeholder="" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('codigoCC','<div class="text-danger">','</div>') ?>
                                            </div>
                                          </div>
                                          <div class="panel-footer">
                                              <button type="submit" class="btn btn-warning edit"> <i class="voyager-edit"></i>  Editar</button>
                                              <a href="<?php echo base_url('index.php/main/deleteConfig');  ?>" class="btn btn-danger" onclick=" return confirm('¿Estas seguro que deseas eliminar Configuracion?');">
                                                <i class="voyager-trash"></i> Eliminar</a>
                                          </div>
                                          <?php echo form_close(); ?>
                                        </div>
                                      </div>

                                <?php endforeach; ?>

                                <?php else: ?>

                                      <div class="panel panel-bordered">
                                          <div class="panel-body">
                                                <?php echo form_open('main/saveConfig'); ?>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Protocol</label>
                                          <input class="form-control" name="protocol" placeholder="Protocol" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('protocol','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Host</label>
                                          <input class="form-control" name="smtp_host" placeholder="Host" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_host','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Puerto</label>
                                          <input class="form-control" name="smtp_port" placeholder="Port" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_port','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP User</label>
                                          <input class="form-control" name="smtp_user" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_user','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Password</label>
                                          <input class="form-control" name="smtp_pass" placeholder="" value="" type="password">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_pass','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <hr>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Codigo encargado</label>
                                          <input class="form-control" name="codigoEncargado" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('codigoEncargado','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Codigo CC Urgente</label>
                                          <input class="form-control" name="codigoCC" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('codigoCC','<div class="text-danger">','</div>') ?>
                                            </div>
                                          </div>
                                          <div class="panel-footer">
                                              <button type="submit" class="btn btn-primary save">Save</button>
                                          </div>
                                          <?php echo form_close(); ?>
                                        </div>
                                      </div>
                              <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include("template/footerMantencion.php"); ?>
