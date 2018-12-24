<!DOCTYPE HTML>
<html>

<head>
  <title>Keripik Pisang</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Banana<span class="logo_colour">Chips</span></a></h1>
          <h2>Renyah. Gurih. Murah Meriah.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
           <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="example.html">Examples</a></li>
          <li><a href="kriteria2.php">Kriteria</a></li>
          <li><a href="alternatif2.php">Alternatif</a></li>
		   <li><a href="bobot2.php">Bobot</a></li>
		  <li><a href="nilai2.php">Nilai</a></li>
          <li><a href="hasil.php">Hasil</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Latest News</h3>
            <h4>New Website Launched</h4>
            <h5>February 1st, 2014</h5>
            <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Normalisasi</h1>
		<?php
		include ("koneksi.php");
		?>
<table border="1" cellpadding="5" cellspacing="0">
     

      
 
    <?php
			$conn = mysqli_connect($servername, $username, $password, $database);

			echo "
			<tr>
			<th>  </th>
			
			";
			$que= mysqli_query($conn,"SELECT * FROM tbl_kriteria");
			while ($data=mysqli_fetch_array($que)) {
				echo "
				<td>".$data['nm_kriteria']."</td>
				";
			}
				
				echo "</tr>";
				
				
				
			echo "
			<tr>
			<th> Nama Alternatif </th>
			
			";
			$que= mysqli_query($conn,"SELECT * FROM tbl_bobot");
			while ($data=mysqli_fetch_array($que)) {
				echo "
				<td>".$data['bobot']."%</td>
				";
			}
				
				echo "</tr>";
				
				
				
			
			$que= mysqli_query($conn,"SELECT * FROM tbl_alternatif");
			while ($data=mysqli_fetch_array($que)) {
				echo "
				<tr>
				<td>".$data['nm_alternatif']."</td>";
				$tmp=$data['id_alt'];
				
				$quer= mysqli_query($conn,"SELECT * FROM tbl_nilai where tbl_nilai.id_alt='$tmp'");
				while ($datar=mysqli_fetch_array($quer)) {
					
									$krit=$datar['id_bobot'];
									$ques= mysqli_query($conn, "SELECT MAX(nilai) AS oke FROM  tbl_nilai WHERE id_bobot='$krit'");
									$datas=mysqli_fetch_array($ques);
									$hasil=$datar['nilai']/$datas['oke'];
					
				echo "
				<td>".round($hasil,2)."</td>
				";
				}
				
				echo "
				</tr>
				";
			}
				
			
    ?>

</table>
 <h1>Perhitungan</h1>
		<?php
		include ("koneksi.php");
		?>
<table border="1" cellpadding="5" cellspacing="0">
     

      
 
    <?php
			$conn = mysqli_connect($servername, $username, $password, $database);

			echo "
			<tr>
			<th>  </th>
			
			";
			$que= mysqli_query($conn,"SELECT * FROM tbl_kriteria");
			while ($data=mysqli_fetch_array($que)) {
				echo "
				<td>".$data['nm_kriteria']."</td>
				
				";
			}
				echo "<td>hasil</td>";
				echo "</tr>";
				
						
				
			echo "
			<tr>
			<th> Nama Alternatif </th>
			
			";
			$que= mysqli_query($conn,"SELECT * FROM tbl_bobot");
			while ($data=mysqli_fetch_array($que)) {
				echo "
				<td>".$data['bobot']."%</td>
				";
			}
				echo"<td>-</td>";
				echo "</tr>";
				
				$tampung=0;
				
			
			$que= mysqli_query($conn,"SELECT * FROM tbl_alternatif");
			while ($data=mysqli_fetch_array($que)) {
				echo "
				<tr>
				<td>".$data['nm_alternatif']."</td>";
				$tmp=$data['id_alt'];
				
				$quer= mysqli_query($conn,"SELECT * FROM tbl_nilai where tbl_nilai.id_alt='$tmp'");
				while ($datar=mysqli_fetch_array($quer)) {
									$bbt=$datar['id_bobot'];
									$querr= mysqli_query($conn,"SELECT * FROM tbl_bobot where id_bobot='$bbt'");
									$datasr=mysqli_fetch_array($querr);
									$krit=$datar['id_bobot'];
									$ques= mysqli_query($conn, "SELECT MAX(nilai) AS oke FROM  tbl_nilai WHERE id_bobot='$krit'");
									$datas=mysqli_fetch_array($ques);
									$hasil=$datar['nilai']/$datas['oke']*$datasr['bobot'];
									$tampung+=$hasil;
									$akhir=array($tampung);
									
					
				echo "
				<td>".round($hasil,2)."</td>
				";
				}
				echo "<td>".round($tampung,2)."</td>";
				
				echo "
				</tr>
				";
			}
			echo"<td>Perankingan</td>";
			echo"<td></td>";
			echo"<td></td>";
			echo"<td></td>";
			echo"<td></td>";
			echo"<td>".round(max($akhir),2)."</td>";
				
			
    ?>

</table>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_horizon | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
</body>
</html>
