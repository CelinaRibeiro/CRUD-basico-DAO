<?php
class Usuario {
    private $id;
    private $nome;
    private $email;

	public function getId() { 
 		return $this->id; 
	} 
	public function setId($id) {  
		$this->id = trim($id); 
	} 
	public function getNome() { 
 		return $this->nome; 
	} 
	public function setNome($nome) {  
		$this->nome = ucwords(trim($nome)); 
	} 
	public function getEmail() { 
 		return $this->email; 
	} 
	public function setEmail($email) {  
		$this->email = strtolower(trim($email)); 
	} 
}

interface UsuarioDAO {
	public function add(Usuario $u);
	public function findAll();
	public function findByEmail($email);
	public function findById($id);
	public function update(Usuario $u);
	public function delete($id);
}