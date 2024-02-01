<?php require "layout/header.php"; ?>
<h1>NUEVO</h1>
<hr>
<form action="">
	<label for="">NOMBRE</label> <br>
	<input type="text" name="name"><br>
	<label for="">PRECIO</label><br>
	<input type="text" name="price"><br>
	<input type="submit" name="btn">
	<input type="hidden" name="m" value="save">
</form>
<?php require "layout/footer.php" ?>