<?php
	require('config/config.php');
	$chat = new Chat();
		switch ($_POST['acao']){
		case 'inserer':
			$chat->excluir();
			$chat->setName($_COOKIE['name']);
			$chat->setMessages(filter_input(INPUT_POST, 'messages'));
			if($chat->inserer()){
				printf('<p class="ativo">[%s] - %s</p>', $chat->getName(), $chat->getMessages());
			}
		break;
		
		case 'atualiser':
			foreach($chat->lister() as $v){
				$ativo = ($v['name'] == $_COOKIE['name']) ? ' class="ativo"' : '';
				printf('<p%s>[%s] - %s</p>', $ativo, $v['name'] ,$v['messages']);
			}
		break;
	}
	?>