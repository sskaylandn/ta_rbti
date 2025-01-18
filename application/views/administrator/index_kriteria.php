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
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar Kriteria Penilaian</h4>
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                   
                                    <?php echo anchor('administrator/tambah_kriteria','<button class="btn btn-sm btn-secondary mb-3"> 
                                    <i class="fas fa-plus fa-sm"></i> Tambah Kriteria </button> ')?>
                                    <div class="col mr-12 col-md-12">
                                        <table class="table table-bordered table-stripped table-hover">
                                            <tr>
                                                <th>NO</th>
                                                <th>Kriteria</th>
                                                <th>Keterangan</th>
                                                <th>Bobot Nilai</th>
                                                <th>AKSI</th>
                                            </tr>
                                            <?php 
                                                $no = 1;
                                                foreach ($daftarkriteria as $adm) : ?>
                                                <tr>
                                                    <td width="20px"><?php echo $no++ ?></td>
                                                    <td width="100px"><?php echo $adm->kriteria?></td>
                                                    <td width="400px"><?php echo $adm->ket_kriteria?></td>
                                                    <td width="100px"><?php echo $adm->bobot_kriteria?></td>
                                                    <td width="20px"><?php echo anchor('administrator/edit_kriteria/'.$adm->id_kriteria,'<div class="btn btn=sm btn-secondary">
                                                    <i class="fa fa-edit"></i></div>') ?></td>
                                                </tr>

                                               
                                            <?php endforeach; ?>
                                            </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           