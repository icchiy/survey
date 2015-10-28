<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>
	<body>
		<?php 
				$onamae=$_POST['onamae'];
				$hurigana=$_POST['hurigana'];
				$sample=$_POST['sample'];
				$address=$_POST['address'];
				$phone=$_POST['phone'];
				$mail=$_POST['mail'];
				$school=$_POST['school'];
				$question=$_POST['question'];
			
			if($onamae=='')
			
			{
				print'お名前が入力されていません。<br>';
			}
				else
				{
				print $_POST['onamae'];
				print'様';
				print'ご入力ありがとうございました。<br>';	

				}

				if($hurigana=='')
			
			{
				print'フリガナが入力されていません。<br>';
			}
				else
				{
				print $_POST['hsample'];
				print '学年';
				print'<br>';	

				}

				if($sample=='')
			
			{
				print'学年が入力されていません。<br>';
			}
				else
				{
				print $_POST['sample'];
				print $sample;
				print'<br>';	

				}

				if($address=='')
			
			{
				print'住所が入力されていません。<br>';
			}
				else
				{
				print $_POST['address'];
				print $address;
				print'<br>';	

				}

				if($phone=='')
			
			{
				print'電話番号が入力されていません。<br>';
			}
				else
				{
				print $_POST['phone'];
				print $phone;
				print'<br>';	

				}

				if($mail=='')
			
			{
				print'Eメールが入力されていません。<br>';
			}
				else
				{
				print $_POST['mail'];
				print $mail;
				print'<br>';	

				}
				if($school=='')
			
			{
				print'学校名が入力されていません。<br>';
			}
				else
				{
				print $_POST['school'];
				print $school;
				print'<br>';	

				}

				if($question=='')
			
			{
				print'質問・コメントが入力されていません。<br>';
			}
				else
				{
				print $_POST['question'];
				print $question;
				print'<br>';	

				}

?>


	</body>
</html>