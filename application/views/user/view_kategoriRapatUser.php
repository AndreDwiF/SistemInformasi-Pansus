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
                <h3>Data Rapat</h3>
                <p class="text-subtitle text-muted">Lihat Data Pansus</p>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-10">
                        <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Rapat</th>
                                        <th>Tanggal</th>
                                        <th>Topik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data as $row) : ?>
                                    <tr>
                                        <td><?php echo $row->nama_rapat; ?></td>
                                        <td><?php echo $row->tanggal_rapat; ?></td>
                                        <td><?php echo $row->nama_topik; ?></td></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
                </section>
                    </div>               
                        </div>
                        <script src="<?php echo base_url('assets/'); ?>vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
                        
                   
   
    
