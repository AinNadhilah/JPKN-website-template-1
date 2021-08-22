
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
             $sql_tp ="SELECT * FROM text_pic WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' GROUP BY menu ";
			 $querytp = mysqli_query($conn_cpanel, $sql_tp);
            while($result_tp  = mysqli_fetch_array($querytp,MYSQLI_ASSOC)){
                if (empty($result_tp['sub'])){                 
            ?>
			<h1><?php echo $result_tp ['menu'];?><span class="m_1"></span></h1>
            <?php } else { ?>
                <h1><?php echo $result_tp ['sub'];?><span class="m_1"></span></h1>
            <?php }} ?>
		</div>
	</div>
	<br><br><br>
	<div class="container">
            <div class="row">
			<?php  
            $sql_tp ="SELECT * FROM text_pic WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querytp = mysqli_query($conn_cpanel, $sql_tp);
            while($result_tp  = mysqli_fetch_array($querytp,MYSQLI_ASSOC)){           
        	?> 
				<div class="col-lg-3 col-md-12 col-12">
					<div class="our-team">
						<div class="team-content">
						<h3 class="title"><?php echo $result_tp ['tajuk'];?></h3>
							<span class="post"><?php echo $result_tp ['deskripsi'];?></span>
						</div>
						<br>
						<div class="team-img">
							<img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/text_pic/<?php echo $result_tp ['gambar'];?>" >
							<div class="social">
								<ul>
									<li><a href="<?php echo $result_tp ['link'];?>" class="fa fa-book" target="_blank"></a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				<?php }?>

			
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	
<br>
<br>
<br>
<br>

