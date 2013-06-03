<?php
/*
 * Created on 2013-6-2
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
$name = trim($_REQUEST['name']);
$email = trim($_REQUEST['email']);
$feedback = trim($_REQUEST['feedback']);

$myemail = "wade6@163.com";
$from = "From:myphp@php.com";

$subject="user feedback";
$Content = "name:$name\r\n".
			   "emial:$email\r\n".
			   "comments:$feedback\r\n";
if(isset($name)&&isset($email)&&isset($feedback)){
	// 发送邮件			   
	mail($myemail,$subject,$Content,$from);
}

?>

<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>反馈结果 </title>
	</head>
	
	<body>
		<h1>反馈成功！</h1>
		<?php
			echo "你反馈的内容是：<br/>";
			echo nl2br($feedback);
		?>
	</body>
	
</html>
