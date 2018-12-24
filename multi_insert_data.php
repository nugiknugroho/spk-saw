<?php 

include "conn.php";

  for($i=0;$i<$_GET['jumlah'];$i++) {

            $nama = $_GET['nama_kriteria'.$i];
            $nilai = $_GET['nilai'.$i];

            $query ="INSERT INTO tbl_uji(id_kriteria, nilai) VALUES('$nama', '$nilai')";

        $koneksi->query($query);

    }
        $koneksi->close();
        echo "<script>alert('Data Berhasil Ditambah');
            window.location.href='datauji.php'</script>";


 ?>