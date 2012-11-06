 	
			</div>
			<!-- end container_wrap_header -->
			
			<!-- ####### END HEAD CONTAINER ####### -->
			
			
		<!-- ####### MAIN CONTAINER ####### -->
		<div class='container_wrap small_image sidebar_right single_sidebar' id='main'>
		
			<div class='container'>
				<div class="chatsearch">
	<input  value="Buscador libros" 
	onfocus="if (this.value == 'Buscador libros') this.value = '';" onblur="if (this.value == '')
	this.value = 'Buscador libros';" name="libro-q" id="libro-q" type="text" onkeyup="javascript:autosuggest()"  onkeydown="javascript:quit()"/>
	
	<div class="autosuggest"  id="libro"> </div>
</div>
			<div class='template-blog template-single-blog content'>
				
			<?php if (!empty($info)){?>
			<?php foreach($info as $row){?>
			<div class='post-entry'>
				<h1 class='post-title'><a href="" title="<?php echo $row->titulo;?>"><?php echo $row->titulo;?></a>
</h1>

				<div class='mini_slider'>
				<div  class='preloading  autoslide_false autoslidedelay__ slideshow_related fade_slider slideshow_container'>
				<span class='rounded_corner rctl'></span>
				<span class='rounded_corner rctr'></span>
				<span class='rounded_corner rcbl'></span>
				<span class='rounded_corner rcbr'></span>
				<span class='bottom_shadow'></span>
				<ul class='slideshow'  style='height: 130px; width: 130px;'>
				<li class='featured featured_container1' >
				 
				<img width="130" title='<?php echo $row->titulo;?>' alt='<?php echo $row->titulo;?>'src='<?php echo base_url();?>assets/portadas/<?php echo $row->img;?>'/>
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
						<strong><?php echo $total;?></strong> Comentarios					</span>	
					
					</span>		
				</div><!--end meta info-->	

				<div class="entry-content">		
				<?php echo $row->descripcion;?>											
				</div>	
				<!--tags info-->
				<div class="blog-meta">
					<span class='post-meta-infos'>
						<span class='date-container minor-meta'>Etiquetas: <?php echo $row->tags;?></span>				
					</span>		
				</div><!--end tags info-->
			</div><!--end post-entry-->
			<?php }}?>
			
			<div class='comment_meta_container first'>
				<h4 id="comments"><?php echo $total;?> comentarios </h4>
			</div>
			<div class='comment_container'>
			<ol class="commentlist">
				<?php if(!empty($comentarios)){?>
				<?php foreach($comentarios as $row){?>
				<li class="comment even thread-even depth-1" id="li-comment-3">
					<div id="comment-3">
						<div class="gravatar">
							<img alt='' src='http://0.gravatar.com/avatar/0f40cc42b2f6ac7fbff31030a84f774b?s=36&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D36&amp;r=G' class='avatar avatar-36 photo' height='36' width='36' />			
						</div>
						
						<!-- display the comment -->
						<div class='comment_content'>
						
						<cite class="author_name heading"><?php echo $row->autor;?></cite> <span class="says">dice:</span>						
						<!-- display the comment metadata like time and date-->
						<div class="comment-meta commentmetadata">
						<?php echo $row->fecha_registro;?> / <?php echo $row->email;?>
						</div>
						
						<!-- display the comment text -->
						<div class='comment_text'>
							<p><?php echo $row->comentario;?></p>
						</div>
						
						</div>
					</div>
				</li>
				<?php }}?>
			</ol>
			</div>
			<hr>
			<?php if ($error != null){?>
			<h3 style="color:red">Por favor, rellene los campos obligatorios</h3>
			<?php }?>
		<div class='comment-entry post-entry'>
		<div class='comment_meta_container'><h3 class='miniheading'>Deja un comentario</h3><span class='minitext'>Qué opinas sobre este artículo?</span></div>
		<div class='comment_container'>								
			<div id="respond">
					<form action="<?php echo base_url();?>seccion/comentar/<?php echo $id_libro;?>" method="post" >
						<p class="comment-notes">Campos requeridos<span class="required">*</span></p>							
						<p class="comment-form-author"><input id="autor" name="autor" type="text" value="" size="30" aria-required='true' /><label for="author">* Nombre</label> </p>
						<p class="comment-form-email"><input id="email" name="email" type="text" value="" size="30" aria-required='true' /><label for="email">* Email</label></p>
 
						<p class="comment-form-comment"> <textarea id="comentario" name="comentario" cols="45" rows="8" aria-required="true"></textarea></p>						
						<input name="submit" type="submit" id="submit" value="Comentar" />
						 
						</p>
					 					
					</form>
			</div><!-- #respond -->
		</div>
		<a href="javascript:history.back()">&larr; Volver atrás   </a>
	</div>				

<!--end content-->
</div>

</div><!--end container-->

</div>
<!-- ####### END MAIN CONTAINER ####### -->