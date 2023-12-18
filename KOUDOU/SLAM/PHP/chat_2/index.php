<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$name = trim(filter_input(INPUT_POST, 'name'));
			if(empty($name)){
				$erro = 'Nom est obligatoire';				
			}else{
				require("config/config.php");
				$chat = new Chat();
				$chat->setName($name);
				if($chat->existeName()){
					$erro = 'Existe quelqu\'un utilisant ce nom';
				}else{
					setcookie('name', $chat->getName(), time()+3600*24*TEMPO_LIMITE);
					header('location:chat-index.php');
				}				
			}			
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Entrer dans le système</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<body>
<h1>Login Chat lualuha</h1>

<?php 
	if(isset($erro)){
		printf('<p id="erro">%s</p>', $erro);
	}
?>

<form action="" method="post" id="frm-login">
<?php 	if(isset($_COOKIE['name'])): ?>
	<a href="chat-index.php">Si vous vous utilisez le même nom, cliquer ici</a>
<?php endif;?>
<fieldset>
<label> 
	<span>Nom</span> 
	<input type="text" name="name"	id="name" />
</label>
 <input type="submit" class="btn" value="Entrer" />
</fieldset>
</form>
</body>
</html>
