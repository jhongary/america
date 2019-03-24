<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"><img src="<?php echo $this->request->webroot; ?>img/user.jpg" alt="user"/></div>
            <!-- User profile text-->
            <div class="profile-text"><a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown"
                                         role="button" aria-haspopup="true"
                                         aria-expanded="true"><?php echo $this->Session->read('Auth.User.nombre') ?>
                    <span class="caret"></span></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="javascript:"
                       onclick="cargarmodal('<?php echo $this->Html->url(['controller' => 'Users', 'action' => 'usuario', $this->Session->read('Auth.User.id')]) ?>');"
                       class="dropdown-item"><i class="ti-user"></i> Mi cuenta</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= $this->Html->url(['controller' => 'Users', 'action' => 'salir']); ?>"
                       class="dropdown-item"><i class="fa fa-power-off"></i> Salir</a>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation Administrador-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap"></li>
   

                
                <li>
                    <a href="<?php echo $this->Html->url(array('controller' => 'Personas', 'action' => 'index')); ?>"><i class="mdi mdi-steering"></i><span class="hide-menu">Conductores</span></a>
                </li>
                <li>
                    <a href="<?php echo $this->Html->url(array('controller' => 'Autos', 'action' => 'index')); ?>"><i class="mdi mdi-car-wash"></i><span class="hide-menu">Autos</span></a>
                </li>
                 <li>
                    <a href="<?php echo $this->Html->url(array('controller' => 'Tarifas', 'action' => 'index')); ?>"><i class="mdi mdi-road-variant"></i><span class="hide-menu">Tarifas</span></a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation Administrador -->
    </div>
    <!-- End Sidebar scroll-->

</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->