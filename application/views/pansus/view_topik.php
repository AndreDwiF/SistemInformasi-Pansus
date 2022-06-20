<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Data Topik</h3>
            </div>
            <div class="page-content">
            <section class="row">
            <div class="col-12 col-lg-10">
                            <div class="form-group">
                                <!-- Button trigger for insert form modal -->
                                <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#inlineForm"><i class="fa fa-plus"></i>Tambah Data
                                </a>
                            
                        <div class="table-responsive">
                            <table class="table table-hover table-lg mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Topik</th>
                                        <!-- <th>Komisi</th> -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    foreach ($data as $row) : ?>
                                    <tr>
                                        <td class="text-bold-500"><?php echo $no++; ?></td>
                                        <td><?php echo $row->nama_topik; ?></td>
                                        <!-- <td class="text-bold-500"><?php echo $row->nama_komisi; ?></td> -->
                                        <td>
                                        <form action="<?php echo base_url('topik/ProseshapusTopik')?>" method="POST">
                                        <input type="hidden" name="id_topik" value="<?php echo $row->id_topik; ?>">
                                        <button class= "btn rounded-pill btn-outline-danger btn-sm" onclick="return confirm('Apakah anda yakin ?!');">Hapus</button>
                                        <a href="" class="btn rounded-pill btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#inlineFormEdit<?php echo $row->id_topik;?>">Edit</button>
                                    </form>
                                    </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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

             <!--insert form Modal -->                   
             <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Tambah Data</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>

                                                <div class="modal-body">
                                                <form action="<?php echo base_url('Topik/tambah'); ?>" method="POST">
                                                <div class="form-group">
                                                    <label>Nama Topik </label>                                          
                                                    <input type="text" name="namaTopik" placeholder="Nama Topik"class="form-control" required>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <label>Komisi</label>
                                                    <select name="komisi" id="" class="form-control" required>
                                                    <option value="" >-PILIH-</option>
                                                    <?php foreach($komisi as $row) : ?>
                                                    <option value="<?php echo $row->id_komisi; ?>"><?php echo $row->nama_komisi; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                </div> -->

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Batal</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-outline-primary btn-sm ml-1"
                                                        data-bs-dismiss="">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Simpan</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                    </div>
                </div>
        </div>

        <!--Edit form Modal -->
        <?php foreach($data as $row) : ?>
        <div class="modal fade text-left" id="inlineFormEdit<?php echo $row->id_topik;?>" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Edit Data</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>

                                                <div class="modal-body">
                                                <form action="<?php echo base_url('Topik/ProsesEditTopik'); ?>" method="POST">
                                                <div class="form-group">
                                                    <label>Nama Topik </label>
                                                    <input type="hidden" name="id_topik" value="<?php echo $row->id_topik; ?>">                                
                                                    <input type="text" name="namaTopik" placeholder="Nama Topik"class="form-control" value="<?php echo $row->nama_topik; ?>" required>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <label>Nama Komisi</label>                                 
                                                    <select name="namaKomisi" id="" class="form-control" required>
                                                    <option value="<?php echo $row->id_komisi; ?>" ><?php echo $row->nama_komisi; ?></option>
                                                    <?php foreach($komisi as $row) : ?>
                                                    <option value="<?php echo $row->id_komisi; ?>"><?php echo $row->nama_komisi; ?></option>
                                                    <?php endforeach; ?>
                                                </select>                                                
                                            </div> -->
                                                
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Batal</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-outline-warning btn-sm ml-1"
                                                        data-bs-dismiss="">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Simpan</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
</div>

</body>
</html>