<style>
  body {
    /* background: url(<?= $movie->banner ?>) center / cover; */
  }
</style>
<main class="movie">
  <div class="container">
    <div class="banner">
      <img src="<?= $movie->banner ?>" alt="<?= $movie->title ?>" />
    </div>
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
      <!-- <li><?= $movie->genres ?></li> -->
    </ul>
    <!-- <h3 class="pb-16">Synopsis</h3>
    <p class="story pb-64"><?= $movie->synopsis ?></p> -->

    <h3 class="pb-16">Résumé complet</h3>

    <p class="story pb-64"><?= $movie->story ?></p>
    <div>

      <h3 class="sr-only">Acteurs</h3>
      <ul class="actors batman">
        <?php foreach ($actors as $actor) : ?>
          <li>
            <img src="<?= $actor->image ?>" alt="<?= $actor->name ?>" />
            <div>
              <h4><?= $actor->name ?></h4>
              <p><?= $actor->role ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>



    <h3 class="sr-only">Bandes annonces</h3>
    <iframe class="movie" src="https://www.youtube.com/embed/jXrFsn9pcZY" title="Batman kidnaps Lau from Hong Kong | The Dark Knight [4k, HDR, IMAX]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div class="login">
      <?php foreach ($comments as $comment) : ?>
        <div class="comment comment-details">
          <div>
            <span class="comment-name"><?= $comment->name ?></span>
            <span class="comment-date"><?= $comment->date ?></span>
          </div>
          <p><?= $comment->content ?></p>
        </div>
      <?php endforeach; ?>

      <form action="/addComment/<?= $movie->id ?>" method="post" class="addCommentForm">
        <input type="text" placeholder="Nom" name="name" required />
        <textarea placeholder="Commentaire" name="content" required></textarea>
        <button type="submit">Envoyer</button>
    </div>
  </div>

  <div class="container pictures">
    <h1>Gallerie</h1>
    <ul>

      <?php foreach ($images as $picture) : ?>
        <li>
          <img src="<?= $picture->link ?>" />
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</main>