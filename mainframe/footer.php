<?php 
 
  $statement = "SELECT * FROM agensi WHERE  url_agensi = '$url_agensi'";
  $query = mysqli_query($conn_cpanel,$statement);
  
  $result_w = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
<footer class="footer">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="widget clearfix">
                       
                        <?php 
                        $sql_mp     = "SELECT * FROM agensi WHERE  url_agensi = '$url_agensi'";
                        $query_mp  = mysqli_query($conn_cpanel,$sql_mp);
                        $result_mp  = mysqli_fetch_array($query_mp,MYSQLI_ASSOC);?>
                        <iframe src="<?php echo $result_mp ['lokasi'];?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        
                        <?php //echo $result_peta['peta2'];?>

                        <?php include("social.php");?>
                    </div><!-- end clearfix -->
                </div><!-- end col -->


				<div class=" col-lg-3 col-xs-6">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pautan</h3>
                        </div>
                        <?php  
                            $sql_url ="SELECT * FROM pautan_url WHERE  url_agensi = '$url_agensi'";
                            $queryurl = mysqli_query($conn_cpanel, $sql_url);
                            while($result_url  = mysqli_fetch_array($queryurl,MYSQLI_ASSOC)){
                        ?>
                        <ul class="footer-links">
                            <li><a href="<?php echo $result_url['pautan'];?>"><?php echo $result_url ['tajuk'];?></a></li>
                        </ul><!-- end links -->

                        <?php }?>

                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-3 ">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Alamat Perhubungan</h3>
                        </div>
                        <ul class="footer-links">
                            <li><?php echo $result_w ['alamat'];?></a></li>
                            <div class="widget-title">
                        </ul><!-- end links -->
                    </div>
                </div>

                <div class="col-lg-2 ">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Hubungi Kami</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#"><?php echo $result_w ['emel'];?></a></li>
                            <li><?php echo $result_w ['notel'];?></li>
                            <li><?php echo $result_w ['nofaks'];?></li>                    
                            <div class="widget-title">
                        </ul><!-- end links -->
                    </div>
                </div>
               
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->
    