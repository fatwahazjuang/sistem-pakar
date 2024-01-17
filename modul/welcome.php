<title>Beranda</title>
<?php 
  $hthasil=mysqli_query($conn,"SELECT count(*) as total from hasil");
	$dthasil=mysqli_fetch_assoc($hthasil); ?>
	<div>
        <div>
          <!-- small box -->
          <div class='small-box bg-yellow'>
            <div class='inner center text-center'>
              <h3> <?php echo $dthasil["total"]; ?></h3>
              <p>Total Riwayat Diagnosa</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="aset/banner/banner4.png" alt="First slide">
                    <div class="carousel-caption">
                    </div>
                  </div>
                </div> 
              </div>
			  <br>
            <div>
            <a class="btn btn-primary btn-lg btn-block" href="diagnosa" role="button" data-placement='top'><b>Ambil Tes</b></a>
            </div>
                
                <div></div>
                