<form method="POST" action="upload1.php" enctype="multipart/form-data">
<input type="file" name="userfile" />
<input type="submit" value="CLICK" />
</form>
<?php
# https://www.php.net/manual/en/function.is-uploaded-file.php
if (isset($_FILES['userfile']['tmp_name']))
{
	move_uploaded_file($_FILES['userfile']['tmp_name'],"/home/upload/".$_FILES['userfile']['name']); // vulnerable 
}
?>
