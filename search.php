<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>订单查询 </title>
	</head>
	
	<body>

<?php
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
/*
 * Created on 2013-6-1
 *
 * 读取文件
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 @ $fp= fopen("$DOCUMENT_ROOT/order/order.txt",'rb');
if(!$fp){
	echo "文件打开失败！";
	exit;
}
// 每次读取一行
//while(!feof($fp)){
//	echo fgets($fp)."<br/>";
//}
//


// 读取整个文件
//readfile("$DOCUMENT_ROOT/order/order.txt");

// 读取整个文件2
//fpassthru($fp);	

// 读取整个文件3 读到数组	
$contentArray = file("$DOCUMENT_ROOT/order/order.txt");
// foreach形式	
//foreach ( $contentArray as $v ) {
//       echo $v."<br/>";
//}
// while形式，获得key和value	
//while($element = each($contentArray)){
//	echo "key:".$element['key']." value:".$element['value']."<br/>";
//}	

while(list($key,$value) = each($contentArray)){
	echo "keys:".$key." value:".$value."<br/>";
}
fclose($fp);			
?>
</body>
	
</html>