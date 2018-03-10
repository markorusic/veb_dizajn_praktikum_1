<div class="bg-dark">
    <div class="container">
            <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php foreach(getByIDs([16, 88, 156, 167], $movies) as $i => $movie): ?>
                <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>">
                    <img class="d-block w-100 h-100" src="<?= $movie['landscape_img'] ?>" alt="<?= $movie['title'] ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?= $movie['title'] ?></h5>
                        <p><?= $movie['intro'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>    
</div>
