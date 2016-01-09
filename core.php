<?
require_once('config.php');

class Core {
	
	function getPosts() {
		$config = new CConfig();
		$db = new mysqli($config::$DBServer, $config::$DBUser, $config::$DBPass, $config::$DBName);
		$db->set_charset ('utf8');

		if($db->connect_errno > 0){
			die('Fallo al conectar a MySQL [' . $db->connect_error . ']');
		}
		
		if(!$result = $db->query("SELECT * FROM posts ORDER by id DESC")){
			die('Error ejecutando la consulta [' . $db->error . ']');
		}
		
		while($row = $result->fetch_assoc()){
			echo 'Post -> ' . $row['title'] . ' (' . $row['id'] . ') del día ' . date('j/n/Y', $row['date']) . ' por ' . $row['author'] . ': <br />'. $row['content'] . ' <br /><br />';
		}

		$db->close();
	}
}