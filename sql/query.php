<?php
	require("../share/header.php");
?>


<?php
	$type = $_REQUEST["type"];
	$param = $_REQUEST["param"];
	
	if(!$type || !$param){
		echo '�������ԣ�';
		exit;
	}
	
	if(!get_magic_quotes_gpc()){
		$type = addslashes($type);
		$param = addslashes($param);
	}
	
	// ����mysqli��չ������php.ini���;extension=php_mysqli.dllǰ��ķֺ�ȥ��
	$db = new mysqli('localhost','root','root','ace');
	
	if(mysqli_connect_errno()){
		echo '���ݿ�����ʧ�ܣ�';
		exit;
	}
	
	$query= "select * from person where $type like '%$param%'";
	$result = $db->query($query);
	
	$result_num = $result->num_rows;
	
	echo "��ѯ����Ϊ��$result_num<br/>";
	
	for($i=0;$i<$result_num;$i++){
		$row = $result->fetch_assoc();
		echo "<br/>****************<br/>";
		echo "id:";
		echo stripslashes($row['id']);
		echo "<br/>create:";
		echo stripslashes($row['gmt_create']);
		echo "<br/>modify:";
		echo stripslashes($row['gmt_modified']);
		echo "<br/>����:";
		echo stripslashes($row['name']);
		echo "<br/>����:";
		echo stripslashes($row['age']);
		echo "<br/>�Ա�:";
		echo stripslashes($row['sex']);
	}
	
	$result->free();
	$db->close();
	
	
?>

<?php
	require("../share/footer.php");
?>