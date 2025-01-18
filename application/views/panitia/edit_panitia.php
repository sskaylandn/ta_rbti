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
                                        <h4 class="m-0 font-weight-bold text-dark">Edit Panitia</h4>
                                        <form method="post" action="<?php echo base_url('panitia/edit_panitiaaksi')?>" enctype="multipart/form-data">
        
                                       
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
                                            <?=form_error('nama_admin','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap : </label>
                                            <input type="text" class="form-control form-control-user" id="nama_panitia" 
                                            name="nama_panitia" placeholder="Full Name" style="text-transform:capitalize" value="<?= @$datapanitia['nama_panitia']; ?>" >
                                            <?=form_error('nama_panitia','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label>NIM Panitia : </label>
                                            <input type="text" class="form-control form-control-user" id="nim_panitia" 
                                            name="nim_panitia" placeholder="Masukkan NIP" value="<?= @$datapanitia['nim_panitia']; ?>">
                                            <?=form_error('nim_panitia','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label>Nomor HP : </label>
                                            <input type="tel" class="form-control form-control-user" id="nohp_panitia" 
                                            name="nohp_panitia" placeholder="Phone Number" value="<?= @$datapanitia['nohp_panitia']; ?>">
                                            <?=form_error('nohp_panitia','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        </div>
                                        <!-- <input type="hidden" name="date_admin"  class="form-control" value="<?php echo date("Y-m-d") ?>"> -->
                              
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

           