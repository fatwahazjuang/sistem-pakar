<?php
$module = $_GET['module'];
?>

  <div class="container"></div>
  <?php
  if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
      ?>
    <li><a <?php if ($module == "admin") echo 'class="active"'; ?> href="admin"><i class="fa fa-user"></i> <span>Admin</span></a><li>
      <div class="container"></div>	
    <li><a <?php if ($module == "penyakit") echo 'class="active"'; ?> href="penyakit"><i class="fa fa-bug"></i> <span>Penyakit</span></a><li>
      <div class="container"></div>	
    <li><a <?php if ($module == "gejala") echo 'class="active"'; ?> href="gejala"><i class="fa fa-eyedropper"></i> <span>Gejala</span></a><li>
      <div class="container"></div>
    <li><a <?php if ($module == "pengetahuan") echo 'class="active"'; ?> href="pengetahuan"><i class="fa fa-flask"></i> <span>Pengetahuan</span></a><li>
      <div class="container"></div>
    <li><a <?php if ($module == "password") echo 'class="active"'; ?> href="password"><i class="fa fa-edit"></i> <span>Ubah Password</span></a><li>
      <?php
  }else {
      ?>
      <li><a <?php if ($module == "") echo 'class="active"'; ?> href="./"><i class="fa fa-home"></i> <span>Beranda</span></a><li>
      <div class="container"></div>
      <?php
  }
  ?>
  <div class="container"></div>