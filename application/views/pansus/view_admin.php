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
                                                <a href="<?php echo base_url('KategoriTopik?komisi=') .$row->nama_komisi; ?>" class="text-muted font-semibold"><?php echo $row->nama_komisi; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="bi bi-info-square"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Komisi B</h6>
                                                <h6 class="font-extrabold mb-0"></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="bi bi-info-square"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Komisi C</h6>
                                                <h6 class="font-extrabold mb-0"></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="bi bi-info-square"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Komisi D</h6>
                                                <h6 class="font-extrabold mb-0"></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Rapat</th>
                                        <th>Tanggal Rapat</th>
                                        <th>Komisi</th>
                                        <th>Topik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($rapat as $row) : ?>
                                    <tr>
                                        <td><?php echo $row->nama_rapat; ?></td>
                                        <td><?php echo $row->tanggal_rapat; ?></td>
                                        <td><?php echo $row->nama_komisi; ?></td>
                                        <td><?php echo $row->nama_topik; ?></td>
                                        <td>
                                            <span class="badge bg-success"></span>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>Dale</td>
                                        <td>fringilla.euismod.enim@quam.ca</td>
                                        <td>
                                            <span class="badge bg-danger"></span>
                                        </td>
                                    </tr> -->
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
                    </div>               
                        </div>
                        <script src="<?php echo base_url('assets/'); ?>vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
                        
                   
   
    
