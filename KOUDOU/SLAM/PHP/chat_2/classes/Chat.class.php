<?php
class Chat{
	private $name;
	private $messages;
	private $tempoLimite;

	public function __construct(){
		$this->tempoLimite = TEMPO_LIMITE;
	}

	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function setMessages($msg){
		$this->messages = $msg;
	}
	public function getMessages(){
		return $this->messages;
	}

	public function inserer(){
		$strSQL = "INSERT INTO chat SET name = ?, messages = ? , dateheure = NOW()";
		$stmt  = BD::getConn()->prepare($strSQL);
		$data  = array($this->getName(), $this->getMessages());
		return $stmt->execute($data);
	}

	public function existeName(){
		$strSQL = "SELECT COUNT(name) FROM chat WHERE name = ?";
		$stmt  = BD::getConn()->prepare($strSQL);
		$data  = array($this->getName());
		$stmt->execute($data);
		return ($stmt->fetchColumn() > 0) ? true : false;
	}
	public function excluir(){
		$strSQL = "DELETE FROM chat WHERE DATE_ADD(dateheure, INTERVAL {$this->tempoLimite} DAY) < NOW()";
		$stmt   = BD::getConn()->query($strSQL);
	}
	public function lister(){
		$strSQL = "SELECT * FROM chat ORDER BY id DESC";
		return BD::getConn()->query($strSQL);
	}


}

?>



