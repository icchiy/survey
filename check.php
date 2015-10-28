<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>
	<body>
		<?php 
		$dsn='mysql:dbname=phpkiso;host=localhost';
		$user='root';
		$password='';
		$dbh=new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');

		
			$nickname=$_POST['nickname'];
			$email=$_POST['email'];
			$goiken=$_POST['goiken'];

			$nickname=htmlspecialchars($nickname);
			$email=htmlspecialchars($email);
			$goiken=htmlspecialchars($goiken);


				if($nickname==''){
				echo'<span style="color:red;">';
				echo'ニックネームが入力されていません。<br>';
                echo '</span>';
                echo'<br>';	
				}
				else{
                echo 'ようこそ';
                echo $nickname;
                echo'様';
                echo '』<br>';
                }
				if($email==''){
				echo '<span style="color:red;">';
				echo'メールアドレスが入力されていません。<br>';
                echo '</span>';
                echo'<br>';	
				}
				else{
                echo 'メールアドレス：';
                echo $email;
                echo '<br>';
                }
				if($goiken==''){
				echo '<span style="color:red;">';
				echo'ご意見が入力されていません。<br>';
                echo '</span>';
                echo'<br>';	
				}
				else{
                echo 'ご意見『';
                echo $goiken;
                echo '』<br>';
                 echo '<br>';
                }
				
				// echo '<a href="index.html">戻る</a>';これを試用すると『戻る』ボタンを押すと入力したデータも消える。
				
				
				if($nickname==''||$email==''||$goilen='')
				{
				echo'<form>';
				echo'<input type="button" onclick="history.back()" value="戻る">';
				echo'</form>';
				}
				else
				{
				echo'<form method="post" action="thanks.php">';
				echo'<input name="nickname" type="hidden" value="'.$nickname.'">';
				echo'<input name="email" type="hidden" value="'.$email.'">';
				echo'<input name="goiken" type="hidden" value="'.$goiken.'">';
				echo'<input type="button" onclick="history.back()" value="戻る">';
				echo'<input type="submit" value="OK">';
				echo'</form>';
				}

				$sql='INSERT INTO anketo2(nickname,email,goiken)VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
				$stmt=$dbh->prepare($sql);
				$stmt->execute();
				$dbh=null;
				?>

	</body>
</html>