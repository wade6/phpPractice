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
		<title>���������� </title>
	</head>
	
	<body>
		 
		  <h1> ����������Ϊ�� </h1>
			<h2> 
			<?php
				@ $fp= fopen("$DOCUMENT_ROOT/order/order.txt",'a');
				if(!$fp){
					echo "�ļ���ʧ�ܣ�";
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
					echo '���ƣ�'.$name.'<p/>';
					echo "������$num <p/>";
					echo "���ۣ�".PRICE."<P/>";
					$totalPrice = $num* PRICE;
					echo "�ܼ۸�:".number_format($totalPrice,2)."<P/>";
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