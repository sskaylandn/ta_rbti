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
                                        <h4 class="m-0 font-weight-bold text-dark">Detail Peserta</h4>
                                      
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                   
                                    <div class="form-group">
                                 
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="uname_user" 
                                            name="uname_user" placeholder="Full Name" value="<?= @$datauser['uname_user']; ?>" disabled>
                                            <input type="hidden" name="id_user" value="<?= @$datauser['id_user']; ?>" >
                                            <?=form_error('nama_peserta','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap : </label>
                                            <input type="text" class="form-control form-control-user" id="nama_peserta" 
                                            name="nama_peserta" placeholder="Full Name" style="text-transform:capitalize" value="<?= @$datapeserta['nama_peserta']; ?>" disabled>
                                            <?=form_error('nama_peserta','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label>NIK peserta : </label>
                                            <input type="text" class="form-control form-control-user" id="nik_peserta" 
                                            name="nik_peserta" placeholder="Masukkan NIP" value="<?= @$datapeserta['nik_peserta']; ?>"disabled>
                                            <?=form_error('nik_peserta','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label>Nomor HP : </label>
                                            <input type="telp" class="form-control form-control-user" id="nohp_peserta" 
                                            name="nohp_peserta" placeholder="Phone Number" value="<?= @$datapeserta['nohp_peserta']; ?>"disabled>
                                            <?=form_error('nohp_peserta','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Peserta : </label>
                                            <input type="text" class="form-control form-control-user" id="alamat_peserta" 
                                            name="alamat_peserta" placeholder="Full Name" style="text-transform:capitalize" value="<?= @$datapeserta['alamat_peserta']; ?>"disabled >
                                            <?=form_error('alamat_peserta','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                       <br>
                                        <!-- <input type="hidden" name="date_peserta"  class="form-control" value="<?php echo date("Y-m-d") ?>"> -->
                                        <div class="form-group col-xl-10 col-md-11">
                                            <?php echo anchor('panitia/index_peserta/','<button class="btn btn-sm btn-dark mb-5"></i> Back </button> ')?>    
                                        </div>

                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                    <!-- modal add peserta-->
                    


               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           