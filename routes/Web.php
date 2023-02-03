<?php

namespace routes;

use controllers\ActorsController;
use controllers\EditController;
use controllers\GalleryController;
use controllers\LoginController;
use controllers\MovieController;
use controllers\SampleWebController;
use routes\base\Route;
use utils\SessionHelpers;
use utils\Template;

class Web
{
  function __construct()
  {
    $main = new SampleWebController();
    $movieController = new MovieController();
    $actorController = new ActorsController();
    $galleryController = new GalleryController();
    $loginController = new LoginController();
    $editController = new EditController();

    Route::Add('/', [$main, 'home']);
    Route::Add('/movies', [$movieController, 'index']);
    Route::Add('/movies/{id}', [$movieController, 'show']);
    Route::Add('/actors', [$actorController, 'index']);
    Route::Add('/pictures', [$galleryController, 'index']);
    Route::Add('/login', [$loginController, 'index']);
    Route::Add('/logout', [$loginController, 'logout']);
    Route::Add('/register', [$loginController, 'register']);
    if (SessionHelpers::isLogin()) {
      Route::Add('/editMovie/{id}', [$movieController, 'editMovie']);
      Route::Add('/editMovie', [$editController, 'index']);
    }

    //        Exemple de limitation d'accès à une page en fonction de la SESSION.
    //        if (SessionHelpers::isLogin()) {
    //            Route::Add('/logout', [$main, 'home']);
    //        }
  }
}
