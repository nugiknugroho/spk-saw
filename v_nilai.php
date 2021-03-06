
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
                            <li><i class="fa fa-table"></i><a href="cobasawview.php">Semua Data Metode SAW</a></li>
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
                        <h1>Nilai</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Nilai</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-sm-12">
            
            </div>
            <div class="container">
            <div class="pull-right">
    
         
           <div class="col-md-12 text-right">
        <a href="m_nilai.php" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-plus"></i> Tambah</a>
    </div>
            
        </div>
                                                                                      

 <div class="table-responsive">          
 <table class="table table-bordered table-striped">
            <thead>
                <tr class="bg-info ">
                <th>No</th>
                <th>--ALTERNATIF--</th>

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
                        $queryBaru = "SELECT `tabel_alternatif`.`nama_alt`, 
                                      `bobot_kriteria`.`id_bobot`, `nilai`.`nilai` 
                                       FROM `bobot_kriteria` LEFT JOIN `nilai` ON `nilai`.`id_bobot` 
                                       = `bobot_kriteria`.`id_bobot` LEFT JOIN `tabel_alternatif` ON `nilai`.`id_alt` 
                                       = `tabel_alternatif`.`id_alt` WHERE tabel_alternatif.id_alt = '$id_alternatif' 
                                       ORDER BY id_kriteria ASC";
                            $sqlBaru = mysqli_query($koneksi,$queryBaru);

                        for($i=0; $i <mysqli_num_rows($sqlKriteria); $i++){
                            
                            $datafinal = mysqli_fetch_array($sqlBaru);

                                echo "<th>".$datafinal['nilai']."</th>";

                        }
                        // $jumlah = ($datafinal['nilai']+$datafinal['nilai']+$datafinal['nilai']+$datafinal['nilai']);
                        // echo "<th>".$jumlah."</th>";
                    echo "</tr>";

                }

                 ?>

            </tbody>    
            
        </table>
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
