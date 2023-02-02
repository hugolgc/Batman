<?php

namespace models;

use models\base\SQL;

class CommentsModel extends SQL
{
  public function __construct()
  {
    parent::__construct('comments', 'id');
  }

  /**
   * Méthode d'exemple permettant l'accès aux données avec une
   * requête préparée.
   */
  public function getByMovie(int $id): \stdClass | null
  {
    $stmt = $this->getPdo()->prepare("SELECT * FROM comments WHERE movie_id=:id");
    $stmt->execute(["id" => $id]);
    $res = $stmt->fetch(\PDO::FETCH_OBJ);
    if ($res) return $res;
    return null;
    // $stmt = $this->getPdo()->prepare("SELECT * FROM comments WHERE movie_id=:id");
    // $stmt->execute(["id" => $id]);
    // return $stmt->fetch(\PDO::FETCH_OBJ);
  }
}
