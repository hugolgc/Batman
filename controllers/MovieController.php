<?php

namespace controllers;

use controllers\base\WebController;
use models\ActorsModel;
use models\CommentsModel;
use models\MoviesModel;
use utils\Template;

class MovieController extends WebController
{

  public $moviesModel;
  public $actorsModel;
  public $commentModel;

  function __construct()
  {
    $this->moviesModel = new MoviesModel();
    $this->actorsModel = new ActorsModel();
    $this->commentModel = new CommentsModel();
  }



  function show($id = 1): string
  {

    $id = $_GET['id'] ?? $id;

    $movie = $this->moviesModel->getOne($id);
    $actors = $this->actorsModel->getByMovie($id);
    $comments = $this->commentModel->getByMovie($id);
    return Template::render("views/global/home.php", array("movie" => $movie, "actors" => $actors, "comments" => $comments));
  }
}
