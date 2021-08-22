<?php 
  $menu = $_GET['menu'];
  $menu = filter_var($menu, FILTER_SANITIZE_STRING);
  $menu = mysqli_real_escape_string($conn_cpanel, $menu);

  $sub =  $_GET['sub'];
  $sub = filter_var($sub, FILTER_SANITIZE_STRING);
  $sub = mysqli_real_escape_string($conn_cpanel, $sub);
?>

    <style>
body {
  background-color: #ebebeb;
}
.iconcontainer {
  margin-top: 20px;
  margin-bottom: 20px;
}
.iconbox {
  background: #ffffff;
  background-color: #ffffff;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
  padding: 20px 25px;
  text-align: right;
  display: block;
  margin-top: 60px;
  margin-bottom: 15px;
}
.iconbox-icon {
  background-color: #008EED;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  margin: 0 auto;
  width: 100px;
  height: 100px;
  margin-top: -70px;
}
.iconbox-icon span {
  color: #fff;
  font-size: 42px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  padding-top: 29px;
  text-align: center;
  vertical-align: middle;
}
.featureinfo h4 {
  font-size: 26px;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.featureinfo > p {
  color: #000000;
  font-size: 16px;
  padding-top: 4px;
  text-align: left;
}
.btn-default {
  text-shadow: 0px 1px 0px #FFF;
  background-image: linear-gradient(to bottom, #FFF 0px, #E0E0E0 100%);
  background-repeat: repeat-x;
  border-color: #CCC;
  box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.15) inset, 0px 1px 1px rgba(0, 0, 0, 0.075);
}
.btn-default:hover,
.btn-default:focus {
  background-color: #e0e0e0;
  background-position: 0 -15px
}
</style>
	
	<div class="all-title-box">
		<div class="container text-center">
     
      <?php  
            $sql_np ="SELECT * FROM text_nopic WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' GROUP BY menu";
            $querynp = mysqli_query($conn_cpanel, $sql_np);
            while($result_np  = mysqli_fetch_array($querynp,MYSQLI_ASSOC)){
                if (empty($result_np['sub'])){                 
            ?>
			<h1><?php echo $result_np ['menu'];?><span class="m_1"></span></h1>
            <?php } else { ?>
                <h1><?php echo $result_np ['sub'];?><span class="m_1"></span></h1>
            <?php }} ?>
		</div>
	</div>
	

    <div class="container">
  <div class="iconcontainer">
    <div class="row">

      <?php  
        $sql_np ="SELECT * FROM text_nopic WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
        $querynp = mysqli_query($conn_cpanel, $sql_np);
        while($result_np  = mysqli_fetch_array($querynp,MYSQLI_ASSOC)){           
      ?>	

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="iconbox">
          <div class="iconbox-icon">
            <span class="fa fa-book"></span>
          </div>
          <div class="featureinfo">
            <h4 class="text-center"><?php echo $result_np ['tajuk'];?></h4>
            <p>
            <?php echo nl2br($result_np ['deskripsi']);?>
            </p>
            <a class="btn btn-default btn-sm" target="_blank" href="<?php echo $result_np ['link'];?>" role="button">Lebih lagi »</a>
          </div>
        </div>
      </div>
      
      <?php } ?>

    </div>
  </div>
</div>
   