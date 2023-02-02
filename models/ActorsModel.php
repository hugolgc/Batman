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
  public function getByMovie(int $id): array|null
  {
    $stmt = $this->getPdo()->prepare("SELECT * FROM actors,actor_movie WHERE actor_movie.actor_id = actors.id and actor_movie.movie_id=:id");
    $stmt->execute(["id" => $id]);
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }

  public function getAllWithMovies(): array|null
  {
    $stmt = $this->getPdo()->prepare("SELECT actors.name, actors.image, actor_movie.name as role,movies.title FROM actors,actor_movie,movies WHERE actor_movie.actor_id = actors.id and actor_movie.movie_id = movies.id");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }

  public function addActor(string $name, string $image): void
  {
    $stmt = $this->getPdo()->prepare("INSERT INTO actors (name, image) VALUES (:name, :image)");
    $stmt->execute(["name" => $name, "image" => $image]);
  }

  public function deleteActor(int $id): void
  {
    $stmt = $this->getPdo()->prepare("DELETE FROM actors WHERE id=:id");
    $stmt->execute(["id" => $id]);
  }
}
