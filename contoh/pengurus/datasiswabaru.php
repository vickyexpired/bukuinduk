<?php require_once('../Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tsiswa (nama_lengkap, nama_panggilan, no_pendaftaran, t4_lahir, tgl_lahir, jk, anakke, kandung, tiri, angkat,
  alamat, kelas, nisn, telp, hp, foto,
  id_ortu, tinggi, berat, id_goldar, badan, telinga,
  mata_kanan_plus, mata_kanan_min, mata_kiri_plus, mata_kiri_min, hidung, penyakit_sering, penyakit_kronis, penyakit_kronis_lama, opname, opname_sakit, opname_sakit_lama, pantangan, hobi, mapel, olahraga, citacita, penghasilan, sekolah, not_sekolah, penanggung, indonesia, daerah, asing, id_tk, id_sd, baca_quran, tempat_belajar, hafalan, informasi) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,
  %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nama_lengkap'], "text"),
                       GetSQLValueString($_POST['nama_panggilan'], "text"),
                       GetSQLValueString($_POST['no_pendaftaran'], "text"),
                       GetSQLValueString($_POST['t4_lahir'], "text"),
                       GetSQLValueString($_POST['tgl_lahir'], "date"),
                       GetSQLValueString($_POST['jk'], "text"),
                       GetSQLValueString($_POST['anakke'], "text"),
                       GetSQLValueString($_POST['kandung'], "text"),
                       GetSQLValueString($_POST['tiri'], "text"),
                       GetSQLValueString($_POST['angkat'], "text"),
                       GetSQLValueString($_POST['alamat'], "text"),
                       GetSQLValueString($_POST['kelas'], "text"),
                       GetSQLValueString($_POST['nisn'], "int"),
                       GetSQLValueString($_POST['telp'], "text"),
                       GetSQLValueString($_POST['hp'], "text"),
                       GetSQLValueString($_POST['foto'], "text"),
                       GetSQLValueString($_POST['id_ortu'], "int"),
                       GetSQLValueString($_POST['tinggi'], "text"),
                       GetSQLValueString($_POST['berat'], "int"),
                       GetSQLValueString($_POST['id_goldar'], "int"),
                       GetSQLValueString($_POST['badan'], "int"),
                       GetSQLValueString($_POST['telinga'], "int"),
                       GetSQLValueString($_POST['mata_kanan_plus'], "int"),
                       GetSQLValueString($_POST['mata_kanan_min'], "int"),
                       GetSQLValueString($_POST['mata_kiri_plus'], "int"),
                       GetSQLValueString($_POST['mata_kiri_min'], "int"),
                       GetSQLValueString($_POST['hidung'], "int"),
                       GetSQLValueString($_POST['penyakit_sering'], "int"),
                       GetSQLValueString($_POST['penyakit_kronis'], "int"),
                       GetSQLValueString($_POST['penyakit_kronis_lama'], "int"),
                       GetSQLValueString($_POST['opname'], "int"),
                       GetSQLValueString($_POST['opname_sakit'], "int"),
                       GetSQLValueString($_POST['opname_sakit_lama'], "int"),
                       GetSQLValueString($_POST['pantangan'], "int"),
                       GetSQLValueString($_POST['hobi'], "text"),
                       GetSQLValueString($_POST['mapel'], "text"),
                       GetSQLValueString($_POST['olahraga'], "text"),
                       GetSQLValueString($_POST['citacita'], "text"),
                       GetSQLValueString($_POST['penghasilan'], "text"),
                       GetSQLValueString($_POST['sekolah'], "int"),
                       GetSQLValueString($_POST['not_sekolah'], "int"),
                       GetSQLValueString($_POST['penanggung'], "text"),
                       GetSQLValueString($_POST['indonesia'], "text"),
                       GetSQLValueString($_POST['daerah'], "text"),
					   GetSQLValueString($_POST['asing'], "text"),
                       GetSQLValueString($_POST['id_tk'], "int"),
                       GetSQLValueString($_POST['id_sd'], "int"),
                       GetSQLValueString($_POST['baca_quran'], "text"),
                       GetSQLValueString($_POST['tempat_belajar'], "text"),
                       GetSQLValueString($_POST['hafalan'], "text"),
                       GetSQLValueString($_POST['informasi'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "datasiswa.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_koneksi, $koneksi);
$query_menuagama = "SELECT * FROM tagama";
$menuagama = mysql_query($query_menuagama, $koneksi) or die(mysql_error());
$row_menuagama = mysql_fetch_assoc($menuagama);
$totalRows_menuagama = mysql_num_rows($menuagama);

mysql_select_db($database_koneksi, $koneksi);
$query_menuedu = "SELECT * FROM tedu";
$menuedu = mysql_query($query_menuedu, $koneksi) or die(mysql_error());
$row_menuedu = mysql_fetch_assoc($menuedu);
$totalRows_menuedu = mysql_num_rows($menuedu);

mysql_select_db($database_koneksi, $koneksi);
$query_menuadmin = "SELECT * FROM login";
$menuadmin = mysql_query($query_menuadmin, $koneksi) or die(mysql_error());
$row_menuadmin = mysql_fetch_assoc($menuadmin);
$totalRows_menuadmin = mysql_num_rows($menuadmin);

mysql_select_db($database_koneksi, $koneksi);
$query_menugoldar = "SELECT * FROM tgoldar";
$menugoldar = mysql_query($query_menugoldar, $koneksi) or die(mysql_error());
$row_menugoldar = mysql_fetch_assoc($menugoldar);
$totalRows_menugoldar = mysql_num_rows($menugoldar);

mysql_select_db($database_koneksi, $koneksi);
$query_menujob = "SELECT * FROM tjob";
$menujob = mysql_query($query_menujob, $koneksi) or die(mysql_error());
$row_menujob = mysql_fetch_assoc($menujob);
$totalRows_menujob = mysql_num_rows($menujob);

mysql_select_db($database_koneksi, $koneksi);
$query_menuortu = "SELECT * FROM tortu";
$menuortu = mysql_query($query_menuortu, $koneksi) or die(mysql_error());
$row_menuortu = mysql_fetch_assoc($menuortu);
$totalRows_menuortu = mysql_num_rows($menuortu);

mysql_select_db($database_koneksi, $koneksi);
$query_menuprestasi = "SELECT * FROM tprestasi";
$menuprestasi = mysql_query($query_menuprestasi, $koneksi) or die(mysql_error());
$row_menuprestasi = mysql_fetch_assoc($menuprestasi);
$totalRows_menuprestasi = mysql_num_rows($menuprestasi);

mysql_select_db($database_koneksi, $koneksi);
$query_menusd = "SELECT * FROM tsd";
$menusd = mysql_query($query_menusd, $koneksi) or die(mysql_error());
$row_menusd = mysql_fetch_assoc($menusd);
$totalRows_menusd = mysql_num_rows($menusd);

mysql_select_db($database_koneksi, $koneksi);
$query_menutk = "SELECT * FROM ttk";
$menutk = mysql_query($query_menutk, $koneksi) or die(mysql_error());
$row_menutk = mysql_fetch_assoc($menutk);
$totalRows_menutk = mysql_num_rows($menutk);


?>

<?php include("header.php"); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
	  
        <?php include("sidebar.php"); ?>
        <?php include("top.php"); ?>
		
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data TK</h3>
              </div>
            </div>
            <div class="clearfix"></div>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" class="form-horizontal form-label-left">
			       <div class="row">
			<div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Diri <small>data diri siswa</small></h2>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                    <br />

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="nama_lengkap" value="Fadhel Muhammad Gintings">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Panggilan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="nama_panggilan" value="Fadhel">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Pendaftaran</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="no_pendaftaran" value="123456789">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="t4_lahir" value="Banjarmasin">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="tgl_lahir" value="13-09-1991">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="jk" value="L">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Anak ke-</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="anakke" value="1">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jlh. Anak Kandung</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="kandung" value="4">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jlh. Anak Tiri</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="tiri" value="5">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jlh. Anak Angkat</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="angkat" value="1">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Asal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="alamat" value="Jalan Rawa Cangkuk Bumi No.88 Sukaramai Medan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="kelas" value="3 TS 1">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NISN</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="nisn" value="123456789">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="telp" value="021-1234567890">
                        </div>
                      </div>					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">HP</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="hp" value="081234567890">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="foto" value="path">
                        </div>
                      </div>

					  <div class="x_title">
						<h2>Data Fisik <small>data diri siswa</small></h2>
						<div class="clearfix"></div>
					  </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tinggi Badan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="tinggi" value="185">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Berat Badan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="berat" value="70">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan Darah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
							<select class="span9 select2_single form-control" name="id_goldar">
                  						<?php 
                  				do {  
                  				?>
                  						<option value="<?php echo $row_menugoldar['id_goldar']?>" ><?php echo $row_menugoldar['goldar']?></option>
                  						<?php
                  				} while ($row_menugoldar = mysql_fetch_assoc($menugoldar));
                  				?>
							</select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Badan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="badan" value="Kekar">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telinga</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="telinga" value="0">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Kanan +</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="mata_kanan_plus" value="5.50">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Kanan -</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="mata_kanan_min" value="5.50">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Kiri +</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="mata_kiri_plus" value="5.50">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Kiri -</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="mata_kiri_min" value="5.50">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hidung</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="hidung" value="5.50">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit yang sering diderita</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="penyakit_sering" value="Jantung Panuan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit Kronis yang pernah diderita</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="penyakit_kronis" value="Kesemutan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lama Penyakit Kronis</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="penyakit_kronis_lama" value="1 tahun">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Opname</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="opname" value="Ya">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Opaname karena Sakit</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="opname_sakit" value="Malarindu">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lama Opname</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="opname_sakit_lama" value="1 minggu">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pantangan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="pantangan" value="Tidak boleh jomblo">
                        </div>
                      </div>

					  <input type="submit" value="Tambahkan" class="btn btn-success" />
					  <input type="hidden" name="MM_insert" value="form1" />
                  </div>
                </div>
			</div>
			  
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Orang Tua</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
							<select class="span9 select2_single form-control" name="id_ortu">
                  						<?php 
                  				do {  
                  				?>
                  						<option value="<?php echo $row_menuortu['id_ortu']?>" ><?php echo $row_menuortu['nama_a']?></option>
                  						<?php
                  				} while ($row_menuortu = mysql_fetch_assoc($menuortu));
                  				?>
							</select>
                        </div>
                      </div>
				  </div>
			  </div>
			  </div>
			
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Minat & Bakat</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hobi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="hobi" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mapelfav</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="mapel" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Olahraga</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="olahraga" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cita-cita</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="citacita" value="111">
                        </div>
                      </div>
				  </div>
			  </div> 
			</div>		
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pendukung</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan Orang Tua</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="penghasilan" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggungan yang Sekolah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="sekolah" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggungan tidak Sekolah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="not_sekolah" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penanggung Biaya Sekolah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="penanggung" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bahasa Indonesia</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="indonesia" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bahasa Daerah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="daerah" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bahasa Asing</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="asing" value="111">
                        </div>
                      </div>
				  </div>
			  </div> 
			</div>	
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Riwayat Pendidikan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Asal TK</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="span9 select2_single form-control" name="id_tk">
                  						<?php 
                  				do {  
                  				?>
                  						<option value="<?php echo $row_menutk['id_tk']?>" ><?php echo $row_menutk['nama_tk']?></option>
                  						<?php
                  				} while ($row_menutk = mysql_fetch_assoc($menutk));
                  				?>
                  			   </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Asal SD</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="span9 select2_single form-control" name="id_sd">
                  						<?php 
                  				do {  
                  				?>
                  						<option value="<?php echo $row_menusd['id_sd']?>" ><?php echo $row_menusd['nama_sd']?></option>
                  						<?php
                  				} while ($row_menusd = mysql_fetch_assoc($menusd));
                  				?>
                  			   </select>
                        </div>
                      </div>
				  </div>
			  </div> 
			</div>	
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kemampuan Al-Qur'an</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kemampuan Baca Alquran</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="baca_quran" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Belajar Alquran</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="tempat_belajar" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Hafalan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="hafalan" value="111">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Informasi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="data dummy" name="informasi" value="111">
                        </div>
                      </div>
					  <input type="submit" value="Tambahkan" class="btn btn-success" />
					  <input type="hidden" name="MM_insert" value="form1" />
				  </div>
			  </div> 
			</div>		
          </div>
                    </form>
        </div>
        <!-- /page content -->
	  

    </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
	
    <?php include("../library/inc/footer.php") ?>
<?php
mysql_free_result($menuagama);

mysql_free_result($menuedu);

mysql_free_result($menuadmin);

mysql_free_result($menugoldar);
?>
