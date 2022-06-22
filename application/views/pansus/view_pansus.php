
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php echo base_url('User') ?>">User</a>
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
                            <a href="<?php echo base_url('user') ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Beranda</span>
                            </a>
                        </li> 
                        <li class="sidebar-item  ">
                            <a href="<?php echo base_url('auth/logout'); ?>" class='sidebar-link'>
                            <i class="bi bi-person-fill"></i>                                
                            <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
   
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Data Pansus</h3>
                <p class="text-subtitle text-muted">Lihat Data Pansus</p>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-10">
                        <div class="row">
                            <?php foreach ($komisi as $row) : ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldBookmark "></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <a href="<?php echo base_url('KategoriTopikUser?komisi=') .$row->nama_komisi; ?>" class="text-muted font-semibold"><?php echo $row->nama_komisi; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                                </div>
                                <div class="col-12 col-lg-2">
                        <div class="">
                            <div class="py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="assets/images/faces/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Haloo</h5>
                                        <h6 class="text-muted mb-0"><?php echo "".$this->session->userdata('username'); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>               
                        </div>
                        <script src="<?php echo base_url('assets/'); ?>vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
                        