<main class="movies">
  <div class="container">
    <h1>Films</h1>
    <ul>

      <?php foreach ($movies as $movie) : ?>
        <li>
          <a href="/movies/<?= $movie->id ?> ">
            <img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>" />
            <h2><?= $movie->title ?></h2>
            <p>Sorti le <?= implode('/', array_reverse(explode("-", $movie->date))) ?>, <?= $movie->synopsis ?></p>
          </a>
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</main>