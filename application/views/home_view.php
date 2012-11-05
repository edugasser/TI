<div class="container">
<div class="chatsearch">
	<input  value="Buscador libros" 
	onfocus="if (this.value == 'Buscador libros') this.value = '';" onblur="if (this.value == '')
	this.value = 'Buscador libros';" name="familia-q" id="familia-q" type="text" 
	  />
	
	<div class="autosuggest"  id="familia"> </div>
</div>
<div class="wrap_slider">
<ul id="slider1">
<?php if(!empty($info)){?>
<?php foreach($info as $row){?>
  <li>
    <div class="left">
      <img src="<?php echo base_url();?>assets/portadas/pic1.jpg"   />
    </div>
    <div class="right">
      <div class="album"><?php echo $row->titulo;?></div>
      <div class="band">
	<?php echo $row->descripcion;?>  
	<br>De <?php echo $row->autor;?>
      </div>
    </div>
  </li>
<?php }}?>
</ul>
</div>
</div>
					 		
</div>
<!-- end container_wrap_header -->
		
<!-- ####### END HEAD CONTAINER ####### -->


<!-- ####### MAIN CONTAINER ####### -->
	
<div class='container_wrap fullwidth' id='main'>
	
<div class='container'>	
	<h1>Bienvenidos</h1>
	<hr>
	<h4>El motivo de esta web es la realización de una práctica de la asignatura Tencologías de la Información.
		Se trata de una librería on-line donde se pueden consultar libros, ordenados por categorías, y opiniones de los mismos.
	</h4>
</div><!--end container-->
<br>
</div>
<!-- ####### END MAIN CONTAINER #######  ?>-->