<?php require "layout/header.php" ?>
<h1>NUEVO</h1>
<hr>
<form action="">
	<?php foreach ($dato as $value): ?>
		<?php  foreach ($value as $v ): ?>
		<label for="">NOMBRE</label> <br>
		<input type="text" name="name" value="<?php echo $v['name'] ?>"><br>
		<label for="">PRECIO</label><br>
		<input type="text" name="price" value="<?php echo $v['price'] ?>"><br>	
		<input type="hidden" name="id" value="<?php echo $v['id'] ?>">
		<input type="submit" name="btn" value="ACTUALIZAR">
		<?php endforeach ?>
	<?php endforeach ?>
	<input type="hidden" name="m" value="update">
</form>
<?php require "layout/footer.php" ?>
