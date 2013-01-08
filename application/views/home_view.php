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
<div class="container">
 
<div class="wrap_slider">
<ul id="slider1">
<?php if(!empty($info)){?>
<?php foreach($info as $row){?>
  <li>
    <div class="left">
      <a href="<?php echo base_url();?>seccion/ficha/<?php echo $row->id_libro;?>"><img alt="<?php echo $row->titulo;?>" title="<?php echo $row->titulo;?>" src="<?php echo base_url();?>assets/portadas/<?php echo $row->img;?>"/></a>
    </div>
    <div class="right">
      <div class="album"><a href="<?php echo base_url();?>seccion/ficha/<?php echo $row->id_libro;?>"><?php echo $row->titulo;?></a></div>
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
	<h2>Enlaces de interés <a target="_blank" title="Anuncio Amazon"href="http://www.amazon.es"><img alt="promocion" class="floatright" src="<?php echo base_url();?>assets/images/300x250.gif"></a></h2>	
	<ul>
	<div id="enlaces"></div> 
	</ul>
	
</div><!--end container-->
</div>
<!-- ####### END MAIN CONTAINER #######  ?>-->
	
<script type="text/javascript">
// En la variable div_links obtenemos el contenedor div con el id 'links'
var div_links = document.getElementById('enlaces');
 
var xmlDoc = cargarXMLDoc('<?php echo base_url();?>assets/enlaces.xml');
 
if (xmlDoc != null) {
 
     // Obtenemos la lista de links
     var links_tag = xmlDoc.getElementsByTagName("lista")[0].getElementsByTagName("link");
 
     for (var i = 0; i < links_tag.length; i++) {
          // Obtenemos el título del link
          var titulo = links_tag[i].getElementsByTagName("titulo")[0].childNodes[0].nodeValue;
 
          // Obtenemos el hipervínculo del link
          var href = links_tag[i].getElementsByTagName("href")[0].childNodes[0].nodeValue;
 
          // Modificamos el contenido html del contenedor div
          div_links.innerHTML += "<li><a href=" + href + ">" + titulo + "</a></li>";
     }
}
 
function cargarXMLDoc(archivoXML)  {
     var xmlDoc;
 
     if (window.XMLHttpRequest) {
         xmlDoc = new window.XMLHttpRequest();
         xmlDoc.open("GET", archivoXML, false);
         xmlDoc.send("");
         return xmlDoc.responseXML;
     }
     // para IE 5 y IE 6
     else if (ActiveXObject("Microsoft.XMLDOM"))
     {
          xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
          xmlDoc.async = false;
          xmlDoc.load(archivoXML);
          return xmlDoc;
     }
 
     alert("Error cargando el documento.");
 
     return null;
}
</script>