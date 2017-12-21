<?php
/**
* 
*/
class User
{
	private $nom = "Doe";
	private $prenom = "John";
	private $email = "john.doe@domain.fr";
	private $password = "jajaja";

	function get_email(){
		return $this->email;
	}

	function get_password(){
		return $this->password;
	}

	function get_nom(){
		return $this->nom;
	}

	function get_prenom(){
		return $this->prenom;
	}
	
}