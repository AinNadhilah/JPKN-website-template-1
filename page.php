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
        include("page/switchcase.php");
        include("page/".$load);
    ?>
    <?php include("mainframe/footer.php");?>
    <?php include("mainframe/notis.php");?>
    <?php include("unable_print.php");?>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <?php include("mainframe/script.php");?>
</body>
</html>