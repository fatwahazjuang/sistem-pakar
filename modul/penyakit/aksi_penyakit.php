<?php

session_start();
if (!(isset($_SESSION['username']) && isset($_SESSION['password']))) {
  header('location:index.php');
  exit();
} else {
?>
  <?php

  session_start();
  include "../../config/koneksi.php";

  $module = $_GET['module'];
  $act = $_GET['act'];

// Hapus penyakit
  if ($module == 'penyakit' AND $act == 'hapus') {
    mysqli_query($conn,"DELETE FROM penyakit WHERE kode_penyakit='$_GET[id]'");
    header('location:../../index.php?module=' . $module);
  }

// Input penyakit
  elseif ($module == 'penyakit' AND $act == 'input') {
    $nama_penyakit = $_POST['nama_penyakit'];
    $numrows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM penyakit where nama_penyakit = '$nama_penyakit'"));
    if ($numrows > 0){
      echo "<script>alert('Nama Penyakit Sudah Pernah Di Input !'); window.location='../../penyakit/tambahpenyakit'</script>";
    }else{
    mysqli_query($conn,"INSERT INTO penyakit(
			      nama_penyakit) 
	                       VALUES('$nama_penyakit')");
        header('location:../../index.php?module=' . $module); 
    }   
  }

// Update penyakit
  elseif ($module == 'penyakit' AND $act == 'update') {
    $nama_penyakit = $_POST['nama_penyakit'];
      mysqli_query($conn,"UPDATE penyakit SET
					nama_penyakit   = '$nama_penyakit'			
               WHERE kode_penyakit       = '$_POST[id]'");
    
    header('location:../../index.php?module=' . $module);
  }
  ?>
<?php } ?>