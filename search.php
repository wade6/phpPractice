<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>������ѯ </title>
	</head>
	
	<body>

<?php
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
/*
 * Created on 2013-6-1
 *
 * ��ȡ�ļ�
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 @ $fp= fopen("$DOCUMENT_ROOT/order/order.txt",'rb');
if(!$fp){
	echo "�ļ���ʧ�ܣ�";
	exit;
}
// ÿ�ζ�ȡһ��
//while(!feof($fp)){
//	echo fgets($fp)."<br/>";
//}
//


// ��ȡ�����ļ�
//readfile("$DOCUMENT_ROOT/order/order.txt");

// ��ȡ�����ļ�2
//fpassthru($fp);	

// ��ȡ�����ļ�3 ��������	
$contentArray = file("$DOCUMENT_ROOT/order/order.txt");
// foreach��ʽ	
//foreach ( $contentArray as $v ) {
//       echo $v."<br/>";
//}
// while��ʽ�����key��value	
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