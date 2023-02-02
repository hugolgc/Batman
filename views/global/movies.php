<main class="movies">
  <div class="container">
    <h1>Films</h1>
    <ul>

      <?php foreach ($movies as $movie) : ?>
        <li>
          <img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>" />
          <h2><?= $movie->title ?></h2>
          <p><?= $movie->synopsis ?></p>
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</main>