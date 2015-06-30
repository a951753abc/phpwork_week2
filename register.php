<?php
	$check_code = rand(1,9).rand(1,9).rand(1,9).rand(1,9);
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<form action="login.php" method="post">
		account: <input type="text" name="account" value="name"><br>
		password: <input type="password" name="password"><br>
		sex: <input type="radio" value="0" name="sex">M |<input type="radio" value="1" name="sex">F<br>
		interesting: <input type="checkbox" name="interesting[]" value="0">computer |
		             <input type="checkbox" name="interesting[]" value="1">comic |
		             <input type="checkbox" name="interesting[]" value="2">study <br>
		country:
			<select name="country">
				<option value="0">Taipei</option>
				<option value="1">Taina</option>
				<option value="2">akibahara</option>
				<option value="3">nijiken</option>
			</select><br>
		else: <textarea name="else"></textarea><br>
		plz input the check code <font color="#FF0000"><?=$check_code?></font>:
		<input type="hidden" name="check_code" value="<?=$check_code?>">
		<input type="text" name="check_code_input"> <br>
		<input type="submit" value="Next">
	</form>
</body>
</html>
