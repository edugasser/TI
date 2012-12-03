</div>
<!-- end container_wrap_header -->
		
<!-- ####### END HEAD CONTAINER ####### -->


	<!-- ####### MAIN CONTAINER ####### -->
<?php
 function getSubString($string, $length=NULL)
{
    //Si no se especifica la longitud por defecto es 50
    if ($length == NULL)
        $length = 50;
    //Primero eliminamos las etiquetas html y luego cortamos el string
    $stringDisplay = substr(strip_tags($string), 0, $length);
    //Si el texto es mayor que la longitud se agrega puntos suspensivos
    if (strlen(strip_tags($string)) > $length)
        $stringDisplay .= ' ...';
    return $stringDisplay;
}
?>
	<div class='container_wrap fullwidth' id='main'>
		
			<div class='container'>
		 	
			<?php if (!empty($tema)){?>
				<h1>Libros de <?php echo $tema;?></h1> 
			 <?php }else{?>
				<h1>Novedades</h1>
			 <?php }?>
			 <hr>

			<div class='hr hr_invisible'></div>
			<br>
			<div class='small_image sidebar_right single_sidebar'><div class='template-blog content'>
			<?php if (!empty($info)){?>
			<?php foreach($info as $row){?>
			<div class='post-entry'>		
				<h1 class='post-title'><a href="<?php echo base_url();?>seccion/ficha/<?php echo $row->id_libro;?>"><?php  echo  $row->titulo;?></a></h1>
				
				<div class='mini_slider'>
					  
						<span class='bottom_shadow'></span>
						<ul class='slideshow'  style='height: 130px; width: 130px;'>
						<li class='featured featured_container1' >
						 <a href="<?php echo base_url();?>seccion/ficha/<?php echo $row->id_libro;?>"><img src='<?php echo base_url();?>assets/portadas/<?php echo $row->img;?>' width="130" title='<?php echo $row->titulo;?>' alt='<?php echo $row->titulo;?>' /></a>
						</li>
						</ul>
					 
				</div>			
				
				<!--meta info-->
				<div class="blog-meta">
					<span class='post-meta-infos'>
						<span class='date-container minor-meta'><?php echo $row->fecha_registro;?></span>				
					</span>		
				</div><!--end meta info-->	
				<div class="entry-content">		
					<?php echo getSubString($row->descripcion,650);?>
					<p> <a href="<?php echo base_url();?>seccion/ficha/<?php echo $row->id_libro;?>" class="more-link">Leer mas  &rarr;</a></p>				
				</div>	
				<!--tags info-->
				<div class="blog-meta">
					<span class='post-meta-infos'>
						<span class='date-container minor-meta'>Etiquetas: <?php echo $row->tags;?></span>				
					</span>		
					 
				</div><!--end tags info-->
			</div><!--end post-entry-->
			<?php }} ?>
									<?php echo $this->pagination->create_links();?>
									<br>		
				<a href="javascript:history.back()">&larr; Volver atr&aacute;s   </a>
			 </div> 
			<!--end content-->
			</div>
				

			</div><!--end container-->

	</div>
	<!-- ####### END MAIN CONTAINER ####### -->