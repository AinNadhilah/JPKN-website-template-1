<head>
<?php //include("resultdata.php");?>
<!-- head start -->



    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
      require("connection/db.php");
      $statement = "SELECT * FROM agensi WHERE url_agensi = '$url_agensi' ";
      $query = mysqli_query($conn_cpanel,$statement);
  
      $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    ?>
     <!-- Site Metas -->
    <title><?php echo $result ['nama'];?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/maklumat_agensi/<?php echo $result ['logo'];?>" type="image/x-icon" />
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link href="assets/css/logo.css" rel="stylesheet">
    <link href="css/floating.css" rel="stylesheet">

    <!-- Video CSS -->
    <link href="mediabox-master/dist/mediabox.css" rel="stylesheet">
    
    <!----Data Query--->


    <!----direktori query---->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
    <script src="js/jquery-3.6.js" type="text/javascript" charset="utf-8"></script> 
    <script type="text/javascript" charset="utf8" src=" https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
     $.noConflict();
    jQuery( document ).ready(function( $ ) {
    $('#myTable').DataTable();
    });
    </script>   
    
 

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- 
<link href="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="code.jquery.com/jquery-1.11.1.min.js"></script> -->

<!-- 
<link href="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->