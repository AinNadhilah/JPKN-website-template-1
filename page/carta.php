<?php 
  $menu = $_GET['menu'];
  $menu = filter_var($menu, FILTER_SANITIZE_STRING);
  $menu = mysqli_real_escape_string($conn_cpanel, $menu);

  $sub =  $_GET['sub'];
  $sub = filter_var($sub, FILTER_SANITIZE_STRING);
  $sub = mysqli_real_escape_string($conn_cpanel, $sub);

   ?>	
	
	<!-- start mvo -->
	<div class="all-title-box">
		<div class="container text-center">
	
			<?php  
            $sql_cr ="SELECT * FROM carta WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' GROUP BY menu";
            $querycr = mysqli_query($conn_cpanel, $sql_cr);
            while($result_cr  = mysqli_fetch_array($querycr,MYSQLI_ASSOC)){
                if (empty($result_cr['sub'])){                 
            ?>
			<h1><?php echo $result_cr ['menu'];?><span class="m_1"></span></h1>
            <?php } else { ?>
                <h1><?php echo $result_cr ['sub'];?><span class="m_1"></span></h1>
            <?php }} ?>		
		</div>
	</div>

    <section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
				<div class="row team-row mt-5">
					<div class="col-lg-12 ">
						<div class="team-member text-center">
							<div class="team-img ">
								<?php  
            					$sql_carta ="SELECT * FROM carta WHERE  url_agensi = '$url_agensi'AND menu='$menu' AND sub='$sub' ";
            					$querycarta = mysqli_query($conn_cpanel, $sql_carta);
            					while($result_carta  = mysqli_fetch_array($querycarta,MYSQLI_ASSOC)){           
         						?> 
								<img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/carta_organisasi/<?php echo $result_carta ['fail'];?>" width="100%" height="auto" ><br><br>
								<?php } ?>  
											
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</section>
