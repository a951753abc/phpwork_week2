<?php
	$check_flag = 0;
	$register_data = unserialize($_POST['data']);
	if( ($_POST['login_account'] == $register_data['account']) && ($_POST['login_password'] == $register_data['password']) ){
		$check_flag = 1;
	}
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<? if($check_flag==1):?>
		Login: <br>
		<form action="show.php" method="post">
			<? foreach ($register_data as $key => $value) :?>
				<? if($key=='interesting') :?>
					interesting:
					<?php foreach ($value as $key2 => $value2): ?>
						<?php switch($value2):
						    case '0': ?>
                                computer |
							<?php break;?>
							<?php case '1': ?>
	                            comic |
							<?php break;?>
							<?php case '2': ?>
	                            study |
							<?php break;?>
						<?php endswitch;?>
					<?php endforeach ?>
					<br>
				<? elseif($key=='sex'):?>
					sex:
					<?=($value==0)?'M':'F'?>
					<br>
				<? elseif($key=='country'):?>
					country:
					<? switch($value):
					    case '0': ?>
                            Taipei
						<?break;?>
						<?case '1': ?>
                            Taina
						<?break;?>
						<?case '2': ?>
                            akibahara
						<?break;?>
						<?case '3':?>
							nijiken
						<? break;?>
					<? endswitch;?>
					<br>
				<? else:?>
					<?=$key.":".$value."<BR>";?>
				<? endif;?>
			<? endforeach;?>
		</form>
	<? else:?>
		請正確輸入帳號密碼。
		<form action="login.php" method="post">
			<input type="hidden" name="data" value='<?=$data?>'>
			<input type="submit" value="Back">
		</form>
	<? endif;?>
</body>
</html>
