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
  $insertSQL = sprintf("INSERT INTO tagama (nama_agama) VALUES (%s)",
                       GetSQLValueString($_POST['nama_agama'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "#";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$maxRows_tampil = 10;
$pageNum_tampil = 0;
if (isset($_GET['pageNum_tampil'])) {
  $pageNum_tampil = $_GET['pageNum_tampil'];
}
$startRow_tampil = $pageNum_tampil * $maxRows_tampil;

mysql_select_db($database_koneksi, $koneksi);
$query_tampil = "SELECT * FROM tagama";
$query_limit_tampil = sprintf("%s LIMIT %d, %d", $query_tampil, $startRow_tampil, $maxRows_tampil);
$tampil = mysql_query($query_limit_tampil, $koneksi) or die(mysql_error());
$row_tampil = mysql_fetch_assoc($tampil);

if (isset($_GET['totalRows_tampil'])) {
  $totalRows_tampil = $_GET['totalRows_tampil'];
} else {
  $all_tampil = mysql_query($query_tampil);
  $totalRows_tampil = mysql_num_rows($all_tampil);
}
$totalPages_tampil = ceil($totalRows_tampil/$maxRows_tampil)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='shortcut icon' type='image icon' href='../library/favicon.png'/>
<link rel='stylesheet' type='text/css' href='../library/bootstrap/bootstrap.css'/>
<link rel='stylesheet' type='text/css' href='../library/bootstrap/style.css'/>
<script src="../library/bootstrap/jquery.min.js"></script>
<title>Buku Induk Siswa SMP Tahfidzqu - Admin</title>
</head>

<body>
<div class='container-fluid' style='margin-top:20px;'>
<?php include("header.php"); ?>
<?php include("navbar.php"); ?>
  <div class='row-fluid'>
  <?php include("sidebar.php"); ?>
    <div class="span9">
    <div class='well' fixed center;>
    <p style='margin-top:10px'>
      <h3 align="center"><strong>Data Agama</strong></h3>
      <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
        <table style='margin-top:10px;background:transparent' class="table">
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Agama</td>
            <td><input type="text" name="nama_agama" value="" class="span9" required/></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Tambahkan" class="btn btn-success" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      <p>&nbsp;</p>
      <table style='margin-top:10px;background:white' class="table table-bordered table-striped table-hover">
        <tr>
          <td>Kode Tingkat Pendidikan</td>
          <td>Tingkat Pendidikan</td>
          <td>Aksi</td>
        </tr>
        <?php do { ?>
          <tr>
            <td><?php echo $row_tampil['id_agama']; ?></td>
            <td><?php echo $row_tampil['nama_agama']; ?></td>
            <td> 
            <div class='btn-group'>
              <a href="hapusagama.php?id_agama=<?php echo $row_tampil['id_agama']; ?>" class="btn btn-mini btn-danger tipsy-kiri-atas" title="Hapus Data Ini"><i class="icon-remove icon-white"></i></a> 
              <a href="formeditagama.php?id_agama=<?php echo $row_tampil['id_agama']; ?>" class="btn btn-mini btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a></div>
              
            </td>
          </tr>
          <?php } while ($row_tampil = mysql_fetch_assoc($tampil)); ?>
      </table>
    </div>
    </div>
    <?php include("../library/inc/footer.php") ?>
</div>
</body>
</html>
<?php
mysql_free_result($tampil);
?>
