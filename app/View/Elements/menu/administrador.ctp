<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="javascript:">
                <!-- Logo icon -->
                <b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?php echo $this->webroot; ?>template/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="<?php echo $this->webroot; ?>template/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo $this->webroot; ?>template/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->
                         <img src="<?php echo $this->webroot; ?>template/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0 ">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>

               
                <!-- <li class="nav-item ">
                    <a class="nav-link text-muted text-muted waves-effect waves-dark" title="Presupuestos" href="<?php echo $this->Html->url(array('controller' => 'Presupuestos', 'action' => 'index')); ?>" > <i class="mdi mdi-coins"></i>
                        <div class="notify"> </div>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-muted text-muted waves-effect waves-dark" title="Comprobantes pendientes" href="<?php echo $this->Html->url(array('controller' => 'Comprobantes', 'action' => 'no_comprobados')); ?>" > <i class="mdi mdi-format-align-justify"></i>
                        <div class="notify"> </div>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-muted text-muted waves-effect waves-dark" title="Imprimir" href="javascript:" onclick="pop_print();"> <i class="mdi mdi-printer"></i>
                        <div class="notify"> </div>
                    </a>
                </li> -->

            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $this->webroot; ?>img/user.jpg" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="<?php echo $this->webroot; ?>img/user.jpg" alt="user"></div>
                                    <div class="u-text">
                                        <h4><?php echo $this->Session->read('Auth.User.username') ?></h4>
                                        <p class="text-muted"><?php echo $this->Session->read('Auth.User.nombre') ?></p></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:"  onclick="cargarmodal('<?php echo $this->Html->url(['controller' => 'Users','action' => 'usuario', $this->Session->read('Auth.User.id')]) ?>');"><i class="ti-user"></i> Mi cuenta</a></li>

                            <li role="separator" class="divider"></li>
                            <li><a href="<?= $this->Html->url(['controller' => 'Users','action' => 'salir']);?>"><i class="fa fa-power-off"></i> Salir</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->