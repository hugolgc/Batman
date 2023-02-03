<?php

namespace models;

use models\base\SQL;

class LoginModel extends SQL
{
  public function __construct()
  {
    parent::__construct('users', 'id');
  }

  /**
   * Méthode d'exemple permettant l'accès aux données avec une
   * requête préparée.
   */

  public function getUser(string $username, string $password): bool
  {
    $stmt = $this->getPdo()->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
    $stmt->execute(["username" => $username, "password" => $password]);
    $user = $stmt->fetch(\PDO::FETCH_OBJ);
    if ($user) {
      return true;
    }
    return false;
  }

  public function addUser(string $username, string $password): void
  {
    $stmt = $this->getPdo()->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute(["username" => $username, "password" => $password]);
  }
}
