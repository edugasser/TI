<!DOCTYPE html>
<html >


<head>
<META http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="robots" content="index, follow" />

<!-- page title, displayed in your browser bar -->
<title>Librer&Iacute;a TI</title>


<!-- add css stylesheets -->	

<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/minimal-skin.css" type="text/css" media="screen"/>
 <script type="text/javascript" src="<?php echo base_url();?>assets/ajax_framework.js"></script>

 
<!--- Bxslider ----------->
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="https://raw.github.com/wandoledzep/bxslider/master/jquery.bxSlider.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/bx_styles/bx_styles.css" />
<script type="text/javascript">
  
  $(function(){
  $('#slider1').bxSlider({
    auto: true,
    autoControls: true
  });
});	
</script>

<!-- Fin Bxslider -------->

</head>

<body id="top"  onload="doOnLoad();" class="home blog  MSIE MSIE7">
	<div id='wrap_all'>
			
	<?php $this->load->view('include/header_view'); ?><!-- header -->
	<?php $this->load->view($contenido); ?><!-- body -->
	<?php $this->load->view('include/footer_view'); ?><!-- footer -->

    </div><!-- end wrap_all -->

 
 
 
 </body>

</html>