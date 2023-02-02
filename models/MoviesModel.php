<?php

namespace models;

use models\base\SQL;

class MoviesModel extends SQL
{
  public function __construct()
  {
    parent::__construct('movies', 'id');
  }

  /**
   * Méthode d'exemple permettant l'accès aux données avec une
   * requête préparée.
   */
  public function getSampleData(string $filterEl): \stdClass
  {
    $stmt = $this->getPdo()->prepare("SELECT * from `movies` WHERE col = ?");
    $stmt->execute([$filterEl]);
    return $stmt->fetch(\PDO::FETCH_OBJ);
  }
}
