<?php

namespace routes;

use controllers\ActorsController;
use controllers\GalleryController;
use controllers\MovieController;
use controllers\SampleWebController;
use routes\base\Route;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();
        $movieController = new MovieController();
        $actorController = new ActorsController();
        $galleryController = new GalleryController();

        Route::Add('/', [$main, 'home']);
        Route::Add('/movies', [$movieController, 'index']);
        Route::Add('/movies/:id', [$movieController, 'show']);
        Route::Add('/actors', [$actorController, 'index']);
        Route::Add('/pictures', [$galleryController, 'index']);




        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}
