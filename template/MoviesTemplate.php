<div class="col">
  <div class="container">
    <div class="row g-0 border border-info rounded">
      <div class="col-4">
        <img src="<?= $movie->picture ?>" class="img-fluid" alt="#">
      </div>
      <div class="col-8">
        <div class="px-3">
          <h5 class=""><?= $movie->title ?></h5>
          <p class="text-muted"><?= $movie->description ?></p>
          <p class="text-muted"><small class="">Generi: <?= $movie->getGenres() ?></small>
          <p><small class="text-muted">ID: <?= $movie->id ?></small></p>
        </div>
      </div>
    </div>
  </div>
</div>

