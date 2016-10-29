<?php
	//This was an experiment, as such, it is using the old mysql library
	$server = ""; $user = ""; $password = ""; $db = "";
	$mysql = mysql_connect($server, $user, $password);
	mysql_select_db($db, $mysql);
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
	mysql_query("SET character_set_results=utf8");
	if(isset($_POST['name']))
	{
		$name = mysql_real_escape_string($_POST['name']);
		$desc = mysql_real_escape_string($_POST['desc']);
		$res = json_encode(json_decode($_POST['json']));
		echo $name;
		echo
		mysql_query("INSERT INTO `supa`(`nazev`, `popis`, `obsah`, `when`) VALUES ('" . $name . "', '" . $desc . "',' ". $res . "', now())") or die(mysql_error());
		echo "1"; //high level api
	} else if(isset($_GET['id']))
	{
		$id = mysql_real_escape_string($_GET["id"]);
		$query = mysql_query('SELECT * FROM `supa` WHERE `id` = ' . $id);
		$query = mysql_fetch_assoc($query);
		echo $query['obsah'];
	}else if(isset($_GET["getlevels"]))
	{
		$query = mysql_query('SELECT * FROM  `supa`');
		$i = 0;
		while($fetch = mysql_fetch_assoc($query))
		{
			$arr[$i] = array($fetch['nazev'], $fetch['id'], $fetch['popis'], $fetch['when']);
			$i++;
		}
		echo json_encode($arr, JSON_UNESCAPED_UNICODE);
	}
	mysql_close();
?>