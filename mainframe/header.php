<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php"><img width="100" height="80" class="" src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/maklumat_agensi/<?php echo $result ['logo'];?>" alt="img">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Laman Utama</a></li>
						<?php 
            				$sql_menu     = "SELECT DISTINCT(menu), sub, page as pge FROM menu_main WHERE  url_agensi = '$url_agensi' GROUP BY menu ORDER BY ai ASC";
            				$query1_menu  = mysqli_query($conn_cpanel,$sql_menu);
            				while($result_menu  = mysqli_fetch_array($query1_menu,MYSQLI_ASSOC))
            				{
           					if (empty($result_menu['pge'])){  
   						?>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><?php echo $result_menu['menu'];?></a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<?php
  								$sql_submenu     = "SELECT * FROM menu_main WHERE  url_agensi = '$url_agensi' AND menu = '".$result_menu['menu']."' AND sub != ''  ";
                  				$query1_submenu  = mysqli_query($conn_cpanel,$sql_submenu);
                  				if ($query1_submenu -> num_rows > 0) { while($result_submenu  = mysqli_fetch_array($query1_submenu,MYSQLI_ASSOC)){
                  			?>
							<a class="dropdown-item" href="page.php?menu=<?php echo $result_submenu['menu'];?>&sub=<?php echo $result_submenu['sub'];?>&page=<?php echo $result_submenu['page'];?>"><?php echo $result_submenu['sub']; ?></a>	
							<?php }} ?>						
							</div>
						</li>
						<?php }  if(!empty ($result_menu['pge'])) {?>
						<li class="nav-item "><a class="nav-link" href="page.php?menu=<?php echo $result_menu['menu'];?>&sub=<?php echo $result_menu['sub'];?>&page=<?php echo $result_menu['pge'];?>"><?php echo $result_menu['menu'];?></a></li>
						<?php } }// END WHILE?>						
						 
						<li class="nav-item"><a class="nav-link" href="hubungikami.php">Maklum Balas</a></li></a>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        
                    </ul>
				</div>
			</div>
		</nav>
	</header>