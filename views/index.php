<?php require "layout/header.php"; ?>
<a href="index.php?m=new">Nuevo</a>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Acción</td>
	</tr>
	    <?php 
	    foreach ($dato as $key => $value)
	        foreach ($value as $va ):
	            echo "<tr><td>".$va['id']."</td><td>".$va['name']."</td><td>S./".$va['price']."</td>";
	        	echo "<td><a href='index.php?m=edit&id=".$va['id']."'>ACTUALIZAR</a> <a href='index.php?m=delete&id=".$va['id']."'>ELIMINAR</a></td>";
	        	echo "</tr>";
	        endforeach;
	    ?>
</table>
<?php require "layout/footer.php" ?>
