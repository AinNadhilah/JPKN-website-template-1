<?php 
  $menu = $_GET['menu'];
  $menu = filter_var($menu, FILTER_SANITIZE_STRING);
  $menu = mysqli_real_escape_string($conn_cpanel, $menu);

  $sub =  $_GET['sub'];
  $sub = filter_var($sub, FILTER_SANITIZE_STRING);
  $sub = mysqli_real_escape_string($conn_cpanel, $sub);
?>

	
	<div class="all-title-box">
		<div class="container text-center">
        <?php  
            $sql_pr ="SELECT DISTINCT menu,sub FROM perutusan WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querypr = mysqli_query($conn_cpanel, $sql_pr);
            while($result_pr  = mysqli_fetch_array($querypr,MYSQLI_ASSOC)){
                if (empty($result_pr['sub'])){                 
            ?>
			<h1><?php echo $result_pr ['menu'];?><span class="m_1"></span></h1>
            <?php } else { ?>
                <h1><?php echo $result_pr ['sub'];?><span class="m_1"></span></h1>
            <?php }} ?>
		</div>
	</div>
    <br><br><br>
    <?php  
            $sql_perts ="SELECT * FROM perutusan WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $queryperts = mysqli_query($conn_cpanel, $sql_perts);
            while($result_perts  = mysqli_fetch_array($queryperts,MYSQLI_ASSOC)){
            ?>
    <div id="overviews" class="section lb">
        <div class="container">
            
        
            <div class="row align-items-center">
				
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/perutusan_sejarah/<?php echo $result_perts ['gambar'];?>" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-justify">
                    <div class="message-box">
                        <h2><?php echo $result_perts ['tajuk'];?></h2>
                        <p><?php echo nl2br($result_perts ['deskripsi']);?></p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <?php } ?>
