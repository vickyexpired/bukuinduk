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

$maxRows_datasiswa = 10;
$pageNum_datasiswa = 0;
if (isset($_GET['pageNum_datasiswa'])) {
  $pageNum_datasiswa = $_GET['pageNum_datasiswa'];
}
$startRow_datasiswa = $pageNum_datasiswa * $maxRows_datasiswa;

mysql_select_db($database_koneksi, $koneksi);
$query_datasiswa = "SELECT tsiswa.*, tsd.* FROM tsiswa inner join tsd on tsiswa.id_sd=tsd.id_sd";

$query_limit_datasiswa = sprintf("%s LIMIT %d, %d", $query_datasiswa, $startRow_datasiswa, $maxRows_datasiswa);
$datasiswa = mysql_query($query_limit_datasiswa, $koneksi) or die(mysql_error());
$row_datasiswa = mysql_fetch_assoc($datasiswa);

if (isset($_GET['totalRows_datasiswa'])) {
  $totalRows_datasiswa = $_GET['totalRows_datasiswa'];
} else {
  $all_datasiswa = mysql_query($query_datasiswa);
  $totalRows_datasiswa = mysql_num_rows($all_datasiswa);
}
$totalPages_datasiswa = ceil($totalRows_datasiswa/$maxRows_datasiswa)-1;
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
                <h3>Data siswa</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href='datasiswabaru.php' class='btn btn-primary'><i class='icon icon-white glyphicon glyphicon-plus'></i> Tambah Data Siswa</a>
                    <div class="clearfix"></div>
                  </div>
					
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>NISN</th>
                          <th>Nama Siswa</th>
                          <th>No. Telepon</th>
                          <th>Nama SD</th>
						  <th>Action</th>
						  
                        </tr>
                      </thead>
                      <tbody>
						<?php do { ?>
						  <tr>
							<td><?php echo $row_datasiswa['nisn']; ?></td>
							<td><?php echo $row_datasiswa['nama_lengkap']; ?></td>
							<td><?php echo $row_datasiswa['telp']; ?></td>
							<td><?php echo $row_datasiswa['nama_sd'] ;?></td>
							<td>
							<div class='btn-group'>
								  <a href="hapussiswa.php?id_siswa=<?php echo $row_datasiswa['id_siswa']; ?>" class="btn btn-danger btn-xs glyphicon glyphicon-remove tipsy-kiri-atas" title="Hapus Data Ini"><i class="icon-remove icon-white"></i></a> 
								  <a href="formeditsiswa.php?id_siswa=<?php echo $row_datasiswa['id_siswa']; ?>" class="btn btn-default btn-xs glyphicon glyphicon-pencil tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a></div>
							</td>
						  </tr>
						  <?php } while ($row_datasiswa = mysql_fetch_assoc($datasiswa)); ?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
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
mysql_free_result($tampil);
?>
