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
                                        <h4 class="m-0 font-weight-bold text-dark">Sertifikat Panitia</h4>
                                       
                                        </div>
                                   
                                    </div>
                                    <br>
                                    <ul class="nav nav-tabs">
                                     
                                     <li class="nav-item">
                                         <a class="nav-link active" href="#bermasalah" role="tab" data-toggle="tab">Sertifikat All Panitia</a>
                                     </li>
                                     <li class=" nav-item">
                                         <a class="nav-link" href="#berhasil" role="tab" data-toggle="tab">Sertifikat Saya</a>
                                     </li>
                                 </ul>
                                 </br>
                                 </br>
                                 <div class="tab-content">
                                     
                                     <div role="tabpanel" class="tab-pane active" id="bermasalah">
                                         <div class="form-group">
                                             <div class="table-responsive">
                                                 <table class="table table-condensed" id="dataTable">
                                                     <thead>
                                                         <tr>
                                                            <th style="text-align:center">NO</th>
                                                            <th style="text-align:center">Nama Panitia</th>
                                                            <th style="text-align:center">Sertifikat</th>
                                                            <th style="text-align:center">Download</th>
                                                            
                                                        </tr>
                                                     </thead>
                                                     <tbody>
                                                       
                                                     <?php 
                                                            $no = 1;
                                                            foreach ($panitia as $adm) : ?>
                                                            <tr>
                                                             <td width="20px" style="text-align:center"><?php echo $no++ ?></td>
                                                             <td width="300px" style="text-align:center"><?php echo $adm->nama_panitia?></td>
                                                             <td style="text-align:center" width="20px"> <a class="badge badge-primary fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/lihatpanitia/'.$adm->id_panitia) ?>"> Lihat Sertifikat </a></td>
                                                             <td style="text-align:center" width="20px"><?php echo anchor('sertifikat/downloadpanitia/'.$adm->id_panitia,'<div class="badge badge-success">
                                                             <i class="fa fa-download"> Download </i></div>') ?></td>   
                                                            </tr>
                                                        <?php endforeach; ?>
                                                     </tbody>
                                                 </table>
 
                                             </div>
                                         </div>
                                     </div>

                                     <div role="tabpanel" class="tab-pane" id="berhasil">
                                         <div class="form-group">
                                             <div class="table-responsive">
                                             <table>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Nama Lengkap
                                                    </td>
                                                    <td width="20px"> : </td>
                                                      <?php $no = 1;
                                                     foreach ($satupanitia as $adm) : ?>
                                                    <td><?php echo $adm->nama_panitia?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Lihat Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td><a class="badge badge-primary fa fa-eye" target="_blank" href="<?php echo base_url('sertifikat/lihatpanitia/'.$adm->id_panitia) ?>"> Lihat Sertifikat </a></td>
                                                </tr>
                                                <tr>
                                                    <td width="250px">
                                                        <h6 class="m-0 font-weight-bold text-dark"> Download Sertifikat </h6>
                                                    </td>
                                                    <td width="20px"> : </td>
                                                    <td> <?php echo anchor('sertifikat/downloadpanitia/'.$adm->id_panitia,'<div class="badge badge-success">
                                                    <i class="fa fa-download"> Download </i></div>') ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </table>
                                             </div>
                                         </div>
                                     </div>
                           

                     
                 </div>

                   

                    <script>
                    $(document).ready(function() {
                        $('#dataTable3').DataTable();
                    });
                </script>
                <script>
                    $(document).ready(function() {
                        $('#dataTable2').DataTable();
                    });
                </script>

                      

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           