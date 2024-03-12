<?php
function __autoload($classe){
	$pagina = sprintf('classes/%s.class.php', $classe);
	if(file_exists($pagina)){
		require_once($pagina);
	}
}
?>