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
            $sql_cr ="SELECT * FROM direktori WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' GROUP BY menu";
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
    <br><br><br>
    <div class="container">
        <div class="iconcontainer">
        <div class="table-responsive">
            <table id="myTable" class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Kakitangan</th>
                <th scope="col">Sambungan</th>
                <th scope="col">No. tel</th>
                <th scope="col">Bahagian/Cawangan/KSIT</th>
                <th scope="col">Gambar</th>
            </tr>
            </thead>
            <tbody>
            <?php
                  $counter =1;
                  $sql_dr ="SELECT * FROM direktori WHERE  url_agensi = '$url_agensi'";
                  $querydr = mysqli_query($conn_cpanel, $sql_dr);
                  while($result_dr  = mysqli_fetch_array($querydr,MYSQLI_ASSOC)){
                  ?>
            <tr>
                <th scope="row"><?php echo $counter++;?></th>
                    <td><?php echo $result_dr ['nama'];?></td>
                    <td><?php echo $result_dr ['sambungan'];?></td>
                    <td><?php echo $result_dr ['notel'];?></td>
                    <td><?php echo $result_dr ['bahagian'];?></td>
                    <td><a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/direktori/<?php echo $result_dr ['gambar'];?>" title="<?php echo $result_dr ['nama'];?>" target="_blank"><img height=100px; width=100px; src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/direktori/<?php echo $result_dr ['gambar'];?>"></a></td>
            </tr>
            <?php } ?>
            </table>
            <script>
                $(document).ready( function () {
                $('#myTable').DataTable();
                } );
            </script>   
        </div>
        </div>
    </div><br><br><br>