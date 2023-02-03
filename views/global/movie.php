<style>
  body {
    /* background: url(<?= $movie->banner ?>) center / cover; */
  }
</style>
<main class="movie">
  <div class="container">
    <div class="head">
      <div>
        <h1><?= $movie->title ?></h1>
        <p><?= $movie->synopsis ?></p>
      </div>
      <img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>" />
    </div>
    <ul>
      <li>Note: <?= $movie->note ?>/100</li>
      <li>Budget: <?= $movie->budget ?>$</li>
      <li>Sortie: <?= $movie->date ?></li>
      <li>Recettes: <?= $movie->recipe ?>$</li>
      <li>Durée: <?= $movie->time ?>min</li>
      <li><?= $movie->genres ?></li>
    </ul>
    <p class="story"><?= $movie->story ?></p>
  </div>
</main>