<?php

namespace controllers;

use controllers\base\WebController;
use models\ActorsModel;
use models\CommentsModel;
use models\MoviesModel;
use utils\Template;

class EditController extends WebController
{
  public $moviesModel;

  function __construct()
  {
    $this->moviesModel = new MoviesModel();
  }

  function index(): string
  {
    $movies = $this->moviesModel->getAll();
    return Template::render("views/global/edit.php", array("movies" => $movies));
  }
}
