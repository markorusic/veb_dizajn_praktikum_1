<?php

include('content.php');

if(!isset($_GET['id'])) {
    include('errors/400.php');
    die();
}

$id = $_GET['id'];

if(is_null(findMovie($id, $movies)) && $id != 'random') {
    include('errors/404.php');
    die();
}

$item = null;

if($id == 'random')
    $item = $movies[array_rand($movies)];
else
    $item = findMovie($id, $movies);

$page_title = $item['title'];

$recommendedMovies = getReccomended($item['id'], $movies, 6);

include('partials/header.php'); ?>

    <main id="movie">
        <div>
            <div class="flex-space-between flex-sm-reverse moive-top-area">
                <div class="movie-details p-5">
                    <h2 class="movie-title uc"><?=$item['title']?></h2>
                    <h6><span class="bold yellow">ŽANROVI:</span> <?=$item['genres']?></h6>
                    <h6><span class="bold yellow">REŽIJA:</span> Jodie Foster</h6>
                    <h6><span class="bold yellow">GLUMCI:</span> George Clooney, Julia Roberts, Jack O'Connell, Dominic West, Caitriona Balfe</h6>
                    <div class="user-actions">
                        <h6 style="display: inline-block;"><span class="bold yellow uc  mr-2">Ocena: </span></h6>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                    </div>
                </div>
                <div>
                    <img src="<?=$item['landscape_img']?>" alt="<?=$item['title']?>" class="movie-img">
                </div>
            </div>
            <div class="flex-space-between row py-3 px-5">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="mt-3">
                        <h2 class="mb-3 nice-font">Radnja: </h2>
                        <?= $item['intro'] ?>
                        <br><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi mollitia quae dolores itaque harum culpa hic soluta, cumque voluptates aliquid, velit, voluptas consequatur. Voluptatem commodi consequuntur illum eligendi minima qui!</p>                        
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 offset-lg-2">
                    <div class="mt-3">
                        <h2 class="mb-3 nice-font">Preporučujemo: </h2>
                        <div class="container">
                            <div class="row">                            
                                <?php foreach($recommendedMovies as $movie): ?>
                                    <div class="col-6 col-sm-4 movie-recomendation-item">
                                        <article>
                                            <a href="movie.php?id=<?= $movie['id'] ?>">
                                                <img src="<?= $movie['portrait_img'] ?>" alt="<?= $movie['title'] ?>" class="similar-movie-img movie-img-link">
                                            </a>
                                        </article>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php include('partials/footer.php'); ?>
