<main class="movies">
  <div class="container">
    <h1>Edition des films</h1>
    <ul>

      <?php foreach ($movies as $movie) : ?>
        <li>
          <a href="/editMovie/<?= $movie->id ?>">
            <img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>" />
            <h2><?= $movie->title ?></h2>
          </a>
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</main>