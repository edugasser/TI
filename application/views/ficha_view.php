 	
			</div>
			<!-- end container_wrap_header -->
			
			<!-- ####### END HEAD CONTAINER ####### -->
			
			
		<!-- ####### MAIN CONTAINER ####### -->
		<div class='container_wrap small_image sidebar_right single_sidebar' id='main'>
		
			<div class='container'>
				
			<div class='template-blog template-single-blog content'>
				
			<?php if (!empty($info)){?>
			<?php foreach($info as $row){?>
			<div class='post-entry'>
				<h1 class='post-title'>
				<a href="http://www.kriesi.at/themes/corona/2011/03/31/this-is-a-nice-post/" rel="bookmark" title="Permanent Link: This is a nice post (small preview image)"><?php echo $row->titulo;?></a>
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
				<a href='http://www.kriesi.at/themes/corona/files/2011/09/tidaltut.jpg'>
				<img width="100" src='<?php echo base_url();?>assets/portadas/<?php echo $row->img;?>'/></a>
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
						<a href="http://www.kriesi.at/themes/corona/2011/03/31/this-is-a-nice-post/#respond" class="comments-link"  title="Comment on This is a nice post (small preview image)"><strong>0</strong> Comments</a>					</span>	
					
					</span>		
				</div><!--end meta info-->	

				<div class="entry-content">		
				<?php echo $row->descripcion;?>											
				</div>	
			</div><!--end post-entry-->
			<?php }}?>
		<hr>
		<div class='comment-entry post-entry'>
		<div class='comment_meta_container'><h3 class='miniheading'>Deja un comentario</h3><span class='minitext'>Qué opinas sobre este artículo?</span></div><div class='comment_container'>								
			<div id="respond">
				<h3 id="reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/themes/corona/2011/03/31/this-is-a-nice-post/#respond" style="display:none;">Cancel reply</a></small></h3>
					<form action="http://www.kriesi.at/themes/corona/wp-comments-post.php" method="post" id="commentform">
						<p class="comment-notes">Campos requeridos<span class="required">*</span></p>							
						<p class="comment-form-author"><label for="author">Nombre</label> <span class="required">*</span><input id="author" name="author" type="text" value="" size="30" aria-required='true' /></p>
						<p class="comment-form-email"><label for="email">Email</label> <span class="required">*</span><input id="email" name="email" type="text" value="" size="30" aria-required='true' /></p>
 
						<p class="comment-form-comment"><label for="comment">Comentario</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>						
							 <input name="submit" type="submit" id="submit" value="Comentar" />
							<input type='hidden' name='comment_post_ID' value='282' id='comment_post_ID' />
							<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>
						<p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="778ff5697e" /></p>					
					</form>
			</div><!-- #respond -->
		</div>
	</div>				

<!--end content-->
</div>

</div><!--end container-->

</div>
<!-- ####### END MAIN CONTAINER ####### -->