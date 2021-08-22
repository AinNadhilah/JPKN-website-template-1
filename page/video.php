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
            $sql_v ="SELECT * FROM video WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' ";
            $queryv = mysqli_query($conn_cpanel, $sql_v);
            $result_v  = mysqli_fetch_array($queryv,MYSQLI_ASSOC);
            ?>
			<h1><?php echo $result_v['sub'];?><span class="m_1"></span></h1>
		</div>
        
        <!--? Services Area Start -->	
	<div id="teachers" class="section wb">
        <div class="container">
        <div class="row">
				<?php                  
                $sql_v ="SELECT * FROM video WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' ";
                $queryv = mysqli_query($conn_cpanel, $sql_v);
                while($result_v  = mysqli_fetch_array($queryv,MYSQLI_ASSOC)){               
             	?> 
				<div class="col-lg-6 col-md-6 col-12">
					<div class="our-team">
						<a href="<?php echo $result_v ['pautan'];?>" class="mediabox"><img src="https://image.freepik.com/free-vector/shiny-play-button_1035-1617.jpg" alt="play video" height=250 width=250></a>
						<div class="team-content">
							<h3 class="title"><?php echo $result_v ['tajuk'];?></h3>							
						</div>
					</div>
				</div>
				<?php }?>

			
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	
