
<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
 	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
 		<title>PHP基礎</title>
 	</head>
 	<body>
 		<?php
 		try{

 		//接続
 		$code=$_POST['code'];

			$dsn='mysql:dbname=phpkiso;host=localhost';
			$user='root';
			$password='';
			$dbh=new PDO($dsn,$user,$password);
			$dbh->query('SET NAMES utf8');
		//指令（データを全部くださいというSQL）
			$sql='SELECT*FROM anketo2 WHERE code=?';
			$stmt=$dbh->prepare($sql);
			$data[]=$code;
			$stmt->execute($data);//$stmtに結果データが積み込まれます。
		
		while(1)
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
			}
			catch(Exception $e)
			{
				print 'ただいま障害により大変ご迷惑をおかけしております。';
			}
 		?>
 		<br>
 		<a href="kensaku.html">検索画面に戻る<a>
 	</body>
 </html>