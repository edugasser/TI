</div>
<!-- end container_wrap_header -->
		
<!-- ####### END HEAD CONTAINER ####### -->


	<!-- ####### MAIN CONTAINER ####### -->
		<div class='container_wrap fullwidth' id='main'>
		
			<div class='container'>

				 <h1>Libros de <?php echo $tema;?></h1>
				 <hr>

			<div class='hr hr_invisible'></div>
			<br>
			<div class='small_image sidebar_right single_sidebar'><div class='template-blog content'>
			<?php if (!empty($info)){?>
			<?php foreach($info as $row){?>
			<div class='post-entry'>		
				<h1 class='post-title'><a href=""><?php  echo  $row->titulo;?></a></h1>
				
				<div class='mini_slider'>
					<div  class=' preloading  autoslide_false autoslidedelay__ slideshow_related fade_slider slideshow_container'>	 
						<span class='bottom_shadow'></span>
						<ul class='slideshow'  style='height: 130px; width: 130px;'>
						<li class='featured featured_container1' >
						<a href='http://www.kriesi.at/themes/corona/2011/03/31/this-is-a-nice-post/'><img src='<?php echo base_url();?>assets/portadas/<?php echo $row->img;?>' width="130"title='Tower Bridge of London' alt='' /></a>
						</li>
						</ul>
					</div>
				</div>			
				
				<!--meta info-->
				<div class="blog-meta">
				
					<span class='post-meta-infos'>
						<span class='date-container minor-meta'><?php echo $row->fecha_registro;?></span>
						<span class='text-sep'>/</span>
						<span class='comment-container minor-meta'>
							<a href="" class="comments-link" ><strong>0</strong> Comentarios</a>
						</span>	
									
					</span>		
				</div><!--end meta info-->	
				<div class="entry-content">		
					<?php echo $row->descripcion?>
					<p> <a href="<?php echo base_url();?>seccion/ficha/<?php echo $row->id_libro;?>" class="more-link">Leer mas  &rarr;</a></p>				
				</div>	
			</div><!--end post-entry-->
			<?php }} ?>
			
			<div class='pagination'><span class='pagination-meta'>Page 1 of 2</span><span class='current'>1</span><a href='http://www.kriesi.at/themes/corona/blog/blog-right-sidebar/page/2/' class='inactive' >2</a></div>
			</div> 
			<!--end content-->
			</div>
				
								
				
			</div><!--end container-->

	</div>
	<!-- ####### END MAIN CONTAINER ####### -->