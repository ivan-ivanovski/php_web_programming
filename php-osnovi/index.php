<!DOCTYPE html>
<?php
	$openDir=dirname(__FILE__);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Test Zona</title>
</head>
<body>

		<?php foreach(scandir($openDir) as $file=>$fileName):?>
			<?php if($fileName!="."&&$fileName!=".."):?>
				<a href="<?=$fileName;?>"><?=$fileName."<br>";?></a>
			<?php endif;?>
		<?php endforeach;?>
	
</body>
</html>