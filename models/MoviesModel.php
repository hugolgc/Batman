<?php

namespace models;

use models\base\SQL;

class MoviesModel extends SQL
{
  public function __construct()
  {
    parent::__construct('movies', 'id');
  }

  public function editMovie($id, $title, $date, $poster, $banner, $tailer, $synopsis, $story, $note, $budget, $recipe, $time)
  {
    $this->updateOne($id, array(
      'title' => $title,
      'date' => $date,
      'poster' => $poster,
      'banner' => $banner,
      'tailer' => $tailer,
      'synopsis' => $synopsis,
      'story' => $story,
      'note' => $note,
      'budget' => $budget,
      'recipe' => $recipe,
      'time' => $time
    ));
  }
}
