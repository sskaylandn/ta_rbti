  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->

 
    <!-- Earnings (Monthly) Card Example -->
   

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
                                                    <td><?= @$tim['nama_hustler']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Lihat Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-primary fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/lihathustler/'.@$tim['id_user'])?>"> Lihat Sertifikat </a></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Download Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-success fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/downloadhustler/'.@$tim['id_user'])?>"> Download Sertifikat </a></td>
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
                                                    <td><?= @$tim['nama_hipster']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Lihat Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-primary fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/lihathipster/'.@$tim['id_user'])?>"> Lihat Sertifikat </a></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Download Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-success fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/downloadhipster/'.@$tim['id_user'])?>"> Download Sertifikat </a></td>
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
                                                    <td><?= @$tim['nama_hacker']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Lihat Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-primary fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/lihathacker/'.@$tim['id_user'])?>"> Lihat Sertifikat </a></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Download Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-success fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/downloadhacker/'.@$tim['id_user'])?>"> Download Sertifikat </a></td>
                                                </tr>
                                    </table>
                                    <br><br><br>
                                    <div class="form-group col-xl-10 col-md-11">
                                            <?php echo anchor('panitia/index_sertifpeserta/','<button class="btn btn-sm btn-dark mb-5"></i> Back </button> ')?>    
                                    </div>

                                     </div>
                                </div>
                            </div>
                   
                        </div> 
                        </div>
                      
                   