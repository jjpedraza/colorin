<?php
require("colorin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test de ColorIN</title>
</head>
<body>
	<ul>
		<li style='color: <?php echo Colorin_Search('Rosa', "hex");?>; '>Rosa </li>
		<li style='color: <?php echo Colorin_Search('Rosa', "hex");?>; '>Rosa </li>
		<li style='color: <?php echo Colorin_Search('Rosa', "hex");?>; '>Rosa </li>
		<li style='color: <?php echo Colorin_Search('Rosa', "hex");?>; '>Rosa </li>
		<li style='color: <?php echo Colorin_Search('Rosa', "hex");?>; '>Rosa </li>
		<li style='color: <?php echo Colorin_Search('Rosa', "hex");?>; '>Rosa </li>
		<li style='color: <?php echo Colorin_Rand();?>; '>Aleatorio </li>
		
	</ul>


	<?php
	// echo Colorin_Search("Rosa","hex",TRUE);

	?>

</body>
</html>