<?php
    //POST資料有無處理
    $check_flag = 0;
    if(isset($_POST)){
    	if (isset($_POST['account']) && isset($_POST['password']) && isset($_POST['sex']) && isset($_POST['interesting']) && isset($_POST['country'])
    		&& isset($_POST['else']) && isset($_POST['check_code_input'] )){
    		if($_POST['check_code_input'] == $_POST['check_code']){
    			$check_flag = 1;
    			$data = serialize($_POST);
    		}
    	}
    	elseif(isset($_POST['data'])){
    		$check_flag = 1;
    		$data = $_POST['data'];
    	}
    }

?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<? if($check_flag==1):?>
		Login: <br>
		<form action="show.php" method="post">
			account: <input type="text" name="login_account" value="name"><br>
			password: <input type="password" name="login_password"><br>
			<input type="hidden" name="data" value='<?=$data?>'>
			<input type="submit" value="Next">
		</form>
	<? else:?>
		請正確輸入各欄資料。
		<form action="register.php" method="post">
			<input type="submit" value="Back">
		</form>
	<? endif;?>
</body>
</html>

