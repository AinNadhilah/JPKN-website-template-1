                        
                        <?php  							
  							$statement = "SELECT * FROM agensi WHERE url_agensi = '$url_agensi'";
  							$query = mysqli_query($conn_cpanel,$statement);  
  							$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
						?>
                        <div class="footer-right"> 
							<ul class="footer-links-soi">
															
                                <li><a target="_blank" href="<?php echo $result ['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="<?php echo $result ['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="<?php echo $result ['youtube'];?>"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>