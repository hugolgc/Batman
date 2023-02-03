<?php

namespace controllers;

use controllers\base\WebController;
use models\ActorsModel;
use utils\Template;

class ActorController extends WebController
{

  public $actorsModel;

  function __construct()
  {
    $this->actorsModel = new ActorsModel();
  }

  function index(): string
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
    return Template::render("views/global/actors.php", array("actors" => $actorsWithMovies));
  }

  function adminIndex(): string
  {
    $actors = $this->actorsModel->getAll();
    return Template::render('views/global/admin/actors.php', ['actors' => $actors]);
  }

  function adminEdit($id = 0): string
  {
    if (!empty($_POST)) {
      $this->actorsModel->updateOne($id, $_POST);
    }

    $actor = $this->actorsModel->getOne($id);
    return Template::render('views/global/admin/actors-edit.php', ['actor' => $actor]);
  }

  function adminDelete($id = 0): void
  {
    $this->actorsModel->deleteOne($id);
    header('Location: /admin/actors');
  }

  function addActor(): string
  {
    $name = $_POST['name'] ?? '';
    $image = $_POST['image'] ?? '';
    $this->actorsModel->addActor($name, $image);
    return $this->index();
  }

  function deleteActor($id = null): string
  {
    $id = $_GET['id'] ?? $id;
    if ($id == null) return $this->index();
    $this->actorsModel->deleteActor($id);
    return $this->index();
  }
}
