<?php

require_once('model/Manager.php');

class user extends Manager
{/*
    public function newUser($username, $email, $password){

        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO user(username, email, password) VALUES(?, ?, ?)');
        $addedUser = $req->execute(array($username, $email, $password));
        return $addedUser;
	}
*/

	public function newUser($username, $email, $password)
		{

		$db = $this->dbConnect();
		$stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
		$stmt2 = $db->prepare("SELECT * FROM user WHERE email = ?");
		$stmt->execute([$_POST['username']]);
		$stmt2->execute([$_POST['email']]);
		$user = $stmt->fetch();
		$mail = $stmt2->fetch();

		if ($user == 0)
		{
			if ($mail == 0)
			{
					$req = $db->prepare('INSERT INTO user(username, email, password) VALUES(?, ?, ?)');
					$addedUser = $req->execute(array($username, $email, $password));
					return $addedUser;
			}
			else{
				echo "Mail already taken";
			}
		}
		else{
			echo "User already taken";
		}
	}
	public function login($username, $email, $password){

		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM user');
		$loggedUser = $req->execute(array($username, $email, $password));
		return $loggedUser;
	}
}





/* Faire toute les verif dans le model et recup dans le controller pour envoyer à la vue */

/*
Faire fonction register dans le model
Page view register.php
Traitement post du formulaire de register.php
Faire un controller qui prend les info du form, les envoie dans la bdd puis redirige vers la page home.

Faire fonction login dans le model
Login sera dans le header, no login.php
Traitement post du form du login
Faire un controller qui prend les données du form et vérifie si elles sont idem dans la bdd
renvoyer vers la page home.

$_SESSION['username'] = $username;  <- yes


Si le get n'existe pas renvoyer sur page home : A VOIR
*/


