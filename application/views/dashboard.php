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
                                <i class="voyager-home"></i> <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">Panel</a>
                            </li>
                            <li class="active">
                                <i class="voyager-tag"></i> Solicitar Mantencion
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
                                <div class="title">Ignisterra</div>
                            </a>
                        </div>
                        <!-- .navbar-header -->

                        <div class="panel widget center bgimage" style="background-image:url(assets/img/bg.jpg); background-size: cover; background-position: 0px;">
                            <div class="dimmer"></div>
                            <div class="panel-content">
                                <img src="<?php echo base_url('assets/img/default.png'); ?>" class="avatar" alt="Admin Web avatar">
                                <h4>
                                    <?php echo $Nombre ?>
                                </h4>
                                <a href="#" class="btn btn-primary">Perfil</a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    switch ($Tipo) {
                        case 1:
                          ?>
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                                <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('index.php/mantencion/index'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Orden Trabajo<span>
                            </a>
                        </li>
                    </ul>


                    <?php
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
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <h1 class="page-title">
                        <i class="voyager-documentation"></i> Agregar Mantencion
                    </h1>

                    <?php include('template/msg.php'); ?>


                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">
                                    <!-- form start -->
                                    <?php echo form_open('mantencion/saveMAN',['name'=>'form']); ?>

                                    <div class="panel-body">

                                        <div class="form-group  col-md-5">
                                            <h2><strong>Numero de Solicitud</strong></h2>
                                            <h3>
                                                <?php if ($orden): ?>
                                                <?php $Num =0; ?>
                                                <?php foreach ($orden as $key): ?>
                                                <?php $Num =   $key-> total; ?>
                                                <?php  $Num+=1; ?>
                                                <?php endforeach; ?>

                                                <?php echo 'M'.$Num; ?>
                                                <input type="hidden" name="NroSolicitud" value="<?php echo 'M'.$Num; ?>">
                                                <input type="hidden" name="orden" value="<?php echo $Num; ?>">
                                                <?php endif; ?>

                                            </h3>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <h2><strong>Codigo Personal</strong></h2>
                                            <div class="form-group mx-sm-3 mb-2">
                                                <input type="text" name="phoneData" id="phoneData" class="view_data form-control" value=""> <br>
                                                <p id="phone_result">
                                                    <?php echo form_error('phoneData','<div class="text-danger">','</div>') ?>&nbsp;
                                                </p>
                                            </div>
                                        </div>


                                        <div class="form-group  col-md-5">
                                            <h3>Maquina</h3>

                                            <div class="form-group mx-sm-3 mb-2">
                                                <select class="form-control select2 select2-hidden-accessible" id="id_maquinaria" name="" tabindex="-1" aria-hidden="true">
                                                    <option selected="" disabled> --- Maquinas ---</option>
                                                    <?php if ($data) foreach ($data as $maquina) { ?>

                                                    <option value="<?php echo $maquina-> DescArea ?>">
                                                        <?php echo $maquina-> Maquina ?>
                                                    </option>
                                                    <?php }?>
                                                    <option disabled> --- Centro Costo ---</option>
                                                    <?php if ($costos) foreach ($costos as $costo) { ?>

                                                    <option value="<?php echo $costo-> DescArea ?>">
                                                        <?php echo $costo-> CentroCosto ?>
                                                    </option>
                                                    <?php }?>

                                                </select>
                                                <div class="col-md-5">
                                                    <?php echo form_error('maquina','<div class="text-danger">','</div>') ?>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group  col-md-5">
                                            <h3>Area</h3>
                                            <input name='CodArea' id='CodArea' class='form-control' readonly='TRUE'>
                                            <input type="hidden" name="maquina" value="<?php echo set_value('maquina'); ?>" id="maquina">
                                        </div>
                                        <div class="form-group  col-md-8">
                                            <h3>Tipo Mantencion</h3>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipomantencion" id="tipo_mantencion1" value="Correctiva" <?php echo set_radio( 'tipomantencion', 'Correctiva') ?>>
                                                <label class="form-check-label" for="tipo_mantencion1">Correctiva</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipomantencion" id="tipo_mantencion2" value="Mejora" <?php echo set_radio( 'tipomantencion', 'Mejora') ?>>
                                                <label class="form-check-label" for="tipo_mantencion2">Mejora</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipomantencion" id="tipo_mantencion3" value="Preventiva" <?php echo set_radio( 'tipomantencion', 'Preventiva') ?>>
                                                <label class="form-check-label" for="tipo_mantencion3">Preventiva</label>
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('tipomantencion','<div class="text-danger">','</div>') ?>
                                            </div>
                                        </div>



                                        <div class="form-group  col-md-12">
                                            <h3>Detalle</h3>
                                            <?php echo form_textarea(['name'=>'detalle','placeholder'=>'Descripción ','value'=> set_value('detalle'),'class'=>'form-control','row'=>'5']); ?>

                                            <div class="col-md-5">
                                                <?php echo form_error('detalle','<div class="text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group  col-md-12">
                                            <?php if ($Tipo==2): ?>
                                            <label>Urgente</label>
                                            <div class="custom-control custom-checkbox">
                                                <?php echo form_checkbox('urgente', 'SI'); ?>
                                                <label class="custom-control-label" for="customCheck1">Se requiere urgente?</label>
                                            </div>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                    <!-- panel-body -->
                                    <div class="panel-footer">
                                        <?php echo form_submit(['name'=>'submit','value'=>'Enviar Mantencion','class'=>'btn btn-primary']); ?>
                                    </div>

                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("template/footer.php"); ?>
