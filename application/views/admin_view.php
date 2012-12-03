<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<META name="robots" content="NOINDEX,NOFOLLOW">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
		<a href='<?php echo site_url('admin/libros_admin')?>'>Libros</a> |
		<a href='<?php echo site_url('admin/temas_admin')?>'>Temas</a> |
		<a href='<?php echo site_url('admin/comentarios_admin')?>'>Comentarios</a> |

	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
