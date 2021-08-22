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
            $sql_pr ="SELECT DISTINCT menu,sub FROM perutusan WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' GROUP BY menu";
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
	
        
        <!--? Services Area Start -->

	<br>
	<br>
	<br>
        <div class="container">
            <div class="row">
			<?php  
            $sql_bt ="SELECT * FROM penerbitan WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querybt = mysqli_query($conn_cpanel, $sql_bt);
            while($result_bt  = mysqli_fetch_array($querybt,MYSQLI_ASSOC)){  
            if(strpos($result_bt['type'],'gambar') !== false) {         
            ?> 
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/book.png">
							<div class="social">
								<ul>
									<li><a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/penerbitan/<?php echo $result_bt ['fail'];?>" class="fa fa-book" target="_blank"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<span class="post"><?php echo $result_bt ['tarikh'];?><br><?php echo $result_bt ['tajuk'];?><br><?php echo $result_bt ['deskripsi'];?></span>
						</div>
					</div>
				</div>
				<?php }}?>

			
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	
