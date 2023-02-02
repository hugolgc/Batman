<?php

namespace controllers;

use controllers\base\WebController;
use models\ActorsModel;
use utils\Template;

class ActorsController extends WebController
{

  public $actorsModel;

  function __construct()
  {
    $this->actorsModel = new ActorsModel();
  }



  function show(): string
  {

    $actors = $this->actorsModel->getAllWithMovies();
    $actorsWithMovies = [];
    foreach ($actors as $actor) {
      $actorsWithMovies[$actor->name] = $actor;
      $actorsWithMovies[$actor->name]->movies = [];
    }
    foreach ($actors as $actor) {
      $actorsWithMovies[$actor->name]->movies[] = $actor->title;
    }
    return Template::render("views/global/gallery.php", array("images" => $actorsWithMovies));
  }

  function addActor(): string
  {
    $name = $_POST['name'] ?? '';
    $image = $_POST['image'] ?? '';
    $this->actorsModel->addActor($name, $image);
    return $this->show();
  }

  function deleteActor($id = null): string
  {
    $id = $_GET['id'] ?? $id;
    if ($id == null) return $this->show();
    $this->actorsModel->deleteActor($id);
    return $this->show();
  }
}
