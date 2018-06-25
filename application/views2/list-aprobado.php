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
          <li class="active">
          <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
              <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
          </li>
          <li class="">
          <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
              <span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
          </li>
          <li class="">
          <a href="<?php echo base_url('index.php/seguimiento/entreFechas');?>" target="_self" style="color:">
              <span class="icon voyager-calendar"></span> <span class="title">Entre fecha</span> </a>
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


<div class="container-fluid">
  <div class="side-body padding-top">
          <div class="container-fluid">
<h1 class="page-title">
  <i class="voyager-news"></i> Encargado de Mantencion
</h1>
<a href="<?php echo base_url('index.php/mantencion/listado');  ?>" class="btn btn-danger">
  <span class="glyphicon glyphicon-list"></span>&nbsp;
  Listar Abiertas
</a>
                                          </div>
      <div id="voyager-notifications"></div>
          <div class="page-content browse container-fluid">
<div class="alerts"><?php include("template/msg.php"); ?></div>
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
                                  <th>Maquina</th>
                                  <th>CodArea</th>
                                  <th>Tipo</th>
                                  <th>Tipo de Trabajo</th>
                                  <th>Fecha</th>
                                  <th>Estado</th>
                                  <th>Urgente</th>

                                  <th></th>

                              </tr>
                          </thead>
                          <tbody>
                              <?php  { if ($data) foreach ($data as $row ) { ?>
                                <?php if ($row-> urgente == 'SI' ): ?>
                                  <tr class="danger">
                                      <td>
                                          <?php echo $row -> orden; ?></td>
                                      <td>
                                          <?php echo $row -> NroSolicitud; ?></td>
                                      <td>
                                          <?php echo $row -> maquina; ?></td>
                                      <td>
                                          <?php foreach ($area as $key): ?>
                                            <?php if ($row-> CodArea == $key-> CodArea): ?>
                                            <?php echo $key-> DescArea ?>
                                            <?php endif; ?>
                                          <?php endforeach; ?>
                                        </td>
                                      <td>
                                          <?php echo $row -> tipomantencion; ?></td>
                                      <td>
                                          <?php echo $row -> tipotrabajo; ?></td>
                                      <td>
                                          <?php echo $row -> fechasolicitud; ?></td>
                                      <td>
                                          <?php echo $row -> estado; ?></td>
                                      <td>
                                          <?php echo $row -> urgente; ?></td>

                                      <td>

                                      <a href="<?php echo base_url( '/index.php/mantencion/verSeguimientoCerrado/'.$row->NroSolicitud); ?>" class="label label-info"> Ver</a>
                                      <a href="<?php echo base_url('/index.php/mantencion/verSeguimientoCerrado/'.$row->NroSolicitud); ?>" class="label label-danger" onclick=" return confirm('¿Estas seguro que deseas eliminar la publicación?');"> Eliminar</a>
                                      </td>
                                      </tr>
                                <?php else: ?>
                                  <tr>
                                      <td>
                                          <?php echo $row -> orden; ?></td>
                                      <td>
                                          <?php echo $row -> NroSolicitud; ?></td>
                                      <td>
                                          <?php echo $row -> maquina; ?></td>
                                      <td>
                                          <?php foreach ($area as $key): ?>
                                            <?php if ($row-> CodArea == $key-> CodArea): ?>
                                            <?php echo $key-> DescArea ?>
                                            <?php endif; ?>
                                          <?php endforeach; ?>
                                        </td>
                                      <td>
                                          <?php echo $row -> tipomantencion; ?></td>
                                      <td>
                                          <?php echo $row -> tipotrabajo; ?></td>
                                      <td>
                                          <?php echo $row -> fechasolicitud; ?></td>
                                      <td>
                                          <?php echo $row -> estado; ?></td>
                                      <td>
                                          <?php echo $row -> urgente; ?></td>

                                      <td>

                                      <a href="<?php echo base_url( '/index.php/mantencion/verSeguimientoCerrado/'.$row->NroSolicitud); ?>" class="label label-info"> Ver</a>
                                      <a href="<?php echo base_url('/index.php/mantencion/verSeguimientoCerrado/'.$row->NroSolicitud); ?>" class="label label-danger" onclick=" return confirm('¿Estas seguro que deseas eliminar la publicación?');"> Eliminar</a>
                                      </td>
                                      </tr>
                                <?php endif; ?>

                                  <?php } } ?>
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
