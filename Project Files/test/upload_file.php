<script src='../jquery-3.4.1.js'></script>
<script>
</script>

<form action='#' method="POST" enctype='multipart/form-data'>
	<input type='file' name='fi'> <img name='imgg' onchange="readURL(this)"></img>
	<input type='submit'>
</form>
	
<?php
	$root=$_SERVER['DOCUMENT_ROOT'];

	$name=$_FILES['fi']['name'];
	$tmp_name=$_FILES['fi']['tmp_name'];
	$path=$root."/project/upload/gpu/".$name;
	
	move_uploaded_file($tmp_name,$path);
	
	
?>