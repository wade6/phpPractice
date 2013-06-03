<?php
	require("../share/header.php");
?>

<?php
	$name=$_REQUEST['name'];
	$age=$_REQUEST['age'];
	$sex=$_REQUEST['sex'];
	
	if(!$name || !$age || !$sex){
		echo 'param is  null!';
		exit;
	}
	
	if(!get_magic_quotes_gpc()){
		$name = addslashes($name);
		$age = addslashes($age);
		$sex = addslashes($sex);
	}
	
	$db = new mysqli('localhost','root','root','ace');
	
	if(mysqli_connect_errno()){
		echo '数据库连接失败！';
		exit;
	}
	
	$query = "insert into person values (NULL,now(),now(),'$name','$age','$sex')";
	
	$result = $db->query($query);
	
	if($result){
		echo " insert success!";
	}else{
		echo "insert fail!";
	}
	
	$db->close();
	
?>

<?php
	require("../share/footer.php");
?>
