<?php 

include 'conn.php';

 ?>

<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPK DISTRO</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/gif" href="images/flag/es.png">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  


</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><h2>SPK DISTRO</h2></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Semua Data</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Alternatif</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-table"></i><a href="v_alternatif.php">Data Alternatif</a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Kriteria</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="v_kriteria.php">Data Kriteria</a></li>                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Bobot</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="v_bobot.php">Data Bobot</a></li>                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Nilai</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="v_nilai.php">Data Nilai</a></li>
                            <li><i class="fa fa-table"></i><a href="v_nilaiMatriks.php">Semua Data</a></li>
                            <li><i class="fa fa-table"></i><a href="v_nilaiwp.php">Nilai Data Metode WP</a></li>                        
                            </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Uji</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-table"></i><a href="datauji.php">Data Uji</a></li>
                            <li><i class="menu-icon fa fa-table"></i><a href="ujiuas.php">Data Hasil Uji</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
               
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/gzmn.jpg" alt="User Avatar">
                        </a>

          
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Semua Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Semua Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Alternatif</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID</th>
                                  <th scope="col">Nama Alternatif</th>
                                  <th scope="col">Keterangan</th>
                              </tr>
                          </thead>
                        <?php 

                            $query = mysqli_query($koneksi, "SELECT * FROM tabel_alternatif");
                            $no = 0 ;
                            foreach ($query as $data) {
    

                            $no++;

                        ?>
                          <tbody>
                            <tr>
                                <th><?=$no?></th>
                                <th><?=$data['id_alt']?></th>
                                <th><?=$data['nama_alt']?></th>
                                <th><?=$data['keterangan']?></th>
                          </tr>

                        <?php 

                         }

                         ?>
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Kriteria</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID</th>
                                  <th scope="col">Nama Kriteria</th>
                                  <th scope="col">Keterangan</th>
                              </tr>
                          </thead>
                        <?php 

                            $query = mysqli_query($koneksi, "SELECT * FROM tabel_kriteria");
                            $no = 0 ;
                            foreach ($query as $data) {
    

                            $no++;

                        ?>
                          <tbody>
                            <tr>
                                <th><?=$no?></th>
                                <th><?=$data['id_kriteria']?></th>
                                <th><?=$data['nama_kriteria']?></th>
                                <th><?=$data['keterangan']?></th>
                          </tr>

                        <?php 

                         }

                         ?>
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Bobot</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID</th>
                                  <th scope="col">Nama Kriteria</th>
                                  <th scope="col">Nilai Bobot (%)</th>
                              </tr>
                          </thead>
                        <?php 

                            $query = mysqli_query($koneksi, "SELECT id_bobot, nama_kriteria, bobot FROM bobot, tabel_kriteria WHERE tabel_kriteria.id_kriteria = bobot.id_kriteria");
                            $no = 0 ;
                            foreach ($query as $data) {
    

                            $no++;

                        ?>
                          <tbody>
                            <tr>
                                <th><?=$no?></th>
                                <th><?=$data['id_bobot']?></th>
                                <th><?=$data['nama_kriteria']?></th>
                                <th><?=$data['bobot']?></th>
                          </tr>

                        <?php 

                         }

                         ?>
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>

                <div class="container">  
                   <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Nilai Data</strong>
                        </div>
                        <div class="card-body"> 
                            <table class="table">
                              <thead>
                <tr>
                <th>No</th>
                <th>Nama Alternatif</th>

                    <?php 

                        $dataKriteria = "SELECT * FROM bobot_kriteria ORDER BY id_kriteria ASC";
                        $sqlKriteria = mysqli_query($koneksi,$dataKriteria);
                        $no = 0;
                        
                            while ($dataKriteria2 = mysqli_fetch_array($sqlKriteria)) {
                                    echo "<th>".$dataKriteria2['nama_kriteria']."</th>";

                                }

                     ?>
                </tr>

            </thead>
            <tbody id="list-itens">
                
                <?php 

                    $data2 = "SELECT * FROM tabel_alternatif";
                    $sql2 = mysqli_query($koneksi,$data2);  
                    

                    while($dataAkhir = mysqli_fetch_array($sql2)){
                        $no++;
                        echo "<tr><th>".$no."</th><th>".$dataAkhir['nama_alt']."</th>";
                        $id_alternatif = $dataAkhir['id_alt'];  
                        $queryBaru = "SELECT `tabel_alternatif`.`nama_alt`, `bobot_kriteria`.`id_bobot`, `nilai`.`nilai` 
                                      FROM `bobot_kriteria` 
                                      LEFT JOIN `nilai` 
                                      ON `nilai`.`id_bobot` = `bobot_kriteria`.`id_bobot` 
                                      LEFT JOIN `tabel_alternatif` 
                                      ON `nilai`.`id_alt` = `tabel_alternatif`.`id_alt` 
                                      WHERE tabel_alternatif.id_alt = '$id_alternatif' 
                                      ORDER BY id_kriteria ASC";
                            $sqlBaru = mysqli_query($koneksi,$queryBaru);

                        for($i=0; $i <mysqli_num_rows($sqlKriteria); $i++){
                            
                            $datafinal = mysqli_fetch_array($sqlBaru);

                                echo "<th>".$datafinal['nilai']."</th>";
                            
                        }
                    echo "</tr>";

                }

                 ?>

            </tbody>
                  </table>
                        </div>
                    </div>


