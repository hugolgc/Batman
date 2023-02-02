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

  function index(): string
  {
    $movies = $this->moviesModel->getAll();
    return Template::render("views/global/movies.php", array("movies" => $movies));
  }

  function show($id = 1): string
  {

    $id = $_GET['id'] ?? $id;

    $movie = $this->moviesModel->getOne($id);
    $actors = $this->actorsModel->getByMovie($id);
    $comments = $this->commentModel->getByMovie($id);
    return Template::render("views/global/home.php", array("movie" => $movie, "actors" => $actors, "comments" => $comments));
  }

  function addComment($id = null): string
  {
    $id = $_GET['id'] ?? $id;
    if ($id == null) return $this->show();
    $comment = $_POST['comment'] ?? '';
    $name = $_POST['name'] ?? '';
    $date = date("Y-m-d H:i:s");
    $this->commentModel->addComment($id, $comment, $name, $date);
    return $this->show($id);
  }

  function deleteComment($id = null): string
  {
    $id = $_GET['id'] ?? $id;
    if ($id == null) return $this->show();
    $this->commentModel->deleteComment($id);
    return $this->show();
  }
}
