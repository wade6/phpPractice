<?php
	define('PRICE',3);
	$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
	// $name = $_POST['name'];
	// $num = $_POST['num'];
	$name = $_REQUEST['name'];
	$num = $_REQUEST['num'];
	$date = date('H:i,jS F');
?>

<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>订单处理结果 </title>
	</head>
	
	<body>
		 
		  <h1> 订单处理结果为： </h1>
			<h2> 
			<?php
				@ $fp= fopen("$DOCUMENT_ROOT/order/order.txt",'a');
				if(!$fp){
					echo "文件打开失败！";
					exit;
				}
				fwrite($fp,$name);
				fwrite($fp,"\t");
				fwrite($fp,$num);
				fwrite($fp,"\r\n");
				
				fclose($fp);
				
			?>
				<?php
					echo $_SERVER["HTTP_HOST"];
					echo '<p> order process </p>';
					echo '名称：'.$name.'<p/>';
					echo "数量：$num <p/>";
					echo "单价：".PRICE."<P/>";
					$totalPrice = $num* PRICE;
					echo "总价格:".number_format($totalPrice,2)."<P/>";
					//echo "cookie:".$_COOKIE."<p/>";
					//echo "session:".$_SESSION."<p/>";
					echo <<<start_mark
							aaaaa<br>
							$num
							bbbb<br>
							cccc<br>
start_mark;
				?>
			</h2>
			<?php
					echo $date;
				?>
			
		 
	</body>
	
</html>