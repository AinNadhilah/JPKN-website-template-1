<!DOCTYPE html>
<html lang="en">

<?php include("mainframe/head.php");?>

<body class="host_version"> 

	
    <!-- LOADER -->
	<?php include("content/preloader.php");?>
	<!-- END LOADER -->	

    <!-- Start header -->
	<?php include("mainframe/header.php");?>
	<!-- End header -->
	<?php include("content/floating2.php");?>
    <?php 
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $id = mysqli_real_escape_string($conn_cpanel, $id);  
    ?>
	<div class="all-title-box">
		<div class="container text-center">
            <?php  
            $sql_glr ="SELECT * FROM galeri WHERE url_agensi = '$url_agensi' AND tajuk='$id'";
            $queryglr = mysqli_query($conn_cpanel, $sql_glr);
            $result_glr  = mysqli_fetch_array($queryglr,MYSQLI_ASSOC);
            ?>
			<h1><?php echo $result_glr ['sub'];?><span class="m_1"></span></h1>
		</div>
	</div>
	
        
        <!--? Services Area Start -->

	<br>
	<br>
	<br>
   
  
	<div class="container">
            <div class="row">
			<?php
                $sql = "SELECT * FROM galeri WHERE url_agensi = '$url_agensi' AND tajuk='$id'";
                $queryglr = mysqli_query($conn_cpanel,$sql);
                while($result_glr = mysqli_fetch_array($queryglr,MYSQLI_ASSOC)){
            ?>
				<div class="col-lg-3 col-md-12 col-12">
					<div class="our-team">				
						<div class="team-img">
							<img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/galeri/<?php echo $result_glr ['tajuk'];?>/<?php echo $result_glr ['fail'];?>" >
							<div class="social">
								<ul>
									<li><a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/galeri/<?php echo $result_glr ['tajuk'];?>/<?php echo $result_glr ['fail'];?>" class="fa fa-book" target="_blank"></a></li>
								</ul>
							</div>
						</div>
                        <br>
                        <div class="team-content">
							<span class="post"><?php echo $result_glr ['deskripsi'];?></span>
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

<br>
<?php include("mainframe/footer.php");?>
    <?php include("mainframe/notis.php");?>
	<?php include("unable_print.php");?>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <?php include("mainframe/script.php");?>
</body>
</html>