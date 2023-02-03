<?php

namespace controllers;

use controllers\base\WebController;
use models\ActorsModel;
use models\CommentsModel;
use models\GalleryModel;
use models\LoginModel;
use models\MoviesModel;
use utils\SessionHelpers;
use utils\Template;

class LoginController extends WebController
{
  public $loginModel;

  function __construct()
  {
    $this->loginModel = new LoginModel();
  }

  function index(): string
  {
    if (isset($_POST['username']) && isset($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $passwordHash = hash('sha256', $password);
      $user = $this->loginModel->getUser($username, $passwordHash);
      if ($user) {
        SessionHelpers::login($username);
      }
      return $this->redirect('/');
    }

    return Template::render("views/global/login.php", array());
  }

  function register(): string
  {

    if (isset($_POST['username']) && isset($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $passwordHash = hash('sha256', $password);
      $user = $this->loginModel->addUser($username, $passwordHash);
      // if ($user) {
      //   SessionHelpers::login($username);
      // }
      return $this->redirect('/login');
    }
    return Template::render("views/global/register.php", array());
  }

  function logout(): string
  {
    unset($_SESSION['LOGIN']);
    return $this->redirect('/');
  }
}
