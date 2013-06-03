<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>php 数据库连接测试</title>
	</head>
	
	<body>
		<?php 
		$connect=mysql_connect("127.0.0.1","root","root"); 
		if(!$connect) echo "Mysql Connect Error!"; 
		else echo "mysql Connect sucess! 中文"; 
		mysql_close(); 
		?> 
	</body>
	
</html>