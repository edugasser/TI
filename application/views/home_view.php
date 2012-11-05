<div class="container">
<div class="chatsearch">
	<input  value="Buscador libros" 
	onfocus="if (this.value == 'Buscador libros') this.value = '';" onblur="if (this.value == '')
	this.value = 'Buscador libros';" name="libro-q" id="libro-q" type="text" onkeyup="javascript:autosuggest()"  onkeydown="javascript:quit()"/>
	
	<div class="autosuggest"  id="libro"> </div>
</div>
<div class="wrap_slider">
<ul id="slider1">
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
<?php if(!empty($info)){?>
<?php foreach($info as $row){?>
  <li>
    <div class="left">
      <a href="<?php echo base_url();?>seccion/ficha/<?php echo $row->id_libro;?>"><img src="<?php echo base_url();?>assets/portadas/<?php echo $row->img;?>"/></a>
    </div>
    <div class="right">
      <div class="album"><?php echo $row->titulo;?></div>
      <div class="band">
	<?php echo getSubString($row->descripcion,650);?>  
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