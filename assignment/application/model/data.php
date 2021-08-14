<?php
	$dir = 'sqlite:./db/data.db';
	$dbh = new PDO($dir) or die("cannot open database");
	try{
		$query = "SELECT * FROM desc";
		$data = $dbh->query($query);
		$result = null;
		$i = -0;
		while ($d = $data->fetch()) {
            $result[$i]['name'] = $d['name'];
            $result[$i]['content']= $d['content'];
			$i++;
		}
	}
	catch (PD0EXception $e) {
		print new Exception($e->getMessage());
	}
	$dbh = NULL;
	ChromePhp::log($result);
	echo json_encode($result);
?>