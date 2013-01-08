<!DOCTYPE html>
<html lang="es">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="robots" content="index, follow" />
<META NAME="keywords" CONTENT="comentarios, libros, opiniones, acerca de libros, leer, lectura">
<META NAME="description" CONTENT="Bookblog TI es un blog con el cual pretendemos fomentar la cultura, el debate y el excepcional y apasionante hábito de la lectura.">
<!-- page title, displayed in your browser bar -->
<title>BookBlog - Librería en Internet : Opiniones, valoración y comentarios </title>


<!-- add css stylesheets -->	

<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/minimal-skin.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?php echo base_url();?>assets/ajax_framework.js"></script>

 
 
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

 

</head>

<body id="top"  onload="doOnLoad();" class="home blog  MSIE MSIE7">
	<div id='wrap_all'>
			
	<?php $this->load->view('include/header_view'); ?><!-- header -->
	<?php $this->load->view($contenido); ?><!-- body -->
	<?php $this->load->view('include/footer_view'); ?><!-- footer -->

    </div><!-- end wrap_all -->

 
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=240028132786624";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 
 </body>

</html>