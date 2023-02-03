<?php

namespace routes;

use controllers\ActorController;
use controllers\EditController;
use controllers\GalleryController;
use controllers\LoginController;
use controllers\MovieController;
use controllers\SampleWebController;
use routes\base\Route;
use utils\SessionHelpers;

class Web
{
  function __construct()
  {
    $main = new SampleWebController();
    $movieController = new MovieController();
    $actorController = new ActorController();
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
      Route::Add('/editMovie', [$editController, 'index']);
      Route::Add('/editMovie/{id}', [$movieController, 'editMovie']);

      Route::Add('/admin/movies', [$movieController, 'adminIndex']);
      Route::Add('/admin/movies/edit/{id}', [$movieController, 'adminEdit']);
      Route::Add('/admin/movies/delete/{id}', [$movieController, 'adminDelete']);

      Route::Add('/admin/actors', [$actorController, 'adminIndex']);
      Route::Add('/admin/actors/edit/{id}', [$actorController, 'adminEdit']);
      Route::Add('/admin/actors/delete/{id}', [$actorController, 'adminDelete']);
    }
  }
}
