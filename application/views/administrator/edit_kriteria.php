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
                                        <h4 class="m-0 font-weight-bold text-dark">Edit Kriteria Penilaian</h4>
                                        <form method="post" action="<?php echo base_url('administrator/edit_kriteriaaksi')?>" enctype="multipart/form-data">
        
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                     
                                <div class="form-group">
                                <label>Kriteria Penilaian : </label>
                                    <input type="text" class="form-control form-control-user" id="kriteria" 
                                    name="kriteria" placeholder="Kriteria Penilaian" style="text-transform:capitalize" value="<?= @$datakriteria['kriteria']; ?>" >
                                    <input type="hidden" name="id_kriteria" value="<?= @$datakriteria['id_kriteria']; ?>" >
                                    <?=form_error('kriteria','<small class="text-danger pl-3">','</small>');?>
                                </div>

                                <div class="form-group">
                                <label>Keterangan : </label>
                                    <input type="text" class="form-control form-control-user" id="ket_kriteria" 
                                    name="ket_kriteria" placeholder="Keterangan Kriteria Penilaian" value="<?= @$datakriteria['ket_kriteria']; ?>" >
                                    <?=form_error('kriteria','<small class="text-danger pl-3">','</small>');?>
                                </div>

                                <div class="form-group">
                                <label>Bobot Kriteria : </label>
                                    <input type="text" class="form-control form-control-user" id="bobot_kriteria" 
                                    name="bobot_kriteria" placeholder="Bobot Kriteria Penilaian" value="<?= @$datakriteria['bobot_kriteria']; ?>" >
                                    <?=form_error('kriteria','<small class="text-danger pl-3">','</small>');?>
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

           