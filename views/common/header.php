<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Batman - Lucas Thition & Hugo Lagache</title>
  <link rel="stylesheet" href="/public/style/main.css">
</head>

<body>
  <header>
    <nav class="container">
      <a href="/">
        <svg width="84" height="28" viewBox="0 0 83 29" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M41.1853 4.35982C42.3404 4.35982 42.8053 4.5899 42.8053 4.5899L43.5003 1.65983C43.5003 1.65983 44.0403 3.89494 44.2703 5.89997C44.5004 7.905 48.0503 6.59491 51.0555 5.97508C54.0654 5.35996 54.6805 0.5 54.6805 0.5H82.5209C82.5209 0.5 65.7058 5.59004 69.9507 16.775C69.9507 16.775 45.1155 12.9951 41.2604 28.5C37.4053 12.9998 12.5702 16.775 12.5702 16.775C16.8103 5.59004 0 0.5 0 0.5H27.8403C27.8403 0.5 28.4555 5.35996 31.4654 5.97508C34.4753 6.59021 38.0205 7.905 38.2506 5.89997C38.4806 3.89494 39.0206 1.65983 39.0206 1.65983L39.7156 4.5899C39.7156 4.5899 40.1805 4.35982 41.3356 4.35982H41.1853Z" fill="white" />
        </svg>
        <span class="sr-only">Logo Batman - lien vers accueil</span>
      </a>
      <ul>
        <li>
          <a href="/" class="active">Accueil</a>
        </li>
        <li>
          <a href="/movies">Films</a>
        </li>
        <li>
          <a href="/actors">Acteurs</a>
        </li>
        <li>
          <a href="/pictures">Gallerie</a>
        </li>
      </ul>
      <?php

      use utils\SessionHelpers;

      if (SessionHelpers::isLogin()) : ?>
        <div class="container-button">
          <a href="/editMovie" class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
          </a>
          <a href="/logout" class="button">Déconnexion</a>
        </div>
      <?php else : ?>
        <a href="/login" class="button">Connexion</a>
      <?php endif; ?>
    </nav>
  </header>