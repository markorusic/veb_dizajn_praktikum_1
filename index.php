<?php

include('content.php');

$page_title = "Pocetna";

include('partials/header.php'); ?>


<!-- main container -->
<main id="home">    

    <?php include('partials/carousel.php'); ?>   

    <div class="container" style="margin-top: 50px;">

        <article>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="nice-font">Najgledanije ovog meseca</h2>
                    <p class="font-18 mt-3">Izdvajamo 50 najgledanijih filmova ovog meseca!</p>
                </div>
            </div>
        </article>

        <section class="movies mt-5">
            <div class="row">
            <?php foreach(getReccomended(null, $movies, 12) as $movie): ?>
                <div class="col-12 col-sm-6 col-lg-4 home-movie-item">
                    <article>
                        <h4><a href="movies.php?id=<?= $movie['id'] ?>" class="movie-name">
                            <span class="yellow-slash">/</span> <?= $movie['title'] ?></a>
                        </h4>
                        <a href="movies.php?id=<?= $movie['id'] ?>">
                            <img src="<?= $movie['landscape_img'] ?>" alt="<?= $movie['title'] ?>" class="img-fluid movie-img-link">
                        </a>
                    </article>
                </div>
            <?php endforeach; ?>

            </div>

        </section>
    </div>
</main>
<!-- main container ends -->

<?php include('partials/footer.php'); ?>