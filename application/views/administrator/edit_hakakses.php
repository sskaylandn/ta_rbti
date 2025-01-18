                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <h4 class="m-0 font-weight-bold text-dark">Edit Hak Akses</h4>
                                        <form method="post" action="<?php echo base_url('administrator/edit_hakaksesaksi')?>" enctype="multipart/form-data">
        
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                        
                                <div class="form-group">
                                <label>Hak Akses : </label>
                                    <input type="text" class="form-control form-control-user" id="hak_akses" 
                                    name="hak_akses" placeholder="Hak Akses" value="<?= @$datahakakses['id_hak']; ?>" disabled >
                                    <?=form_error('hak_akses','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                <label>Keterangan : </label>
                                    <input type="text" class="form-control form-control-user" id="keterangan" 
                                    name="keterangan" placeholder="Keterangan" >
                                    <?=form_error('keterangan','<small class="text-danger pl-3">','</small>');?>
                                </div>
                              
                                <button type="submit" class="btn btn-secondary">Simpan</button>
                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- modal add admin-->
                    


               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           