<?
require_once('config.php');
require_once('core.php');
$config = new CConfig();
$core = new Core();

header("Content-Type: text/html;charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Blog | Cadiducho.com</title>
</head>
<body>
	<div class="content">
	
		<? $core->getPosts(); ?>
		
		<br>
	</div>
	<div class="footer">
		<div class="footerContent"><p></p></div>
	</div>
</body>
</html>