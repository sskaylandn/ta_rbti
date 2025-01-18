                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if (@$getjoin['status_bayar'] == 'Berhasil') { ?>
                    <?= $this->session->flashdata('message');?>
                    <!-- Page Heading -->
                    <!-- Sudah Finalisasi -->
                    <?php if (@$getjudul['finalisasi'] == 'Finalisasi') { ?>
                   
                        <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h4 class="list-group-item list-group-item-dark">Halaman Sertifikat </h4>
                                       
                                        </div>                                           
                                    </div> 
                                    <br>
                                    
                                    <div class="form-group col-sm-11">
                                        <label><h4>Sertifikat Hustler </h4></label>
                                    <table>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Nama Lengkap
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><?= @$getsertif['nama_hustler']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Lihat Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-primary fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/lihathustler/'.@$getsertif['id_user'])?>"> Lihat Sertifikat </a></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Download Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-success fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/downloadhustler/'.@$getsertif['id_user'])?>"> Download Sertifikat </a></td>
                                                </tr>
                                    </table>
                                    </div>
                                    <br>
                                    <div class="form-group col-sm-11">
                                        <label><h4>Sertifikat Hipster </h4></label>
                                    <table>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Nama Lengkap
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><?= @$getsertif['nama_hipster']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Lihat Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-primary fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/lihathipster/'.@$getsertif['id_user'])?>"> Lihat Sertifikat </a></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Download Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-success fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/downloadhipster/'.@$getsertif['id_user'])?>"> Download Sertifikat </a></td>
                                                </tr>
                                    </table>
                                    </div>
                                    <br>
                                    <div class="form-group col-sm-11">
                                        <label><h4>Sertifikat Hacker </h4></label>
                                    <table>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Nama Lengkap
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><?= @$getsertif['nama_hacker']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Lihat Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-primary fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/lihathacker/'.@$getsertif['id_user'])?>"> Lihat Sertifikat </a></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Download Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-success fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/downloadhacker/'.@$getsertif['id_user'])?>"> Download Sertifikat </a></td>
                                                </tr>
                                    </table>

                                     </div>
                                </div>
                            </div>
                   
                        </div> 
                        </div>

                 
                    
                    <br>
            
                    <!-- Belum Finalisasi -->
                    <?php } else { ?>
                        <div class="p-3 mb-2 bg-danger text-white">
                          Sertifikat belum tersedia 
                          <span aria-hidden="true"></span>
                        </div>
                    <?php } ?>

                      
                    <!-- Belum Bayar -->
                    <?php } else { ?>
                    <!-- Page Heading -->
                    <div class="p-3 mb-2 bg-danger text-white">
                          Pembayaran belum diverifikasi, silakan melakukan pembayaran atau menunggu pembayaran di verifikasi 
                          <span aria-hidden="true"></span>
                    </div>
                 
                <?php } ?>
              
           
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
           

