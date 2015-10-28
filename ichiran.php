
<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
 	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
 		<title>PHP基礎</title>
 	</head>
 	<body>
 		<?php
 		//接続
			$dsn='mysql:dbname=phpkiso;host=localhost';
			$user='root';
			$password='';
			$dbh=new PDO($dsn,$user,$password);
			$dbh->query('SET NAMES utf8');
		//指令（データを全部くださいというSQL）
			$sql='SELECT*FROM anketo2 WHERE1';
			$stmt=$dbh->prepare($sql);
			$stmt->execute();//$stmtに結果データが積み込まれます。
		
		while(1)//（１）は正数という意味。
		{
			$rec=$stmt->fetch(PDO::FETCH_ASSOC);//１レコード取り出し
			if ($rec==false)//もしデータがなければ、
			{
			break;//ループしてnullのところへ
			}
			print $rec['code'];//１レコード分のデータを表示する。
			print $rec['nickname'];
			
			print $rec['email'];
			print $rec['goiken'];
			print '<br>';
		}

		//切断
			$dbh=null;
 		?>
 		<br>
 		<a href="menu.html">メニューに戻る<a>
 	</body>
 </html>