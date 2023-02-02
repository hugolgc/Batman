<?php

namespace controllers;

use controllers\base\WebController;
use models\ActorsModel;
use models\CommentsModel;
use models\GalleryModel;
use models\MoviesModel;
use utils\Template;

class GalleryController extends WebController
{

  public $galleryModel;

  function __construct()
  {
    $this->galleryModel = new GalleryModel();
  }

  function index(): string
  {

    $pictures = $this->galleryModel->getAll();
    return Template::render("views/global/pictures.php", array("pictures" => $pictures));
  }
}