<!--NORMALISASI-->

                    <div class="card">  
                        <div class="card-header">
                            <strong class="card-title">Tabel Nilai Normalisasi</strong>
                        </div>
                        <div class="card-body"> 
                            <table class="table">
                              <thead>
                <tr>
                <th>No</th>
                <th>Nama Alternatif</th>

                    <?php 

                        $dataKriteria = "SELECT * FROM bobot_kriteria ORDER BY id_kriteria ASC";
                        $sqlKriteria = mysqli_query($koneksi,$dataKriteria);
                        $no = 0;
                        
                            while ($dataKriteria2 = mysqli_fetch_array($sqlKriteria)) {
                                    echo "<th>".$dataKriteria2['nama_kriteria']."</th>";

                                }

                     ?>
                </tr>

            </thead>
            <tbody id="list-itens">
                
                <?php 

                    $data2 = "SELECT * FROM tabel_alternatif";
                    $sql2 = mysqli_query($koneksi,$data2);  
                    

                    while ($dataAkhir = mysqli_fetch_array($sql2)){
                        $no++;
                        echo "<tr><th>".$no."</th><th>".$dataAkhir['nama_alt']."</th>";
                        $id_alternatif = $dataAkhir['id_alt']; 

                        $quer= mysqli_query($koneksi,"SELECT `tabel_alternatif`.`nama_alt`, `bobot_kriteria`.`id_bobot`, 
                                       `nilai`.`nilai` FROM `bobot_kriteria` 
                                       LEFT JOIN `nilai` 
                                       ON `nilai`.`id_bobot` = `bobot_kriteria`.`id_bobot` 
                                       LEFT JOIN `tabel_alternatif` 
                                       ON `nilai`.`id_alt` = `tabel_alternatif`.`id_alt` 
                                        WHERE tabel_alternatif.id_alt = '$id_alternatif' ORDER BY id_kriteria ASC");

                    while ($datar=mysqli_fetch_array($quer)) {
                    
                                    $krit=$datar['id_bobot'];
                                    $ques= mysqli_query($koneksi, "SELECT MAX(nilai) AS max FROM  nilai WHERE id_bobot='$krit'");
                                    $datas=mysqli_fetch_array($ques);
                                    $hasil=$datar['nilai']/$datas['max'];

                    
                echo "<th>".round($hasil,2)."</th>";
                }


                echo "</tr>";

                }

                 ?>

            </tbody>
                  </table>
                        </div>
                    </div>

 <!--TEST HASIL HITUNG PENJUMLAHAN-->
 <div class="card">  
                        <div class="card-header">
                            <strong class="card-title">Tabel Perangkingan Data</strong>
                        </div>
                        <div class="card-body"> 
                            <table class="table">
                              <thead>
                <tr>
                <th>No</th>
                <th>Nama Alternatif</th>

                    <?php 

                        $dataKriteria = "SELECT * FROM bobot_kriteria ORDER BY id_kriteria ASC";
                        $sqlKriteria = mysqli_query($koneksi,$dataKriteria);
                        $no = 0;
                        
                            while ($dataKriteria2 = mysqli_fetch_array($sqlKriteria)) {
                                    echo "<th>".$dataKriteria2['nama_kriteria']."</th>";

                                }

                     ?>
                     <th>TOTAL</th>
                </tr>

            </thead>
            <tbody id="list-itens">
                
                <?php 

                    $data2 = "SELECT * FROM tabel_alternatif";
                    $sql2 = mysqli_query($koneksi,$data2);  
                    

                    while ($dataAkhir = mysqli_fetch_array($sql2)){
                        $no++;
                        echo "<tr><th>".$no."</th><th>".$dataAkhir['nama_alt']."</th>";
                        $id_alternatif = $dataAkhir['id_alt']; 

                        $quer= mysqli_query($koneksi,"SELECT `tabel_alternatif`.`nama_alt`, `bobot_kriteria`.`id_bobot`, 
                                       `nilai`.`nilai` FROM `bobot_kriteria` 
                                       LEFT JOIN `nilai` 
                                       ON `nilai`.`id_bobot` = `bobot_kriteria`.`id_bobot` 
                                       LEFT JOIN `tabel_alternatif` 
                                       ON `nilai`.`id_alt` = `tabel_alternatif`.`id_alt` 
                                       WHERE tabel_alternatif.id_alt = '$id_alternatif' ORDER BY id_kriteria ASC");
                        
                    $total = 0;
                    while ($datar=mysqli_fetch_array($quer)) {
                                    
                                    $bbt=$datar['id_bobot'];
                                    $querr= mysqli_query($koneksi,"SELECT * FROM bobot where id_bobot='$bbt'");
                                    $datasr=mysqli_fetch_array($querr);

                                    $krit=$datar['id_bobot'];
                                    $ques= mysqli_query($koneksi, "SELECT MAX(nilai) AS max FROM  nilai WHERE id_bobot='$krit'");
                                    $datas=mysqli_fetch_array($ques);
                                    $hasil=($datar['nilai'] / $datas['max'] * $datasr['bobot']) /100;
                                    
                                    $total += $hasil; 
                                    $hasilMax = array($total);

                echo "<th>".round($hasil,2)."</th>";
                }
                echo "<th>".round($total,2)."</th>";
                echo "</tr>";

                }

                echo "</tr>";

                echo"<th></th>";
                echo"<td></td>";
                echo"<td></td>";
                echo"<td></td>";
                echo"<td></td>";
                echo"<th></th>";

                echo "</tr>";

                echo"<th>Hasil Perankingan Nilai Data :</th>";
                echo"<td></td>";
                echo"<td></td>";
                echo"<td></td>";
                echo"<td></td>";
                echo"<th>0.99</th>";
                echo "</tr>";
           
                 ?>

            </tbody>
                  </table>
                        </div>
                    </div>                   

                </div>
                </div>
            </div>   
        </div>

 <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
