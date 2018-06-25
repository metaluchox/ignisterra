<?php include("template/header.php"); ?>
<body class="voyager ">

<div id="voyager-loader">
  <?php echo base_url('assets/img/logo-icon.png'); ?>
    <img src="<?php echo base_url('assets/img/logo-icon.png'); ?>" alt="Voyager Loader">
</div>


<div class="app-container">
    <div class="fadetoblack visible-xs"></div>
    <div class="row content-container">
      <nav class="navbar navbar-default navbar-fixed-top navbar-top">
      <div class="container-fluid">
      <div class="navbar-header">
          <button class="hamburger btn-link">
          <span class="hamburger-inner"></span>
          </button>
          <ol class="breadcrumb hidden-xs">
            <li class="">
              <i class="voyager-home"></i>
                 <a href="<?php echo base_url('index.php/main/menu'); ?>"  target="_self" style="color:">Panel</a>
            </li>

            <li class="active">
              Buscar
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
            </div><!-- .navbar-header -->

            <div class="panel widget center bgimage"
                 style="background-image:url(assets/img/bg.jpg); background-size: cover; background-position: 0px;">
                <div class="dimmer"></div>
                <div class="panel-content">
                    <img src="<?php echo base_url('assets/img/default.png'); ?>" class="avatar" alt="Admin Web avatar">
                    <h4><?php echo $Nombre ?> </h4>


                    <a href="#" class="btn btn-primary">Perfil</a>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>
        <ul class="nav navbar-nav">
        <li class="">
        <a href="<?php echo base_url('index.php/main/menu'); ?>"  target="_self" style="color:">
        <span class="icon voyager-documentation"></span> <span class="title">Panel</span> </a>
        </li>
        <li class="">
            <a href="<?php echo base_url('index.php/main/configEmail'); ?>" target="_self" style="color:"> <span class="icon voyager-mail"></span> <span class="title">Config Email<span>
            </a>
        </li>

        <li class="dropdown active">
        <a href="#8-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-documentation"></span> <span class="title">Encargado</span> </a>
        <div id="8-dropdown-element" class="panel-collapse collapse ">
        <div class="panel-body">
        <ul class="nav navbar-nav">
          <li class="">
          <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
              <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
          </li>
          <li class="active">
          <a href="#" target="_self" style="color:">
              <span class="icon voyager-search"></span> <span class="title">Buscar Codigo Mant</span> </a>
          </li>
          <li class="">
          <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
              <span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
          </li>
          <li class="">
          <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
              <span class="icon voyager-check"></span> <span class="title">List Man. asignadas</span> </a>
          </li>
          <li class="">
          <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
              <span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
          </li>
        </ul>
        </div>
        </div>
        </li>
        </ul>
    </nav>
</div>

        <!-- Main Content -->
        <div class="container-fluid">
    <div class="side-body padding-top">
        <h1 class="page-title">
          <i class="voyager-settings"></i> Encargado de Mantencion
        </h1>

        <?php include("template/msg.php"); ?>

        <div class="page-content edit-add container-fluid">
            <div class="row">
              <div class="col-sm-12">

              </div>
                <div class="col-md-12">


                    <div class="panel panel-bordered">
                        <!-- form start -->

                          <?php echo form_open('mantencion/buscarMantencion',['name'=>'form_buscar']); ?>
                          <div class="panel-body">
                            <div class="form-group  col-md-2">
                              <h2><strong>Codigo</strong></h2>

                                <input type="text" name="NroSolicitud" id="NroSolicitud" value="" class="form-control">
                                <div class="col-md-5">
                                  <?php echo form_error('NroSolicitud','<div class="text-danger">','</div>') ?>
                                </div>
                              <?php echo form_submit(['name'=>'buscar','id'=>'buscar','value'=>'Buscar Mantencion','class'=>'btn btn-info']); ?>
                            </div>

                          </div>
                          <?php echo form_close(); ?>
                          <div class="panel-body">
                              <div class="showdata" id="showdata">

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