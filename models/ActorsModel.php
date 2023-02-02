<?php

namespace models;

use models\base\SQL;

class ActorsModel extends SQL
{
  public function __construct()
  {
    parent::__construct('actors', '');
  }

  /**
   * Méthode d'exemple permettant l'accès aux données avec une
   * requête préparée.
   */
  public function getByMovie(int $id): \stdClass
  {
    $stmt = $this->getPdo()->prepare("SELECT * FROM actors,actor_movie WHERE actor_movie.actor_id = actors.id and actor_movie.movie_id=:id");
    $stmt->execute(["id" => $id]);
    return $stmt->fetch(\PDO::FETCH_OBJ);
  }
}
