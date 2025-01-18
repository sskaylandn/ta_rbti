<!DOCTYPE html>
        <html lang="en"><head>
        <title><?=$title?></title>
        <style>
            
            .text_content{
                text-indent: 1px;
                padding-left: 180px;
                margin-left: 250px;
                text-align : center;
            }
            .text_content1{
                text-indent: 50px;
                padding-left: 15px;
                padding-right: 25px;
                text-align : justify;
            }
 
            /* .text_content2{
                text-indent: 30px;
                padding-left: 75px;
                padding-right: 80px;
                text-align : justify;
                
                
            } */
            
            /* .text_content3{
                display: inline;
                max-width: 100px;
                text-indent: 50px;
                padding-left: 75px;
                padding-right: 80px;
                margin-left: 75px;
                margin-right: 80px;
                text-align : justify;
            } */
            
            p {
                padding-left: 250px;
                margin-left: 250px;
               
                text-align : center;
            }
            
            ol li {
                margin-left: 75px;
                margin-right: 80px;
                text-align : justify;

            }

            ul li {
                margin-left: 75px;
                margin-right: 80px;
                text-align : justify;

            }

            .container{
                max-width: 700px;
            }

            img {
                width: 270px;
                margin-left:220px;
                margin-right:100px;
            }

            img.logo {
                width: 50px;
            }

            .text-center {
                text-align: center;
            }

            @font-face {
                font-family: 'Elegance';
                font-weight: normal;
                font-style: normal;
                font-variant: normal;
                src: url("http://eclecticgeek.com/dompdf/fonts/Elegance.ttf") format("truetype");
            }
            body {
                font-family: Elegance, sans-serif;
            }

            .page_break { page-break-before: always; }

           
        </style>


        <head>
        <style type="text/css">
            html { margin: 0 }
            <?php $no=1; foreach($gettemplatepanitia as $g) :  ?>
            body { background-image: url(<?php echo 'assets/files/'.$g->template?>); 
                position: absolute;
            top: 20;
            left: 0;
            height: 100%;
            width: 100%;   
            background-position: center top;
            background-repeat: no-repeat;
            z-index: -1;}
            <?php endforeach; ?>
        </style>
        
        <center>
        <br><br>
        <h3>ENTITAS MAHASISWA D3 TEKNIK INFORMATIKA</h3>
        <h3>SEKOLAH VOKASI</h3>
        <h3>UNIVERSITAS SEBELAS MARET</h3>
        </center>
        </head>

        <body>
       
        <div class="container">
        <?php $no=1; foreach($cetakpanitia as $c) :  ?>
        <center>
            <h2 class="text_content">SERTIFIKAT</h2>
            <p class="text_content">Diberikan Kepada :</p>
            <h2 class="text_content"><?php echo strtoupper ($c->nama_panitia); ?></h2>
            <p class="text_content"> sebagai </p>
            <h2 class="text_content">PANITIA</h2>
            <p class="text_content"> Dalam Kegiatan </p>
            <?php endforeach; ?>
            <?php $no=1; foreach($getlomba as $c) :  ?>
                <p class="text_content"> <?php echo strtoupper ($c->nama_lomba); ?> </p>
            <?php endforeach; ?>
        </center><br><br>
        
        
        </div>
        </body>

        </html>
      