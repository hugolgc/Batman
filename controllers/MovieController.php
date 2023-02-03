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

  function editMovie($id = null): string
  {
    $id = $_GET['id'] ?? $id;
    if ($id == null) return $this->redirect('/');
    if (isset($_POST['title']) && isset($_POST['banner']) && isset($_POST['tailer'])) {

      $title = $_POST['title'] ?? '';
      $date = $_POST['date'] ?? '';
      $poster = $_POST['poster'] ?? '';
      $banner = $_POST['banner'] ?? '';
      $tailer = $_POST['tailer'] ?? '';
      $synopsis = $_POST['synopsis'] ?? '';
      $story = $_POST['story'] ?? '';
      $note = $_POST['note'] ?? '';
      $budget = $_POST['budget'] ?? '';
      $recipe = $_POST['recipe'] ?? '';
      $time = $_POST['time'] ?? '';


      $this->moviesModel->editMovie($id, $title, $date, $poster, $banner, $tailer,  $synopsis, $story, $note, $budget, $recipe, $time);
      return $this->redirect('/editMovie');
      return $this->redirect('/editMovie/' . $id);
    }
    $actors = $this->actorsModel->getByMovie($id);
    $movie = $this->moviesModel->getOne($id);
    return Template::render("views/global/editMovie.php", array("movie" => $movie, "actors" => $actors));
  }
}
