<!-- ####### HEAD CONTAINER ####### -->
<div class='container_wrap slideshow_big_container' id='header'>				
	
	<div class='container main_menu'>				
		<h1 class='logo bg-logo'><a href='<?php echo base_url();?>/home'>Libreria TI</a></h1>
		<div class="menu-main-menu-container">
			<ul id="menu-main-menu" class="menu">
				<li><a href="<?php echo base_url();?>"><strong>Inicio</strong><span class="main-menu-description">P&aacute;gina principal</span></a></li>
				<li style="width:170px;"><a href="#"><strong>Todos los libros</strong><span class="main-menu-description">Por temas </span></a>
					<ul class="sub-menu">     
						<?php if(!empty($temas)){?>
						<?php foreach($temas as $row){?>	
						<li><a href="<?php echo base_url();?>seccion/tema/<?php echo $row->id_tema;?>"><?php echo $row->titulo;?></a></li>
						<?php }} ?>
					</ul>
					</li>
				<li><a href="<?php echo base_url();?>seccion/novedades"><strong>Novedades</strong><span class="main-menu-description">&Uacute;ltimos libros a&ntilde;adidos</span></a></li>
			 
				
			 
				</ul>
				<div id="google_translate_element" >
				<div class="chatsearch" style="margin-top:-9px;">
					<input  value="Buscador libros" 
					onfocus="if (this.value == 'Buscador libros') this.value = '';" onblur="if (this.value == '')
					this.value = 'Buscador libros';" name="libro-q" id="libro-q" type="text" onkeyup="javascript:autosuggest()"  onkeydown="javascript:quit()"/>
					
					<div class="autosuggest"  id="libro"> </div>
				</div>
		</div>
	</div>
	<!-- end container-->
	
					
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'es',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
        document.getElementById(':1.targetLanguage').style.fontSize = '8pt';
      
    }

</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>