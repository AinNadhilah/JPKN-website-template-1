<?php 
 
  $statement = "SELECT * FROM agensi WHERE url_agensi = '$url_agensi'";
  $query = mysqli_query($conn_cpanel,$statement);
  
  $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
	<div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">        
                    <?php 
                    $sql_f     = "SELECT * FROM dasar_notis WHERE  url_agensi = '$url_agensi'";
                    $query_f  = mysqli_query($conn_cpanel,$sql_f);
                    $result_f  = mysqli_fetch_array($query_f,MYSQLI_ASSOC);
                    ?>
                    <p class="footer-company-name"><a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/dasar_notis/<?php echo $result_f ['privasi'];?>" target="_blank"><strong>Dasar Privasi</strong></a>  |
                    
                    <a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/dasar_notis/<?php echo $result_f ['keselamatan'];?>" target="_blank"><strong>Dasar Keselamatan </strong></a>  | 
                    
                    <a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/dasar_notis/<?php echo $result_f ['notis_penafian'];?>" target="_blank"><strong>Notis Penafian</strong></a>  |

                    <a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/dasar_notis/<?php echo $result_f ['soalan_lazim'];?>" target="_blank"><strong>Soalan Lazim</strong></a>

                    <div class="copyright">

                        <div class="container">
				            <div class="row">
					            <div class="col-lg-12">
						            <p class="company-name" style="color:white;">Hak Cipta @ (JPKN)-Sinaging Web. <a href="index.php" style="color:white;"><?php echo $result ['nama']; ?></a></p>
					            </div>
				            </div>
			            </div>
                        <?php 
                            $sql_jum     = "SELECT pelawat FROM counter WHERE  url_agensi = '$url_agensi'";
                            $query_jum  = mysqli_query($conn_cpanel,$sql_jum);
                            $result_jum  = mysqli_fetch_array($query_jum,MYSQLI_ASSOC);
            

                            $counter = $result_jum['pelawat']+1;

                            $sql_up="UPDATE counter SET pelawat ='$counter' WHERE url_agensi = '$url_agensi' ";
                            $query_up = mysqli_query($conn_cpanel,$sql_up);
                        ?> 
                        <p class="footer-company-name"><strong>Jumlah Pelawat: <?php echo $result_jum['pelawat']; ?> </strong></p> 
                        <?php 
                            $sql_log     = "SELECT * FROM senarai_webmaster WHERE  url_agensi = '$url_agensi'";
                            $query_log  = mysqli_query($conn_admin,$sql_log);
                            $result_log  = mysqli_fetch_array($query_log,MYSQLI_ASSOC);
                        ?>
                        <p class="footer-company-name"><strong>Tarikh Akhir Dikemaskini: <?php echo date('d/m/Y | h:i A',strtotime($result_log['log_terakhir']))?> </strong></p>  
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
    