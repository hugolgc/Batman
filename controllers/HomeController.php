<?php

namespace controllers;

use controllers\base\WebController;
use models\MoviesModel;
use utils\Template;

class HomeController extends WebController
{

  public $moviesModel;

  function __construct()
  {
    $this->moviesModel = new MoviesModel();
  }

  function home(): string
  {
    $movies = $this->moviesModel->getAll();
    return Template::render("views/global/home.php", array("movies" => $movies));
  }
}
