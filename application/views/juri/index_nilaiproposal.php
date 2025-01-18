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
                        <h4 class="m-0 font-weight-bold text-dark">Halaman Penilaian Proposal </h4>
                        <br>
                        <div class="col-md-11 mr-3 ml-3">
                            Dalam halaman ini, juri dapat menilai proposal yang sudah difinalisasi oleh peserta sesuai kategori yang ada. Poin nilai sendiri memiliki nilai terendah 0 dan nilai tertinggi 100 pada setiap kategorinya.
                        </div>

                    </div>


                </div>
                <br>


            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <h4 class="m-0 font-weight-bold text-dark">Data Proposal </h4>
                        <!-- <?= print_r($proposal['id_proposal']) ?> -->
                        <br>
                        <div class="col-md-11 mr-2">
                            <!--Berikut merupakan data proposal yang sudah difinalisasi oleh peserta. Menu "Lihat Proposal" merupakan menu untuk melihat data proposal yang masuk. Menu "Lihat Presentasi Singkat" merupakan menu untuk melihat presentasi singkat yang dikirimkan oleh peserta. Menu "Download Proposal" merupakan menu untuk mendownload file proposal. Menu "Download file presentasi" merupakan menu untuk mendownload file presentasi.-->
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Detail Proposal : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                                <table>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> ID Proposal</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$proposal['id_proposal']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Judul Proposal</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$proposal['judul_proposal']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Tema Proposal</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$proposal['tema_proposal']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Nama Perusahaan Start-Up</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$startup['nama_su']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Nama Aplikasi Start-Up
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$reviewproduk['nama_solusi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Deskripsi Aplikasi Start-Up </h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$reviewproduk['deskripsi_solusi']; ?></td>
                                    </tr>

                                </table>
                                <br>
                                <div class="col-md-7 mr-4">
                                    <a class="btn btn-dark fa fa-eye" target="_blank" href="<?php echo base_url('proposal/cetakProposal/' . @$proposal['id_proposal']) ?>"> Lihat Proposal </a><br><br>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Presentasi singkat peserta : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                                <table>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Presentasi singkat</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$pitchdesk['uraian_singkat']; ?> </td>
                                    </tr>

                                </table>
                                <br>
                                <div class="col-md-7 mr-4">
                                    <a class="btn btn-dark fa fa-eye" type='application/pdf' href="<?= base_url() . 'assets/files/' . $pitchdesk['file_pitchd']; ?>" target="_blank"> Lihat File PPT Presentasi</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-file fa-2x text-gray-300"></i>
                    </div>
                </div>
                <br>


            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <h4 class="m-0 font-weight-bold text-dark">Penilaian Proposal </h4>
                        <!-- <?= print_r($id_proposal); ?> --><br>
                        <div class="p-3 mb-2 bg-warning text-white">
                         Nilai hanya dapat diinput 1x, pastikan nilai yang disubmit sudah sesuai! 
                          <span aria-hidden="true"></span>
                    </div>
                        <form id="formpenilaian" method="post" action="<?= base_url('Juri/input_nilai/') ?>">
                            <input type="hidden" name="id_proposal" value="<?= @$proposal['id_proposal']; ?>">
                            <br>
                            <div class="col-md-11 mr-2">
                                <div class="col-md-11  ml-5">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>KRITERIA PENILAIAN</th>
                                                <th>POIN (0-100)</th> 
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        foreach ($kriteria as $adm) : ?>
                                            <tbody>
                                                <tr>
                                                    <td width="600px"><?php echo $adm->kriteria ?><small><br>(<?php echo $adm->ket_kriteria ?>)</small></td>
                                                    <td width="150px"> <input type="number" min="0" max="100" name=<?= "nilai[$adm->id_kriteria]" ?> class="form-control col-md-12" value=""></td>
                                                    <!-- <td width="100px"> <input type="hidden"  name="" class="form-control col-md-12" value="" readonly></td> -->
                                                </tr>
                                            </tbody>
                                        <?php endforeach; ?>


                                    </table>
                                </div>
                            </div>
                            <div class="col-md-8 ml-5 ">
                                <button type="submit" class="btn btn-success ">
                                    Submit Nilai
                                </button>
                            </div>

                    </div>
                    <br>


                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->