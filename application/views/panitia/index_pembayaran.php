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
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar Pembayaran</h4>
                                       
                                        </div>
                                   
                                    </div>
                                    <br>
                                    <ul class="nav nav-tabs">
                                     
                                     <li class="nav-item">
                                         <a class="nav-link active" href="#bermasalah" role="tab" data-toggle="tab">Belum Verifikasi</a>
                                     </li>
                                   
                                     <li class=" nav-item">
                                         <a class="nav-link" href="#allbayar" role="tab" data-toggle="tab">Semua Pembayaran</a>
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
                                                         <th>NO</th>
                                                         <th>E-Mail Peserta</th>
                                                         <th>Bank</th>
                                                         <th>Tanggal Transfer</th>
                                                         <th>Nominal</th>
                                                         <th>Detail</th>
                                                         <th>Aksi</th>
                                                         <th>Aksi</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     <?php 
                                                         $no = 1;
                                                         foreach ($daftarbayar as $adm) : ?>
                                                         <tr>
                                                             <td width="20px"><?php echo $no++ ?></td>
                                                             <td width="100px"><?php echo $adm->uname_user?></td>
                                                             <td width="100px"><?php echo $adm->rek_transfer?></td>
                                                             <td width="200px"><?php echo $adm->tanggal_bayar?></td>
                                                             <td width="200px"><?php echo $adm->jumlah_bayar?></td>
                                                             <td width="20px"><?php echo anchor('panitia/detailbayar/'.$adm->id_bayar,'<div class="badge badge-primary">
                                                             <i class=""> Bukti Pembayaran</i></div>') ?></td>
                                                             <td width="20px"><?php echo anchor('panitia/verifberhasil/'.$adm->id_user,'<div class="badge badge-success">
                                                             <i class="fa fa-check"> Berhasil</i></div>') ?></td>
                                                             <td width="20px"><?php echo anchor('panitia/verifbermasalah/'.$adm->id_user,'<div class="badge badge-danger">
                                                             <i class="fa fa-exclamation"> Bermasalah </i></div>') ?></td>
                                                            
                                                         </tr>
                                                         <?php endforeach; ?>
                                                     </tbody>
                                                 </table>

                                             </div>
                                         </div>
                                     </div>


                                     <div role="tabpanel" class="tab-pane" id="allbayar">
                                         <div class="form-group">
                                             <div class="table-responsive">
                                                 <table class="table table-condensed" id="dataTable3">
                                                     <thead>
                                                     <tr>
                                                         <th>NO</th>
                                                         <th>E-Mail Peserta</th>
                                                         <th>Bank Transfer</th>
                                                         <th>Tanggal Transfer</th>
                                                         <th>Status Pembayaran</th>
                                                         <th>Detail</th>
                                                         
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     <?php 
                                                         $no = 1;
                                                         foreach ($allbayar as $adm) : ?>
                                                         <tr> 
                                                             <td width="20px"><?php echo $no++ ?></td>
                                                             <td width="100px"><?php echo $adm->uname_user?></td>
                                                             <td width="100px"><?php echo $adm->rek_transfer?></td>
                                                             <td width="300px"><?php echo $adm->tanggal_bayar?></td>
                                                             <td width="300px">
                                                             <!-- <?php if($adm->status_bayar=="Berhasil"){?>
                                                                    <spann class="badge badge-succsess fa-times"> Pembayaran Berhasil </spann> 
                                                                <?php} else if($adm->status_bayar=="Bermasalah"){?>
                                                                    <spann class="badge badge-danger fa fa-check"> Pembayaran Bermasalah </spann> 
                                                                    <?php } else{?>
                                                                    <spann class="badge badge-warning fa fa-check"> Belum Verifikasi </spann> 
                                                                    <?php }?>
                                                                     -->
                                                                    <?php echo $adm->status_bayar?></td>
                                                             <td width="20px"><?php echo anchor('panitia/detailbayar/'.$adm->id_bayar,'<div class="badge badge-primary">
                                                             <i class=""> Bukti Pembayaran</i></div>') ?></td>
                                                        
                                                         </tr>
                                                         <?php endforeach; ?>
                                                     </tbody>
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
                <script>
                    $(document).ready(function() {
                        $('#dataTable3').DataTable();
                    });
                </script>

                <script>
                    lightbox.option({
                    'resizeDuration': 200,
                    'wrapAround': true
                    })
                </script>


                      

               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           