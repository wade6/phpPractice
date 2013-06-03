<?php
	require("../share/header.php");
?>


<?php
	$type = $_REQUEST["type"];
	$param = $_REQUEST["param"];
	
	if(!$type || !$param){
		echo '参数不对！';
		exit;
	}
	
	if(!get_magic_quotes_gpc()){
		$type = addslashes($type);
		$param = addslashes($param);
	}
	
	// 开启mysqli扩展，即把php.ini里的;extension=php_mysqli.dll前面的分号去掉
	$db = new mysqli('localhost','root','root','ace');
	
	if(mysqli_connect_errno()){
		echo '数据库连接失败！';
		exit;
	}
	
	$query= "select * from person where $type like '%$param%'";
	$result = $db->query($query);
	
	$result_num = $result->num_rows;
	
	echo "查询数量为：$result_num<br/>";
	
	for($i=0;$i<$result_num;$i++){
		$row = $result->fetch_assoc();
		echo "<br/>****************<br/>";
		echo "id:";
		echo stripslashes($row['id']);
		echo "<br/>create:";
		echo stripslashes($row['gmt_create']);
		echo "<br/>modify:";
		echo stripslashes($row['gmt_modified']);
		echo "<br/>名字:";
		echo stripslashes($row['name']);
		echo "<br/>年龄:";
		echo stripslashes($row['age']);
		echo "<br/>性别:";
		echo stripslashes($row['sex']);
	}
	
	$result->free();
	$db->close();
	
	
?>

<?php
	require("../share/footer.php");
?>