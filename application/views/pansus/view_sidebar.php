<div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php echo base_url('Dashboard') ?>">Admin</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item active ">
                            <a href="<?php echo base_url('Dashboard') ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?php if ($menu_active == "kelola data"); ?>" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Kelola Data</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Pansus'); ?>">Komisi</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Rapat'); ?>">Rapat</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Topik'); ?>">Topik</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Form Layout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
   
                    </div>