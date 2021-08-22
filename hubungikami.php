<!DOCTYPE html>
<html lang="en">
<!-- head start -->
<?php include("mainframe/head.php");?>
<!-- hend end -->

	<!-- LOADER -->
	<?php include("content/preloader.php");?>
	<!-- END LOADER -->	

    <!-- Start header -->
	<?php include("mainframe/header.php");?>	
    <?php include("content/floating2.php");?>
    <body onload="createCaptcha()">
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Maklum Balas<span class="m_1"></h1>
		</div>
	</div>
	
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Sebarang Pertanyaan/ Cadangan/ Aduan<br>
                    Nyatakan Maklum Balas Anda..</h3>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="contact_form">
                    
                        <div id="message"></div>
                        <form id="contactform" class="" action="form/insert.php"  method="post">
                        
                            <div class="row row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12">             
                                    <input type="text" name="nama"  class="form-control" placeholder="Nama" required>                                  
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="email" name="emel"  class="form-control" placeholder="Emel" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="notel"  pattern="[0-9]{3}-[0-9]{7}|[0-9]{3}-[0-9]{8}"  class="form-control" placeholder="Nombor Telefon Format:123-4567890">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="mesej"  rows="6" placeholder="Mesej/Cadangan/Aduan/Maklumbalas" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div id="captcha" class="text-center" style="background:white;"></div>
                                    <div id="cp"><br><input type="text" name="captcha"  class="form-control" placeholder="captcha"  id="cpatchaTextBox"/>
                                    <button class="btn btn-light btn-radius btn-brd grd1 btn-block" onclick="validateCaptcha()">Sahkan</button></div>
                                </div>                               
                                <div id="tapuk" class="col-lg-12 col-md-12 col-sm-12 text-center"><br><button type="submit"  value="Hantar" name="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Hantar</button></div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <?php include("mainframe/footer.php");?>
    <?php include("mainframe/notis.php");?>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <?php include("mainframe/script.php");?>
    <?php include("unable_print.php");?>
</body>
</html>