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
            $sql_gl ="SELECT * FROM galeri WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' GROUP BY menu";
            $querygl = mysqli_query($conn_cpanel, $sql_gl);
            while($result_gl  = mysqli_fetch_array($querygl,MYSQLI_ASSOC)){
                if (empty($result_gl['sub'])){                 
            ?>
			<h1><?php echo $result_gl ['menu'];?><span class="m_1"></span></h1>
            <?php } else { ?>
                <h1><?php echo $result_gl ['sub'];?><span class="m_1"></span></h1>
            <?php }} ?>
		</div>
	</div>
	
        
        <!--? Services Area Start -->

	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
			<?php  
            
            $sql_gl ="SELECT * FROM galeri WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' GROUP BY tajuk ";
            $querygl = mysqli_query($conn_cpanel, $sql_gl);
            while($result_gl  = mysqli_fetch_array($querygl,MYSQLI_ASSOC)){
         	?>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/galeri/<?php echo $result_gl ['tajuk'];?>/<?php echo $result_gl ['fail'];?>">
							<div class="social">
								<ul>
									<li><a href="galeri_item.php?id=<?php echo $result_gl['tajuk']; ?>" class="fa fa-eye" target="_blank"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title"><?php echo $result_gl ['tajuk'];?></h3>
							<span class="post"><?php echo $result_gl ['tarikh'];?></span>
						</div>
					</div>
				</div>
				<?php }?>

			
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	
