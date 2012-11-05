 
<ul class="contactlist">
<?php  
if(strlen($searchq)>0){
if (!empty($posibles)){
foreach($posibles as $row):?> 
	<li><a href="<?php echo base_url();?>seccion/ficha/<?php echo $row->id_libro;?>"><img width="28"src="<?php echo base_url();?>assets/portadas/<?php echo $row->img;?>" alt="" /> <span><?php echo $row->titulo;?></span></a></li>
<?php endforeach;}}?>
</ul>
