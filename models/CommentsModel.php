<?php

namespace models;

use DateTime;
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
  public function getByMovie(int $id): array | null
  {
    $stmt = $this->getPdo()->prepare("SELECT * FROM comments WHERE movie_id=:id");
    $stmt->execute(["id" => $id]);
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }

  public function addComment(string $id, string $comment, string $name, string $date): void
  {
    $stmt = $this->getPdo()->prepare("INSERT INTO comments (movie_id, content, name, date) VALUES (:id, :comment, :name, :date)");
    $stmt->execute(["id" => $id, "comment" => $comment, "name" => $name, "date" => $date]);
  }

  public function deleteComment(int $id): void
  {
    $stmt = $this->getPdo()->prepare("DELETE FROM comments WHERE id=:id");
    $stmt->execute(["id" => $id]);
  }
}
